<?php 
$metadataURL = $_POST["metadataURL"];
$metadataXML = $_POST["metadataXML"];

$XMLerror = false;
$inputMethode = "none";

if ((strlen($metadataURL)>0) && (strlen($metadataXML)>0)) {
	$XMLerror = true;
	$errorMSG = "Please use only one means of providing Metadata";
};

if ((strlen($metadataURL)<=0) && (strlen($metadataXML)<=0)) {
	$XMLerror = true;
	$errorMSG = "Please use at least one means of providing Metadata";
};

if ((strlen($metadataURL)>0) && (strlen($metadataXML)<=0)) {
	$inputMethode = "URL";
} else {
	$inputMethode = "XML";
};

if ($inputMethode == "URL") {
	
	// Try to download the XML
	try {
		$metadataFile = file_get_contents($metadataURL);
	} catch (Exception $e) {
		$XMLerror = true;
		$errorMSG = 'Something is wrong with the URL you provided. The error message was:<br/>'.  $e->getMessage(). '<br/>';
	};
	// Add metadata validation functions here

};

if ($inputMethode == "XML") {
	$metadataFile = $metadataXML;
	
	// Add metadata validation functions here
}


include_once '../geshi/geshi.php';
$geshi = new GeSHi(beautifyXML($metadataFile), "XML");

?>

<section>
<h2><?php echo $pageHeaders[$pagenr]?></h2>
<div class="content">
<form action="index.php" method="post">
<?php if($XMLerror) {?>
    <h3>Error</h3>
    <p>
		<?php echo $errorMSG;?>
    </p>
    <input type="button" value="Change" onClick="window.history.back();">
<?php 
	} else {
?>
	<p>
		Please confirm below is the metadata you want to use
    </p>
	<!-- <textarea name="submittedMetadata" id="submittedMetadata" style="width: 80%; height: 500px">  -->
		<?php 
			//print(beautifyXML($metadataFile)); 
			print($geshi->parse_code());
		?>
	<!-- </textarea><br> -->
	
	<textarea name="confirmedMetadata" style="display:none;"><?php echo $metadataFile;?></textarea>
	<input type="hidden" name="page" value="4">
	<input type="submit" value="Confirm">
	    	
	    	
<?php };?>	    	
	</form>
	</div>
</section>