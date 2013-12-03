<?php

$debug = true;

$formArray = isset($_SESSION["formContent"]["ConnectionDetails"]) ? $_SESSION["formContent"]["ConnectionDetails"] : array();
$metadataURL = $_SESSION["formContent"]['confirmedMetadata']['metadataURL'];
$metadata = $_SESSION['formContent']['confirmedMetadata']['metadataXMLresult'];

$conextdataHTML = "";
$conextdataTXT = "";

$timestamp = date("d-m-Y H:i");
$ip = $_SERVER["REMOTE_ADDR"];

$requestid = MD5($metadata . $timestamp . $ip);


// Fields are split by ;
// key value pairs by :

// TXT version
$conextdataTXT .= "*Thank you for your request to conext a new Servide Provider!*\n";
$conextdataTXT .= "=======================================================================================================\n";
$conextdataTXT .= "*Request ID*: " . $requestid . "\n";
$conextdataTXT .= "*Date*: " . $timestamp . "\n";
$conextdataTXT .= "*Request made by*: " . $user . "\n";
$conextdataTXT .= "*From IP adress*: " . $ip . "\n";
$conextdataTXT .= "*Email*: " . $email . "\n";
$conextdataTXT .= "*Home Organisation*: " . $home_org . "\n";

$conextdataTXT .= "\nA copy of this information was forwarded to your email address.\n";

if (!empty($formArray)) {
    $conextdataTXT .= "\n*We revieved the following application information:*\n";
    foreach ($formArray as $conextdataKey => $conextdatavalue) {
        $conextdataTXT .= "*" . $conextdataKey . "*: " . $conextdatavalue . "\n";
    }
}
if ($metadataURL) {
    $conextdataTXT .= "\n*Please use the provided Metadata URL to publish your saml metadata at:*\n";
    $conextdataTXT .= "=======================================================================================================\n";
    $conextdataTXT .= $metadataURL . "\n";
    $conextdataTXT .= "=======================================================================================================\n";
}

$conextdataTXT .= "\n*The following SAML2 Metadata was validated*\n";
$conextdataTXT .= "=======================================================================================================\n";
$conextdataTXT .= beautifyXML($metadata) . "\n";
$conextdataTXT .= "=======================================================================================================\n";


// HTML version
$conextdataHTML .= "<h2>Thank you for your request to conext a new Servide Provider!</h2>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
$conextdataHTML .= "<table><tr><td><b>Request ID</b>: </td><td>" . $requestid . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Date</b>: </td><td>" . $timestamp . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Request made by</b>: </td><td>" . $user . "</td></tr>";
$conextdataHTML .= "<tr><td><b>From IP adress</b>: </td><td>" . $ip . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Email</b>: </td><td>" . $email . "</td></tr>";
$conextdataHTML .= "<tr><td><b>Home Organisation</b>: </td><td>" . $home_org . "</td><td></td></tr></table></div>";

$conextdataHTML .= "<p>A copy of this information was forwarded to your email address.</p>";
if (!empty($formArray)) {
    $conextdataHTML .= "<h3>We revieved the following application information:</h3>";
    $conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>";
    $conextdataHTML .= "<p><table>";

    foreach ($formArray as $conextdataKey => $conextdatavalue) {
        $conextdataHTML .= "<tr><td><b>" . $conextdataKey . "</b>: </td><td>";
        $conextdataHTML .= $conextdatavalue . "</td></tr>";
    }
    $conextdataHTML .= "</table></div>";
}
if ($metadataURL) {
    $conextdataHTML .= "<h3>Please use the provided Metadata URL to publish your saml metadata at:</h3>";
    $conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>";
    $conextdataHTML .= $metadataURL;
    $conextdataHTML .= "</pre></div>";
}

$conextdataHTML .= "<h3>The following SAML2 Metadata was validated</h3>";
$conextdataHTML .= "<div class='infobox' style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>";
$conextdataHTML .= htmlspecialchars(beautifyXML($metadata));
$conextdataHTML .= "</pre></div>";

$to_email[$email] = $user;
sendMail2($to_email, $from_email, "[SPregistration] New SP connection request " . $requestid, $conextdataTXT, $conextdataHTML, $metadata, "text/xml");

?>
<section class="content">
    <h2>Confirmation</h2>

    <div class="content">

        <h3>Thanks for your information.</h3>

        <p>
            The mail with your submitted information is send to <em><?php echo $email ?></em>. Please note that it will take a minimal of 4 workdays to process your information.
        <p>
    </div>
</section>
<?php if ($debug): ?>
    <a href="#" class="show-hide"><p>Show / hide plain text email</p></a>
    <div style="display: none;">
        <?php echo str_replace(array("\n"), "<br>", $conextdataTXT); ?>
    </div>
    <a href="#" class="show-hide"><p>Show / hide HTML email</p></a>
    <div style="display: none;">
        <?php echo $conextdataHTML ?>
    </div>
<?php endif; ?>

