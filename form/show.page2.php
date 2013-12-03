<?php
    $connectionDetails = isset($_SESSION['formContent']['ConnectionDetails']) ? $_SESSION['formContent']['ConnectionDetails'] : array();
?>

<section class="content">
<h2><?php echo $pageHeaders[$pagenr];?></h2>
<div class="content">

    <form action="index.php" method="post">
    	<input type="hidden" name="page" value="201">
			<!-- Contract -->
			<fieldset">
				<legend>Contract & license</legend>
				<div>
					<p>
						Any connection to the SURFconext platform is subject to a SURFconext contract, stating security, data protection and privacy regulations.
					</p>
					<ul>
						<li>Institutions that are <a target="_blank"
							href="http://www.surf.nl/nl/oversurf/instellingen/Pages/Default.aspx" target="_blank">members
								of SURFnet</a> can connect (non-commercial) Services for their
							own users, and/or share services with other institutions.
							Connecting these services requires no additional contracts if
							your institution is already acting as an Identity Provider.
						</li>
						<li>For Commercial Services a license agreement in addition to
							the SURFconext contract is required. In The Netherlands, <a
							href="http://www.surfmarket.nl" target="_blank" target="_blank">SURFmarket</a>
							negotiates licenses on behalf of Research and Education
							institutions. Please contact the Services team of SURFmarket first.
						</li>
					</ul>
					<p/>
				</div>
				<section id="service_type">
					<p>Please select the service and license type you wish use:</p>
						<label for="Campus">
                            <input name="ServiceType" type="radio" id="Campus" name="Campus" value="Campus"
                                <?php echo (isset($connectionDetails['ServiceType']) && $connectionDetails['ServiceType'] === 'Campus') ? 'checked' : '';?> />I am a SURFnet member institution and want to add a service for my own (campus) users</label>
                        <label for="Collaboration">
                            <input name="ServiceType" type="radio" id="Collaboration" name="Collaboration" value="Collaboration"
                                <?php echo (isset($connectionDetails['ServiceType']) && $connectionDetails['ServiceType'] === 'Collaboration') ? 'checked' : '';?> />I am a SURFnet member institution and want to add a service to share with my own and other institutions users</label>
                        <label for="Commercial">
                            <input name="ServiceType" type="radio" id="Commercial" name="CommercialSP" value="CommercialSP"
                                <?php echo (isset($connectionDetails['ServiceType']) && $connectionDetails['ServiceType'] === 'CommercialSP') ? 'checked' : '';?> />Commercial Service Provider</label>
                        <label for="Other">
                            <input name="ServiceType" type="radio" id="Other" name="Other" value="Other"
                                <?php echo (isset($connectionDetails['ServiceType']) && $connectionDetails['ServiceType'] === 'Other') ? 'checked' : '';?>/>Other</label>
				</section>
			</fieldset>
			<br/>

			<!-- Purpose -->
			<fieldset>
				<legend>Purpose of the service</legend>
				<div>
					<p>Please describe the purpose of the service:</p>
					<textarea name="Purpose" id="purpose"
                        style="width: 80%; height: 200px"><?php echo isset($connectionDetails['Purpose']) ? $connectionDetails['Purpose'] : '' ; ?></textarea>
				</div>
			</fieldset>

			<!-- Previous Install -->
			<fieldset>
				<legend>SAML experience</legend>
				<div>
					<p>An indication of level of expertise you have with setting up an
						SAML based service provider helps us to estimate the amount
						of support you may need.</p>
				</div>
				<section id="experience">
					<p>Is there any experience with setting up and maintaining a SAML2 based service provider?</p>
					<label for="yes"><input name="Experience" type="radio" id="yes" name="yes" value="yes"
                            <?php echo (isset($connectionDetails['Experience']) && $connectionDetails['Experience'] === 'yes') ? 'checked' : '';?> />Yes, I have previously installed or I currently maintain a SAML2 based Service Provider</label>
                    <label for="no"><input name="Experience" type="radio" id="no" name="no" value="no"
                            <?php echo (isset($connectionDetails['Experience']) && $connectionDetails['Experience'] === 'no') ? 'checked' : '';?> />No experience with SAML2 SP software</label>
				</section>
			</fieldset>

			<!-- Current or Launching Customers  -->
			<fieldset>
				<legend>Current or launching customers</legend>

				<div>
					<p>Do you have any current or launching customers for your service? If so, please list them below</p>
					<textarea name="Customers" id="customers"
                              style="width: 80%; height: 200px"><?php echo isset($connectionDetails['Customers']) ? $connectionDetails['Customers'] : '' ; ?></textarea>
				</div>
			</fieldset>

			<!--  Test or production  -->
			<fieldset>
				<legend>Test or production</legend>
				<div>
					<p>
						A production connection to the platform can only be made after
						a successful test connection. For testing proposes,
						SURFnet offers a <a href="https://wiki.surfnet.nl/display/surfconextdev/Connecting+to+SURFconext+test+environment" target="_blank">Test Platform</a> that
						allows you to test your technical setup which is similar
						to a production connection. <b>Please note that a production
						connection can not be established without a signed SURFconext
						contract.</b>
					</p>
				</div>
				<section id="state">
					<p>Are you requesting a Test or a Production connection?</p>
					<label for="test"><input name="State" type="radio" id="test" name="test" value="test"
                            <?php echo (isset($connectionDetails['State']) && $connectionDetails['State'] === 'test') ? 'checked' : '';?> />I want to make a test connection</label>
					<label for="production"><input name="State" type="radio" id="production" name="production" value="production"
                            <?php echo (isset($connectionDetails['State']) && $connectionDetails['State'] === 'production') ? 'checked' : '';?>/>I want to make a production connection</label>
				</section>
			</fieldset>
			<br/>

			<!--  Deadlines -->
			<fieldset>
				<legend>Planning & deadlines</legend>
				<div>
					<p>
						As soon as <a href="https://wiki.surfnet.nl/display/surfconextdev/Technical+information" target="_blank">technical</a> and <a href="https://wiki.surfnet.nl/display/surfconextdev/Connecting+your+service+to+SURFconext" target="_blank">contractual</a>
						requirements are met, SURFnet will need between 3 to 5 days to
						operationalize the connection.</p>
				</div>
				<section>
					<p>When do you want your service to be connected?</p>
					<textarea name="Planning" id="planning" style="width: 80%; height: 200px"><?php echo isset($connectionDetails['Planning']) ? $connectionDetails['Planning'] : '' ; ?></textarea>
				</section>
			</fieldset>

        <button id="confirmation_admin_info" type="submit" class="btn btn-primary">Continue</button>


    </form>

</div>

</section>


