<p>Dear <?php echo $data['user']; ?>, </p>
<p>Thank you for your request to add your Service to the SURFconext platform.</p>

<?php if (!empty($data['formArray'])): ?>
    <p>We recieved the following information about your Service:</p>
    <div style='background-color: #f1f1f1; border-radius: 8px; margin: 15px; padding: 10px;'>
        <table>
            <?php foreach ($data['formArray'] as $conextDataKey => $conextDataValue): ?>
                <tr>
                    <td><em><?php echo $conextDataKey; ?> </em>:</td>
                    <td><?php echo $conextDataValue; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>
<?php if ($data['metadataURL']): ?>
    <p>You have indicated that the following URL is in use for publishing your Metadata:</p>
    <div style='background-color: #f1f1f1; border-radius: 8px; margin: 15px; padding: 10px;'>
        <?php echo $data['metadataURL']; ?>
    </div>
<?php endif; ?>

<p>We have issued you a reference ID with regards to your request: <em><?php echo $data['requestId']; ?></em>. You can use this reference number in any further contact with SURFconext. Please note that it will take a minimal of 4 workdays to process your information.</p>
<p>Please find attached the SAML2 Metadata provided by you during the confirmation process.</p>

<p>Kind regards,<br>
SURFconext Support</p>

<div style='background-color: #f1f1f1; border-radius: 8px; margin: 15px 0px; padding: 10px;'>
    SURFnet | <a href="mailto:support@surfconext.nl">support@surfconext.nl</a> | <a
            href="https://wiki.surfnet.nl/display/conextsupport/Terms+of+Service+%28EN%29" target="_blank">Terms of
            Service</a>
</div>
