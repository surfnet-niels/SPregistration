<?php 

$formArray = $_SESSION["formContent"]["ConnectionDetails"];
$metadataURL = $_SESSION["formContent"]['confirmedMetadata']['metadataURL'];
$metadata = $_SESSION["formContent"]['validatedMetadata']['metadata'];

$conextdataHTML = "";
$conextdataTXT = "";

$timestamp = date("d-m-Y H:i");
$ip = $_SERVER["REMOTE_ADDR"];

$requestid = MD5($metadata . $timestamp . $ip);


//Add user to the mail to send a copy
$to_email .= "," . $email;

// TODO: get JIRA ticket NR and add that to the subject...

$filename = "/tmp/".uniqid("spForm_").".xml";

//$tmpfname = tempnam("/tmp", "spFORM_");

// Fields are split by ;
// key value pairs by :

// TXT version
$conextdataTXT .= "*Thank you for your request to conext a new Servide Provider!*\n";
$conextdataTXT .= "=======================================================================================================\n";
$conextdataTXT .= "*Request ID*: " .$requestid ."\n";
$conextdataTXT .= "*Date*: " . $timestamp ."\n";
$conextdataTXT .= "*Request made by*: " .$user ."\n";
$conextdataTXT .= "*From IP adress*: " .$ip ."\n";
$conextdataTXT .= "*Email*: " .$email ."\n";
$conextdataTXT .= "*Home Organisation*: " .$home_org ."\n";

$conextdataTXT .= "\nA copy of this information was forwarded to your email address.\n";

$conextdataTXT .= "\n*We revieved the following application information:*\n";
foreach($formArray as $conextdataKey => $conextdatavalue){
	$conextdataTXT .= "*".$conextdataKey. "*: " . $conextdatavalue."\n";
}
$conextdataTXT .= "\n*Please use the provided Metadata URL to publish your saml metadata at:*\n";
$conextdataTXT .= "=======================================================================================================\n";
$conextdataTXT .= $metadataURL . "\n";
$conextdataTXT .= "=======================================================================================================\n";

$conextdataTXT .= "\n*The following SAML2 Metadata was validated*\n";
$conextdataTXT .= "=======================================================================================================\n";
$conextdataTXT .= beautifyXML($metadata)."\n";
$conextdataTXT .= "=======================================================================================================\n";


// HTML version
$conextdataHTML .= "<h2>Thank you for your request to conext a new Servide Provider!</h2>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
$conextdataHTML .= "<table><tr><td><b>Request ID</b>: </td><td>" . $requestid ."</td></tr>";
$conextdataHTML .= "<tr><td><b>Date</b>: </td><td>" . $timestamp ."</td></tr>";
$conextdataHTML .= "<tr><td><b>Request made by</b>: </td><td>" .$user . "</td></tr>";
$conextdataHTML .= "<tr><td><b>From IP adress</b>: </td><td>" .$ip . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Email</b>: </td><td>" .$email . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Home Organisation</b>: </td><td>" .$home_org . "</td><td></td></tr></table></div>";

$conextdataHTML .= "<p>A copy of this information was forwarded to your email address.</p>";

$conextdataHTML .= "<h3>We revieved the following application information:</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
$conextdataHTML .= "<p><table>";
foreach($formArray as $conextdataKey => $conextdatavalue){
    $conextdataHTML .= "<tr><td><b>".$conextdataKey."</b>: </td><td>";
    $conextdataHTML .= $conextdatavalue."</td></tr>";
}
$conextdataHTML .= "</table></div>";

$conextdataHTML .= "<h3>Please use the provided Metadata URL to publish your saml metadata at:</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>";
$conextdataHTML .= $metadataURL;
$conextdataHTML .= "</pre></div>";

$conextdataHTML .= "<h3>The following SAML2 Metadata was validated</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>";
$conextdataHTML .= htmlspecialchars(beautifyXML($metadata));
$conextdataHTML .= "</pre></div>";

print($conextdataHTML);

echo "Sending Email....";
writeFile($filename, $metadata);

$sendok = sendMail(	$to_email,
    $from_email,
    "SPform",
    "",
    "[SPregistration] New SP connection request " . $requestid,
    $conextdataTXT,
    $conextdataHTML,
    $filename,
    "text/xml");
unlink($filename);

echo "Send: " . $sendok;

?>

