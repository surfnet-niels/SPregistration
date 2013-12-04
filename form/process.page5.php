<?php

$formArray = isset($_SESSION["formContent"]["ConnectionDetails"]) ? $_SESSION["formContent"]["ConnectionDetails"] : array();
$metadataURL = $_SESSION["formContent"]['confirmedMetadata']['metadataURL'];
$metadata = $_SESSION['formContent']['confirmedMetadata']['metadataXMLresult'];

$requestId = MD5($metadata . date("d-m-Y H:i") . $_SERVER["REMOTE_ADDR"]);

$to_email[$email] = $user;
$subject = "[SPregistration] New SP connection request " . $requestId;
$data = array(
    'requestId' => $requestId,
    'user' => $user,
    'email' => $email,
    'homeOrg' => $home_org,
    'formArray' => $formArray,
    'metadataURL' => $metadataURL,
    'metadata' => $metadata
);
$html = getMailTemplate('mail/sp.confimation.html.php', $data);
$text = getMailTemplate('mail/sp.confimation.text.php', $data);

sendMail($to_email, $from_email, $subject, $text, $html, $metadata, "text/xml");

?>
<section class="content">
    <h2>Confirmation</h2>

    <div class="content">

        <h3>Thanks for your information.</h3>

        <p>
            The mail with your submitted information is send to <em><?php echo $email ?></em>. Please note that it will
            take a minimal of 4 workdays to process your information.

        <p>
    </div>
</section>
<?php if ($conf['debug']): ?>
    <a href="#" class="show-hide"><p>Show / hide plain text email</p></a>
    <div style="display: none;">
        <?php echo str_replace(array("\n"), "<br>", $text); ?>
    </div>
    <a href="#" class="show-hide"><p>Show / hide HTML email</p></a>
    <div style="display: none;">
        <?php echo $html ?>
    </div>
<?php endif; ?>

