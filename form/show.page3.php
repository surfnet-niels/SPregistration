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
		<p>It is recommended to make use of a metadata file. You can fill in the location of this file (<em>option 1</em>) or paste this file into the text area (<em>option 2</em>). If you don't have a metadata file you can fill in the metadata manually (<em>option 3</em>).</p>
        
        <p>
       <em>Option 1</em> (recommended and required for production connections):</p>
        <p>Publish your XML metadata on a https domain, owned by your company (e.g. https://www.yourcompany.com/sp_metadata.xml) and provide us with the URL of the XML metadata.</p>
	</div>
	<div>
		<input type="text" id="metadataURL" name="metadataURL" style="width: 80%" value="<?php echo isset($confirmedMetadata['metadataURL']) ? $confirmedMetadata['metadataURL'] : ''; ?>" />
		<button id="submit_metadata_url" name="submitMetadataUrl" type="submit" class="btn btn-primary block">Submit URL</button>
	</div>
		<p><em>Option 2</em>:</p>
    <p>Paste the XML metadata in the text area below.</p>
	<div>
		<textarea name="metadataXML" id="metadataXML" style="width: 80%; height: 500px"><?php echo (isset($confirmedMetadata['metadataXML']) && !$metadataResult) ? $confirmedMetadata['metadataXML'] : ($metadataResult ? $metadataResult : ''); ?></textarea>
		<button id="submit_metadata_xml" name="submitMetadataXml" type="submit" class="btn btn-primary block">Submit XML</button>

	 </div>
	<p><em>Option 3</em>:</p>
    <p>If you don't have any metadata you can also skip this section and proceed to the metadata wizard.</p>
        <button id="skip_meta_data_submit" type="submit" name="skipMetaData" value="true" class="btn btn-primary block">Provide metadata manually</button>
</fieldset>
</form>
</div>
</section>
