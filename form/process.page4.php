<?php 
$editedMetadata = $_POST["metadata"];

include_once '../geshi/geshi.php';
$geshi = new GeSHi(beautifyXML($editedMetadata), "XML");
//$geshi = new GeSHi($editedMetadata, "XML");

$formArray = $_SESSION["formContent"]["ConnectionDetails"];
$metadataURL = $_SESSION["formContent"]['confirmedMetadata']['metadataURL'];

d($_SESSION);
?>

<section>
<h2><?php echo $pageHeaders[$pagenr]?></h2>
<div class="content">
<form action="index.php" method="post>
<div class="content">

			<!-- Contract -->
			<fieldset id="contract">
				<legend>Service Type & Licencing</legend>
					<div>The service type and licence regime I wish use: <b><?php echo $formArray["ServiceType"];?></b>
					</div>
			</fieldset>
			<br/>

			<!-- Purpose -->
			<fieldset id="purpose">
				<legend>Purpose of the Service</legend>
				<div>
					Purpose of the service:
				</div>
				<div style="float: left; width: 70%" title="Purpose">
					<b><?php echo $formArray["Purpose"];?></b>
				</div>
			</fieldset>
			<br/>
			
			<!-- Previous Install -->
			<fieldset id="experience">
				<legend>Experience</legend>
				<div>
					<p>Experience with setting up and maintaining a SAML2
					based service provider: <b><?php echo $formArray["Experience"];?></b> 
				</div>
			</fieldset>
			<br/>
			
			<!-- Current or Launching Customers  -->
			<fieldset id="customers">
				<legend>Current or Launching Customers</legend>
				<div>
					<p>Current or launching customers for your service:
				</div>
				<div style="float: left; width: 70%" title="Customers">
					<b><?php echo $formArray["Customers"];?></b> 
				</div>
			</fieldset>
			<br/>
			
			<!--  Test or Production  -->
			<fieldset id="state">
				<legend>Test or Production</legend>
				<div>
					<p>
						Test or a Production connection: <b><?php echo $formArray["State"];?></b> 
					</p>
				</div>
			</fieldset>
			<br/>
			
			<!--  Deadlines -->
			<fieldset id="planning">
				<legend>Planning & Deadlines</legend>
				<div>
					<p>
						When do you want your service to be connected?
					</p>
					
				</div>
				<div style="float: left; width: 70%" title="Planning">
					<b><?php echo $formArray["Planning"];?></b> 
				</div>
			</fieldset>
			<br/>

			<!-- Metadata -->
			<fieldset id="state">
				<legend>SAML Metadata</legend>
				<div>
					<p>
						Use the SAML2 Metadata URL displayed below
					</p>
					
				</div>
				<div>
					<p>
						<b><?php echo $metadataURL;?></b> 
					</p>
				</div>
				<div>
					<p>
					<?php 
						print($geshi->parse_code());
					?>
					</p>
				</div>
			</fieldset>
			<br/>

	<input type="hidden" name="page" value="501">
	<input type="submit" value="Confirm and Send">
	<input type="button" value="Change" onClick="window.history.back();">
	    	
	</form>
	</div>
</section>
