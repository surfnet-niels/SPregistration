Thank you for your request to conext a new Servide Provider.

The following information can be used as a reference for further contact:

Request ID        : <?php echo $data['requestId']; ?>

Date              : <?php echo date("d-m-Y H:i"); ?>

Request made by   : <?php echo $data['user']; ?>

From IP adress    : <?php echo $_SERVER["REMOTE_ADDR"]; ?>

Email             : <?php echo $data['email']; ?>

Home Organisation : <?php echo $data['homeOrg']; ?>


A copy of this information was forwarded to your email address.

<?php if (!empty($data['formArray'])): ?>
We recieved the following information about your Service:

    <?php foreach ($data['formArray'] as $conextDataKey => $conextDataValue): ?>
        <?php echo $conextDataKey . " : " . $conextDataValue; ?>

    <?php endforeach; ?>

<?php endif; ?>

<?php if ($data['metadataURL']): ?>

    You have indicated that the following URL is in use for publishing your Metadata:
    <?php echo $data['metadataURL']; ?>

<?php endif; ?>

The following SAML2 Metadata was provided during the confirmation process:

<?php echo beautifyXML($data['metadata']); ?>
