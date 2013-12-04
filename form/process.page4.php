<?php
$editedMetadata = $_POST["metadata"];
$_SESSION['formContent']['confirmedMetadata']['metadataXMLresult'] = $editedMetadata;

include_once '../geshi/geshi.php';
$geshi = new GeSHi(beautifyXML($editedMetadata), "XML");

$connectionDetails = isset($_SESSION["formContent"]["ConnectionDetails"]) ? $_SESSION["formContent"]["ConnectionDetails"] : array();
$metadataURL = $_SESSION["formContent"]['confirmedMetadata']['metadataURL'];

?>

<section class="content">
    <h2><?php echo $pageHeaders[$pagenr] ?></h2>

    <div class="content">
        <form action="index.php" method="post">
            <?php if (!empty($connectionDetails)): ?>
                <fieldset id="contract">
                    <legend>Service Type & Licencing</legend>
                    <div>The service type and licence regime I wish use:
                        <b><?php echo htmlspecialchars($connectionDetails["ServiceType"]); ?></b>
                    </div>
                </fieldset>
                <br/>

                <!-- Purpose -->
                <fieldset id="purpose">
                    <legend>Purpose of the Service</legend>
                    <div>
                        Purpose of the service:
                    </div>
                    <div style="float: left; width: 70%" title="Purpose">
                        <b><?php echo htmlspecialchars($connectionDetails["Purpose"]); ?></b>
                    </div>
                </fieldset>
                <br/>

                <!-- Previous Install -->
                <fieldset id="experience">
                    <legend>Experience</legend>
                    <div>
                        <p>Experience with setting up and maintaining a SAML2
                            based service provider:
                            <b><?php echo htmlspecialchars($connectionDetails["Experience"]); ?></b>
                    </div>
                </fieldset>
                <br/>

                <!-- Current or Launching Customers  -->
                <fieldset id="customers">
                    <legend>Current or Launching Customers</legend>
                    <div>
                        <p>Current or launching customers for your service:
                    </div>
                    <div style="float: left; width: 70%" title="Customers">
                        <b><?php echo htmlspecialchars($connectionDetails["Customers"]); ?></b>
                    </div>
                </fieldset>
                <br/>

                <!--  Test or Production  -->
                <fieldset id="state">
                    <legend>Test or Production</legend>
                    <div>
                        <p>
                            Test or a Production connection:
                            <b><?php echo htmlspecialchars($connectionDetails["State"]); ?></b>
                        </p>
                    </div>
                </fieldset>
                <br/>

                <!--  Deadlines -->
                <fieldset id="planning">
                    <legend>Planning & Deadlines</legend>
                    <div>
                        <p>
                            When do you want your service to be connected?
                        </p>

                    </div>
                    <div style="float: left; width: 70%" title="Planning">
                        <b><?php echo htmlspecialchars($connectionDetails["Planning"]); ?></b>
                    </div>
                </fieldset>
                <br/>
            <?php endif; ?>
            <!-- Metadata -->
            <fieldset id="state">
                <legend>SAML Metadata</legend>
                <?php if ($metadataURL): ?>
                    <div>
                        <p>
                            Use the SAML2 Metadata URL displayed below
                        </p>

                    </div>
                    <div>
                        <p>
                            <b><?php echo $metadataURL; ?></b>
                        </p>
                    </div>
                <?php endif; ?>
                <div>
                    <p>
                        <?php
                        print($geshi->parse_code());
                        ?>
                    </p>
                </div>
            </fieldset>
            <br/>

            <input type="hidden" name="page" value="501">
            <button type="submit" class="btn btn-primary">Confirm and Send</button>

            <?php if (isset($_SESSION['urlProvided']) ): ?>
                <a href="index.php?page=3" class="btn btn-primary"">Change</a>
            <?php else: ?>
                <a href="index.php?page=2" class="btn btn-primary"">Change</a>
            <?php endif; ?>
        </form>
    </div>
</section>
