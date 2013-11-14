<?php 
include 'functions.php';

$editedMetadata = $_POST["metadata"];

include_once '../geshi/geshi.php';
$geshi = new GeSHi(beautifyXML($editedMetadata), "XML");
//$geshi = new GeSHi($editedMetadata, "XML");




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
			print($geshi->parse_code());
		?>
	<!-- </textarea><br> -->
	
	
	<input type="hidden" name="page" value="5">
	<input type="submit" value="Confirm">
	<input type="button" value="Change" onClick="window.history.back();">
	    	
	    	
<?php };?>	    	
	</form>
	</div>
</section>
