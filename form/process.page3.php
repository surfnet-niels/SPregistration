<?php 
$metadataURL = $_POST["metadataURL"];
$metadataXML = $_POST["metadataXML"];

$XMLerror = false;
$inputMethode = "none";

$skipMetaData = isset($_POST["skipMetaData"]);
if ($skipMetaData) {
    $metadataFile = '';//file_get_contents("./metadata/bare-sp-metadata.xml");
}

if (!$skipMetaData && (strlen($metadataURL)>0) && (strlen($metadataXML)>0)) {
	$XMLerror = true;
	$errorMSG = "Please use only one means of providing Metadata";
};

if (!$skipMetaData && (strlen($metadataURL)<=0) && (strlen($metadataXML)<=0)) {
	$XMLerror = true;
	$errorMSG = "Please use at least one means of providing Metadata";
};

if ((strlen($metadataURL)>0) && (strlen($metadataXML)<=0)) {
	$inputMethode = "URL";
} else {
	$inputMethode = "XML";
};

if (!$skipMetaData && $inputMethode == "URL") {
	
	// Try to download the XML
	try {
		$metadataFile = file_get_contents($metadataURL);
	} catch (Exception $e) {
		$XMLerror = true;
		$errorMSG = 'Something is wrong with the URL you provided. ' . $metadataURL . ' is not a valid XML endpoint';
	};
	// Add metadata validation functions here

};

if (!$skipMetaData && $inputMethode == "XML") {
	$metadataFile = $metadataXML;
	
	// Add metadata validation functions here
}

?>

<?php if($XMLerror) {?>
<section class="content">
    <h2><?php echo $pageHeaders[$pagenr]?></h2>
    <div class="content">
    <h3>Error</h3>
    <p>
		<?php echo $errorMSG;?>
    </p>
    <a href="index.php?page=3" class="btn btn-primary"">Go back</a>
    </div>
    </section>
<?php
	} else {
        $confirmedMetadata = $metadataFile;
        include 'show.page4.php';
    }
?>

