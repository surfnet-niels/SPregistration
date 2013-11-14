<?php
/**
 * Created by JetBrains PhpStorm.
 * User: niels
 * Date: 8/30/13
 * Time: 3:14 PM
 * To change this template use File | Settings | File Templates.
 */

if ($requireAuthN) {
	require_once('../../simplesamlphp/lib/_autoload.php');

	$as = new SimpleSAML_Auth_Simple('default-sp');
	$as->requireAuth();
	$attributes = $as->getAttributes();

	$user = $attributes["urn:mace:dir:attribute-def:displayName"][0];
	$email = $attributes["urn:mace:dir:attribute-def:mail"][0];
	$home_org = $attributes["urn:mace:terena.org:attribute-def:schacHomeOrganization"][0];
	
} else {
	$user = "Unknown";
	$email = "john.doe@example.org"
	$home_org = "example.org";
}

$to_email = "surfconext-beheer@surfnet.nl";
$from_email = "surfconext-beheer@surfnet.nl";
$conextdataHTML = "";

$timestamp = date("d-m-Y H:i");
$ip = $_SERVER["REMOTE_ADDR"];
$user = $attributes["urn:mace:dir:attribute-def:displayName"][0];
$email = $attributes["urn:mace:dir:attribute-def:mail"][0];
$home_org = $attributes["urn:mace:terena.org:attribute-def:schacHomeOrganization"][0];;

//Add user to the mail to send a copy
$to_email .= "," . $email;

// TODO: get JIRA ticket NR and add that to the subject...

$filename = "/tmp/".uniqid("spForm_").".xml";

//$tmpfname = tempnam("/tmp", "spFORM_");

$metadata = $_POST["metadata"];
$conextdata = $_POST["conextdata"];

// Fields are split by ;
// key value pairs by :

?>
<html>
<body>
<link type="text/css" href="samlmetajs/css/samlmetajs.css" rel="Stylesheet" />

<?php

$conextdata = explode(";",$conextdata);

$conextdataHTML .= "<h2>Thank you for your request to conext a new Servide Provider!</h2>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
$conextdataHTML .= "<table><tr><td><b>Date</b>: </td><td>" . $timestamp ."</td></tr>";
$conextdataHTML .= "<tr><td><b>Request made by</b>: </td><td>" .$user . "</td></tr>";
$conextdataHTML .= "<tr><td><b>From IP adress</b>: </td><td>" .$ip . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Email</b>: </td><td>" .$email . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Home Organisation</b>: </td><td>" .$home_org . "</td><td></td></tr></table></div>";

$conextdataHTML .= "<p>A copy of this information was forwarded to your email address.</p>";

$conextdataHTML .= "<h3>We revieved the following application information:</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
$conextdataHTML .= "<p><table>";
foreach($conextdata as $conextdatavalue){
    $conextdatavalue = explode("::", $conextdatavalue);

    $conextdataHTML .= "<tr><td><b>".$conextdatavalue[0]."</b>: </td><td>";
    $conextdataHTML .= $conextdatavalue[1]."</td></tr>";
}
$conextdataHTML .= "</table></div>";

$conextdataHTML .= "<h3>We revieved the following SAML2 Metadata:</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>";
$conextdataHTML .= htmlspecialchars($metadata);
$conextdataHTML .= "</pre></div>";

print($conextdataHTML);
//var_dump($conextdata);

writeFile($filename, $metadata);

$sendok = sendMail(	$to_email,
    $from_email,
    "SPform",
    "",
    "[SPform] New SP connection request",
    $conextdata,
    $conextdataHTML,
    $filename,
    "text/xml");

unlink($filename);

?>



</body>


