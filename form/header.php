<?php 

// Decent debugging:
//require '../../kint/Kint.class.php';
include_once 'functions.php';

// Email is send from and to
$to_email = array("femke.morsch@surfnet.nl"); //,
$from_email = array("surfconext-beheer@surfnet.nl" => "SURFconext Beheer");


// Require user AuthN (true/false)
// If true, Assumes simplesamlphp to be installed
// Turn it of for easy dev work on form
$requireAuthN = true;

if ($requireAuthN) {
	require_once('../../../simplesamlphp/lib/_autoload.php');

	$as = new SimpleSAML_Auth_Simple('default-sp');
	$as->requireAuth();
}

if ($requireAuthN) {
	$attributes = $as->getAttributes();

	$user = $attributes["urn:mace:dir:attribute-def:displayName"][0];
	$email = $attributes["urn:mace:dir:attribute-def:mail"][0];
	$home_org = $attributes["urn:mace:terena.org:attribute-def:schacHomeOrganization"][0];
} else {
	$user = "John Doe";
	$email = "john.doe@example.org";
	$home_org = "example.org";
}

// Page flow and headers
$pageHeaders = array(	"1" => "Introduction", 
						"2" => "Provide Connection Details", 
						"201" => "Confirm Connection Details",
						"3" => "Provide Metadata", 
						"301" => "Confirm Metadata",
						"4" => "Validate Metadata", 
						"401" => "Overview",
						"501" => "Request Submitted");

// data headers
// No records are created for pages which have no headers
$formArrayHeaders = array(	"1" => NULL, 
						"2" => NULL, 
						"201" => "ConnectionDetails",
						"3" => NULL, 
						"301" => "confirmedMetadata",
						"4" => NULL, 
						"401" => "validatedMetadata",
						"501" => NULL);

if (isset($_POST["page"])) {
	$pagenr = $_POST["page"];
} elseif (isset($_GET["page"])) {
	$pagenr = $_GET["page"];
} else {
	$pagenr  = 1;
}

// We can also directly go to page 3 with a metadata url
if (isset($_GET["metadata-url"])) {
    $pagenr = 3;
    $_SESSION['formContent']['confirmedMetadata']['metadataURL'] = $_GET["metadata-url"];
    $_SESSION['urlProvided'] = true;
}

// Each time a form is posted, key and value will be stored in formContent. 
if (!isset($_SESSION["formContent"])) {
    $_SESSION["formContent"] = array();
}
if (!isset($formContent)) {
    $formArray = array();
}

//$formContent = $_SESSION["formContent"];
//echo "<br>Processing Form Content......<br>";

if ($formArrayHeaders[$pagenr] != NULL) {
	foreach ($_POST as $key => $value) {
		if ($key != "page") {
			$formArray[$key] = $value;
		}
	}
	$_SESSION["formContent"][$formArrayHeaders[$pagenr]] = $formArray;
};
//echo "<br>Processing Done";

// Trigger error handling
set_error_handler("exception_error_handler");

/*
d($_SESSION);
d($_GET);
d($_POST);
d($formContent);
*/

if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 0;
} else {
	$_SESSION['count']++;
}

?>

