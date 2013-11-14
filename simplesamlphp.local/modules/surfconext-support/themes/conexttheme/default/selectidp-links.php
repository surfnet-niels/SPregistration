<?php

if(!array_key_exists('header', $this->data)) {
	$this->data['header'] = 'selectidp';
}

$this->data['header'] = $this->t($this->data['header']);

$this->data['autofocus'] = 'preferredidp';

$this->includeAtTemplateBase('includes/header.php');

foreach ($this->data['idplist'] AS $idpentry) {
	if (isset($idpentry['name'])) {
		$this->includeInlineTranslation('idpname_' . $idpentry['entityid'], $idpentry['name']);
	} elseif (isset($idpentry['OrganizationDisplayName'])) {
		$this->includeInlineTranslation('idpname_' . $idpentry['entityid'], $idpentry['OrganizationDisplayName']);
	}
	if (isset($idpentry['description']))
		$this->includeInlineTranslation('idpdesc_' . $idpentry['entityid'], $idpentry['description']);

	if (isset($idpentry["UIInfo"]["Logo"])) {
		$idpentry["icon"] = $idpentry["UIInfo"]["Logo"][0]["url"];
	}



}


?>
		<h2><?php echo $this->data['header']; ?></h2>

		<form method="get" action="<?php echo $this->data['urlpattern']; ?>">
		<input type="hidden" name="entityID" value="<?php echo htmlspecialchars($this->data['entityID']); ?>" />
		<input type="hidden" name="return" value="<?php echo htmlspecialchars($this->data['return']); ?>" />
		<input type="hidden" name="returnIDParam" value="<?php echo htmlspecialchars($this->data['returnIDParam']); ?>" />
		
		<p><?php
		echo $this->t('selectidp_full');
		if($this->data['rememberenabled']) {
			echo('<br /><input type="checkbox" name="remember" value="1" title="'.$this->t('remember').'" />' . $this->t('remember'));
		}
		?></p>

		<?php

		
		if (!empty($this->data['preferredidp']) && array_key_exists($this->data['preferredidp'], $this->data['idplist'])) {
			$idpentry = $this->data['idplist'][$this->data['preferredidp']];

			if (isset($idpentry["UIInfo"]["Logo"])) {
		                $idpentry["icon"] = $idpentry["UIInfo"]["Logo"][0]["url"];
		        }

			echo '<div class="preferredidp">';
			echo '	<img  style="margin: 1em; padding: 3px;" src="/' . $this->data['baseurlpath'] .'resources/icons/experience/gtk-about.64x64.png" class="float-l" alt="'.$this->t('icon_prefered_idp').'" />';

			if(array_key_exists('icon', $idpentry) && $idpentry['icon'] !== NULL) {
				$iconUrl =  $idpentry['icon'];
				$iconUrl = SimpleSAML_Utilities::resolveURL($idpentry['icon']);
				echo '<img class="float-r" style="margin: 1em; padding: 3px; border: 1px solid #999" src="' . htmlspecialchars($iconUrl) . '" />';
			}
			echo "\n" . '	<h3 style="margin-top: 8px">' . htmlspecialchars($this->t('idpname_' . $idpentry['entityid'])) . '</h3>';

			if (!empty($idpentry['description'])) {
				echo '  <p>Press Select to use <i>' . htmlspecialchars($this->t('idpdesc_' . $idpentry['entityid'])) . '</i> to log in.<br />';
			}
			echo('<input id="preferredidp" type="submit" name="idp_' .
				htmlspecialchars($idpentry['entityid']) . '" value="' .
				$this->t('select') . '" /></p>');
			echo '</div>';
		}
		
		
		foreach ($this->data['idplist'] AS $idpentry) {
			if (isset($idpentry["UIInfo"]["Logo"])) {
                        	$idpentry["icon"] = $idpentry["UIInfo"]["Logo"][0]["url"];
                       	}

			if ($idpentry['entityid'] != $this->data['preferredidp']) {
				if(array_key_exists('icon', $idpentry) && $idpentry['icon'] !== NULL) {
	                                $iconUrl = $idpentry['icon'];
					$iconUrl = SimpleSAML_Utilities::resolveURL($idpentry['icon']);
					echo '<img class="float-r" style="clear: both; margin: 1em; padding: 3px; border: 1px solid #999" src="' . htmlspecialchars($iconUrl) . '" />';
				}
				echo "\n" . '	<h3 style="margin-top: 8px">' . htmlspecialchars($this->t('idpname_' . $idpentry['entityid'])) . '</h3>';

				if (!empty($idpentry['description'])) {
					echo '	<p>Press Select to use <i>' . htmlspecialchars($this->t('idpdesc_' . $idpentry['entityid'])) . '</i> to log in.<br />';
				}
				echo('<input type="submit" name="idp_' .
					htmlspecialchars($idpentry['entityid']) . '" value="' .
					$this->t('select') . '" /><br></p>');
			}
		}
		
		?>
		</form>
		
<?php $this->includeAtTemplateBase('includes/footer.php'); ?>
