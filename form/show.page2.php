<section class="content">
<h2><?php echo $pageHeaders[$pagenr];?></h2>
<div class="content">

    <form action="index.php" method="post">
    	<input type="hidden" name="page" value="201">
			<!-- Contract -->
			<fieldset">
				<legend>Contract & Licencing</legend>
				<div>
					<p>
						Any connection to the SURFconext platform is subject to a SURFconext contract, stating security, data protection and privacy regulations.
					</p>
					<ul>
						<li>Institutions that are <a target="_blank"
							href="http://www.surf.nl/nl/oversurf/instellingen/Pages/Default.aspx">members
								of SURFnet</a> can connect (non-commercial) Services for their
							own users, and/or share services with other institutions.
							Connecting these services requires no additional contracts if
							your institution is already acting as an Identity Provider.
						</li>
						<li>Commercial Services require a license agreement in addition to
							the SURFconext contract. Service providers will have to contact
							the Services team of SURFmarket first. In The Netherlands, <a
							href="http://www.surfmarket.nl" target="_blank">SURFmarket</a>
							negotiates licences on behalf of all Reseach and Education
							institutions that are <a target="_blank"
							href="http://www.surf.nl/nl/oversurf/instellingen/Pages/Default.aspx">members
								of SURFnet</a>.
						</li>
					</ul>
					<p/>
				</div>
				<section id="service_type">
					<p>Please provide us with some information on the service type and licence regime you wish use:</p>
						<label for="Campus"><input name="ServiceType" type="radio" id="Campus" name="Campusr" value="Campus"/>I am a SURFnet member institution and want to add a service for my own (campus) users</label>
                        <label for="Collaboration"><input name="ServiceType" type="radio" id="Collaboration" name="Collaboration" value="Collaboration"/>I am a SURFnet member institution and want to add a service to share for my own and other institutions users</label>
                        <label for="Commercial"><input name="ServiceType" type="radio" id="Commercial" name="CommercialSP" value="CommercialSP"/>Commercial Service Provider</label>
                        <label for="Other"><input name="ServiceType" type="radio" id="Other" name="Other" value="Other"/>Other, please describe what you want a part of the service description below.</label>
				</section>
			</fieldset>
			<br/>

			<!-- Purpose -->
			<fieldset>
				<legend>Purpose of the Service</legend>
				<div>
					<p>Providing the propose of the service helps us determine the
						feasibility of connecting your service to SURFconext. In addition
						we will use the description of the service to weigh the release of
						attributes (user characteristics) you request.</p>
				</div>
				<div>
					<p>Please describe the purpose of the service:</p>
					<textarea name="Purpose" id="purpose" style="width: 80%; height: 200px"></textarea>
				</div>
			</fieldset>

			<!-- Previous Install -->
			<fieldset>
				<legend>Previous Install</legend>
				<div>
					<p>An indication of level of expertise you have with setting up an
						SAML based service provider helps us to better estimate the amount
						of support you may require.</p>
				</div>
				<section id="experience">
					<p>Is there any experience with setting up and maintaining a SAML2 based service provider?</p>
					<label for="yes"><input name="Experience" type="radio" id="yes" name="yes" value="yes"/>Yes, I have previously installed or I currently maintain a SAML2 based Service Provider</label>
                    <label for="no"><input name="Experience" type="radio" id="no" name="no" value="no"/>No experience with SAML2 SP software</label>
				</section>
			</fieldset>

			<!-- Current or Launching Customers  -->
			<fieldset>
				<legend>Current or Launching Customers</legend>
				<div>
					<p>Indicating current or launching customers among the SURF member
						institutions helps us determine which institutions we may need to
						contact to help you get set up..</p>
				</div>
				<div>
					<p>Do you have any current or launching customers for your service? If so, please list these below</p>
					<textarea name="Customers" id="customers" style="width: 80%; height: 200px"></textarea>
				</div>
			</fieldset>

			<!--  Test or Production  -->
			<fieldset>
				<legend>Test or Production</legend>
				<div>
					<p>
						A production connection to the platform can only be realized after
						a successful test connection has been made. For testing proposes,
						SURFnet offers a <a href="">Do-It-Yourself Platform</a> that
						allows you to test your technical setup in a fashion very similar
						to a production connection. <b>Please note that a production
						connection cannot be established without a signed SURFconext
						contract and optionally a license agreement.</b>
					</p>
				</div>
				<section id="state">
					<p>Are you requesting a Test or a Production connection?</p>
					<label for="test"><input name="State" type="radio" id="test" name="test" value="test"/>I want to make a test connection</label>
					<label for="production"><input name="State" type="radio" id="production" name="production" value="production"/>I want to make a production connection</label>
				</section>
			</fieldset>
			<br/>
			
			<!--  Deadlines -->
			<fieldset>
				<legend>Planning & Deadlines</legend>
				<div>
					<p>
						As soon as <a href="">technical</a> and <a href="">contractual</a>
						requirements are met, SURFnet will need between 3 to 5 days to
						operationalize the connection.</br> For managing expectations and
						our planning, please provide us with information when you would
						like to have the connection you are currently requesting
						operational.
					</p>
				</div>
				<section>
					<p>When do you want your service to be connected?</p>
					<textarea name="Planning" id="planning" style="width: 80%; height: 200px"></textarea>
				</section>
			</fieldset>

        <button id="confirmation_admin_info" type="submit" class="btn btn-primary">Continue</button>


    </form>

</div>

</section>


