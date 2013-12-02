<?php
    $confirmedMetadata = isset($_SESSION['formContent']['confirmedMetadata']) ? $_SESSION['formContent']['confirmedMetadata'] : array();
?>
<section class="content">

<h2><?php echo $pageHeaders[$pagenr]?></h2>
<div class="content">
    <form action="index.php" method="post">
    	<input type="hidden" name="page" value="301">
<!-- Metadata URL -->
<fieldset id="metadata">
	<legend>Metadata</legend>
	<div>
		<p>Any SAML2 connection to the SURFconext platform needs to be setup using SAML2 metadata that you as an Service provider need to supply.</p>
        <p>If you don't have any metadata you can also skip this section and proceed to the metadata wizard.</p>
        <button id="skip_meta_data_submit" type="submit" name="skipMetaData" value="true" class="btn btn-primary block">Skip</button>

        <p>
        SURFconext requires you to publish your metadata a location that is verifiably onder you control, and using a valid https certificate, e.g. https://www.yourcompany.com/sp_metadata.xml
		</p>
			<ul>
				<li>Please provide a metadata URL in the text box below</li>
				<li><i class="icon-exclamation-sign"></i>If you cannot present the metadata via a URL at this time you may copy-past the metadata into the textarea. Please not however, that for production systems we require the metadata to be published at a URL
				</li>
			</ul>
		</p>
	</div>
	
	<div>
		<p>Metadata URL:</p>
		<input type="text" id="metadataURL" name="metadataURL" style="width: 80%" value="<?php echo isset($confirmedMetadata['metadataURL']) ? $confirmedMetadata['metadataURL'] : ''; ?>" />
		<button id="submit_metadata_url" type="submit" class="btn btn-primary block">Submit URL</button>
	</div>
	<div>	
		<p>Metadata XML:</p>
		<textarea name="metadataXML" id="metadataXML" style="width: 80%; height: 500px"><?php echo isset($confirmedMetadata['metadataXML']) ? $confirmedMetadata['metadataXML'] : ''; ?></textarea>
		<button id="submit_metadata_xml"  type="submit" class="btn btn-primary block">Submit XML</button>

	</div>
</fieldset>
</form>
</div>
</section>
