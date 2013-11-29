<section class="content">
<h2><?php echo $pageHeaders[$pagenr]?></h2>
<div class="content">

			<!-- Contract -->
			<fieldset id="contract">
				<legend>Service Type & Licencing</legend>
					<div>The service type and licence regime I wish use: <b><?php echo $formArray["ServiceType"];?></b>
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
					<b><?php echo $formArray["Purpose"];?></b>
				</div>
			</fieldset>
			<br/>
			
			<!-- Previous Install -->
			<fieldset id="experience">
				<legend>Experience</legend>
				<div>
					<p>Experience with setting up and maintaining a SAML2
					based service provider: <b><?php echo $formArray["Experience"];?></b> 
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
					<b><?php echo $formArray["Customers"];?></b> 
				</div>
			</fieldset>
			<br/>
			
			<!--  Test or Production  -->
			<fieldset id="state">
				<legend>Test or Production</legend>
				<div>
					<p>
						Test or a Production connection: <b><?php echo $formArray["State"];?></b> 
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
					<b><?php echo $formArray["Planning"];?></b> 
				</div>
			</fieldset>

	    <form action="index.php" method="post">
	    	<input type="hidden" name="page" value="3">
            <button type="submit" class="btn btn-primary">Confirm</button>
	    	<input type="button" value="Change" onClick="window.history.back();">
		</form>
	</div>
</section>
