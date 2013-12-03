<?php
    $confirmedMetadata = isset($_SESSION['formContent']['confirmedMetadata']) ? $_SESSION['formContent']['confirmedMetadata'] : array();
    $metadataResult = isset($confirmedMetadata['metadataXMLresult']) ? $confirmedMetadata['metadataXMLresult'] : false;
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
		<p>It is recommended to make use of a metadata file. You can fill in the location of this file (option 1) or paste this file into the text area (option 2). If you don't have a metadata file you can fill in the metadata manually (option 3).</p>
        
        <p>
       Option 1 (recommended and required for production connections): Publish your metadata on a https domain, owned by your company. (e.g. https://www.yourcompany.com/sp_metadata.xml).
		</p>
	</div>
	<div>
		<p>Metadata URL:</p>
		<input type="text" id="metadataURL" name="metadataURL" style="width: 80%" value="<?php echo isset($confirmedMetadata['metadataURL']) ? $confirmedMetadata['metadataURL'] : ''; ?>" />
		<button id="submit_metadata_url" type="submit" class="btn btn-primary block">Submit URL</button>
	</div>
		<p>Option 2: Paste the metadata in the text area below.</p>
	<div>
		<p>Metadata XML:</p>
		<textarea name="metadataXML" id="metadataXML" style="width: 80%; height: 500px"><?php echo (isset($confirmedMetadata['metadataXML']) && !$metadataResult) ? $confirmedMetadata['metadataXML'] : ($metadataResult ? $metadataResult : ''); ?></textarea>
		<button id="submit_metadata_xml"  type="submit" class="btn btn-primary block">Submit XML</button>

	 </div>
	<p>Option 3: If you don't have any metadata you can also skip this section and proceed to the metadata wizard.</p>
        <button id="skip_meta_data_submit" type="submit" name="skipMetaData" value="true" class="btn btn-primary block">Provide metadata manually</button>
</fieldset>
</form>
</div>
</section>
