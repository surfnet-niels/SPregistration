<?php 

$formArray = $_SESSION["formContent"]["ConnectionDetails"];
$metadataURL = $_SESSION["formContent"]['confirmedMetadata']['metadataURL'];
$metadata = $_SESSION["formContent"]['validatedMetadata']['metadata'];

$conextdataHTML = "";

$timestamp = date("d-m-Y H:i");
$ip = $_SERVER["REMOTE_ADDR"];

//Add user to the mail to send a copy
$to_email .= "," . $email;

// TODO: get JIRA ticket NR and add that to the subject...

$filename = "/tmp/".uniqid("spForm_").".xml";

//$tmpfname = tempnam("/tmp", "spFORM_");

// Fields are split by ;
// key value pairs by :

//$conextdata = explode(";",$conextdata);

$conextdataHTML .= "<h2>Thank you for your request to conext a new Servide Provider!</h2>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
$conextdataHTML .= "<table><tr><td><b>Date</b>: </td><td>" . $timestamp ."</td></tr>";
$conextdataHTML .= "<tr><td><b>Request made by</b>: </td><td>" .$user . "</td></tr>";
$conextdataHTML .= "<tr><td><b>From IP adress</b>: </td><td>" .$ip . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Email</b>: </td><td>" .$email . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Home Organisation</b>: </td><td>" .$home_org . "</td><td></td></tr></table></div>";

$conextdataHTML .= "<p>A copy of this information was forwarded to your email address.</p>";
$conextdataHTML .= "<p>Please use the provided Metadata file to publish your saml metadata at".$metadataURL."</p>";

$conextdataHTML .= "<h3>We revieved the following application information:</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
$conextdataHTML .= "<p><table>";
foreach($formArray as $conextdataKey => $conextdatavalue){
    $conextdataHTML .= "<tr><td><b>".$conextdataKey."</b>: </td><td>";
    $conextdataHTML .= $conextdatavalue."</td></tr>";
}
$conextdataHTML .= "</table></div>";

$conextdataHTML .= "<h3>We revieved the following SAML2 Metadata:</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>";
$conextdataHTML .= htmlspecialchars(beautifyXML($metadata));
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

print($sendok);

unlink($filename);


?>

