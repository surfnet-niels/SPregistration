<h3>Thank you for your request to conext a new Servide Provider.</h3>

<p>The following information can be used as a reference for further contact:</p>
<div class='infobox'
     style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>

    <table>
        <tr>
            <td><b>Request ID : <?php echo $data['requestId']; ?></td>
        </tr>
        <tr>
            <td><b>Date : <?php echo date("d-m-Y H:i"); ?></td>
        </tr>
        <tr>
            <td><b>Request made by : <?php echo $data['user']; ?></td>
        </tr>
        <tr>
            <td><b>From IP adress : <?php echo $_SERVER["REMOTE_ADDR"]; ?></td>
        </tr>
        <tr>
            <td><b>Email : <?php echo $data['email']; ?></td>
        </tr>
        <tr>
            <td><b>Home Organisation : <?php echo $data['homeOrg']; ?></td>
            <td></td>
        </tr>
    </table>
</div>

<p>A copy of this information was forwarded to your email address.</p>

<?php if (!empty($data['formArray'])): ?>
    <p>We recieved the following information about your Service:</p>
    <div class='infobox'
         style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'>
        <p>
        <table>
            <?php foreach ($data['formArray'] as $conextDataKey => $conextDataValue): ?>
                <tr>
                    <td><b><?php echo $conextDataKey; ?> </b>:</td>
                    <td><?php echo $conextDataValue; ?></td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>

<?php if ($data['metadataURL']): ?>

    <p>You have indicated that the following URL is in use for publishing your Metadata:</p>
    <div class='infobox'
         style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>
    <?php echo $data['metadataURL']; ?>
</pre>
    </div>
<?php endif; ?>

<p>The following SAML2 Metadata was provided during the confirmation process:</p>
<div class='infobox'
     style='border-width: 1px; background-color: #FFFFFF; border-style: dashed; margin: 1em 0.3em 2.5em;'><pre>
<?php echo htmlspecialchars(beautifyXML($data['metadata'])); ?>
</pre>
</div>
