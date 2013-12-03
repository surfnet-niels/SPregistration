
<!-- Include Google maps to use with SAMLmetaJS locaiton plugin -->
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>  -->

<!-- JQuery + JQuery UI -->
<script type="text/javascript" src="../SAMLmetaJS/jquery/js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../SAMLmetaJS/jquery/js/jquery-ui-1.8.14.custom.min.js"></script>
<link rel="stylesheet" media="screen" type="text/css" href="../SAMLmetaJS/jquery/css/smoothness/jquery-ui-1.8.14.custom.css" />

<!-- SAMLmetaJS -->
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/samlmeta.js"></script>
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/constants.js"></script>
<script type="text/javascript" src="../SAMLmetaJS/samlmetajs/mdreader.js"></script>
<script type="text/javascript" src="../SAMLmetaJS/samlmetajs/samlmeta.xml.js"></script>
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/samlmeta.plugin.info.js"></script>
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/samlmeta.plugin.org.js"></script>
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/samlmeta.plugin.contact.js"></script>
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/samlmeta.plugin.saml2sp.js"></script>
<!-- <script type="text/javascript" src="../SAMLmetaJS/samlmetajs/samlmeta.plugin.location.js"></script> -->
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/samlmeta.plugin.certs.js"></script>
<script type="text/javascript" src="../SAMLmetaJS.local/samlmetajs/samlmeta.plugin.attributes.js"></script>
<!-- <script type="text/javascript" src="../SAMLmetaJS/samlmetajs/samlmeta.plugin.fedlab.js"></script> -->

<!-- 
	You are reccomended to select which plugins you would like to use, and then use the download package
	minifier at 
		
		http://samlmetajs.simplesamlphp.org/download
	
	You will then end up with a single file to include instead of the list of files shown above. This will be much more effective 
	for the user. You would need to include the file like this:
	
	<script type="text/javascript" src="SAMLmetaJS/samlmeta.info-organization-contact-certs-saml2sp-attributes.min.js"></script> 
-->

<link type="text/css" href="../SAMLmetaJS.local/samlmetajs/css/samlmetajs.css" rel="stylesheet" />
	
<section class="content">
<h2><?php echo $pageHeaders[$pagenr]?></h2>
<div class="content">

<form action="index.php" method="post" name="metadata">
<input type="hidden" name="page" value="401">
<!-- Metadata Validation -->
<fieldset id="metadatavalidation">
	<legend>Metadata validation and editor</legend>
	<div>
		<p>The Metadata validator and editor detects errors and omissions in the provided metadata, as indicated by the following highlighted missing metadata.</p>
		<p>Please walk through the provided tabs and and correct the errors as indicated. If all errors are solved only then continue.</p>
    </div>
    <button type="submit" class="btn btn-primary block">Continue</button>

	<div title="Metadata validation and editor">
		<textarea name="metadata" id="metadata"style="width: 100%; height: 600px"></textarea>
	</div>
	
</fieldset>	
<textarea name="providedmetadata" id="providedmetadata" style="display:none;"><?php echo $confirmedMetadata ?></textarea>

</form>
</div>
</section>
