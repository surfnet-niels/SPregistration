<?php
$metadataURL = $_POST["metadataURL"];
$metadataXML = $_POST["metadataXML"];

$XMLerror = false;

$skipMetaData = isset($_POST["skipMetaData"]);
if ($skipMetaData) {
    $metadataFile = '';
} elseif (isset($_POST["submitMetadataXml"])) {
    $metadataFile = $metadataXML;
} elseif (isset($_POST["submitMetadataUrl"])) {
    try {
        $metadataFile = file_get_contents($metadataURL);
    } catch (Exception $e) {
        $XMLerror = true;
        $errorMSG = 'Something is wrong with the URL you provided. ' . $metadataURL . ' is not a valid XML endpoint';
    }
} else {
    $XMLerror = true;
    $errorMSG = "Please provide us either with the Metadata URL of XML";
}
?>

<?php if ($XMLerror) { ?>
    <section class="content">
        <h2><?php echo $pageHeaders[$pagenr] ?></h2>

        <div class="content">
            <h3>Error</h3>

            <p>
                <?php echo $errorMSG; ?>
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

