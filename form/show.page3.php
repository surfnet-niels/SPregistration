<section class="content">

<div class="content">
<h2><?php echo $pageHeaders[$pagenr]?></h2>
    <form action="index.php" method="post">
    	<input type="hidden" name="page" value="301">
<!-- Metadata URL -->
<fieldset id="metadata">
	<legend>Metadata</legend>
	<div>
		<p>Any SAML2 connection to the SURFconext platform needs to be setup using SAML2 metadata that you as an Service provider need to supply. SURFconext requires you to publish your metadata a location that is verifiably onder you control, and using a valid https certificate, e.g. https://www.yourcompany.com/sp_metadata.xml
		<p>
			<ul>
				<li>Please provide a metadata URL in the text box below</li>
				<li><i class="icon-exclamation-sign"></i>If you cannot present the metadata via a URL at this time you may copy-past the metadata into the textarea. Please not however, that for production systems we require the metadata to be published at a URL
				</li>
			</ul>
		</p>
	</div>
	
	<div style="float: left; width: 70%" title="Metadata">
		<p>Metadata URL:<br>
		<input type="text" id="metadataURL" name="metadataURL" style="width: 80%"/><br>
		<input type="submit" value="Submit URL" style="float: left" ></p>
	</div>
	<br/>
	<div style="float: left; width: 70%" title="SURFmarket">	
		<p>Metadata XML:<br>
		<textarea name="metadataXML" id="metadataXML" style="width: 80%; height: 500px"></textarea><br>
            <button type="submit" class="btn btn-primary left">Submit XML</button>

	</div>
</fieldset>
</form>
</div>
</section>
