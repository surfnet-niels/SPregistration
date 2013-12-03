<section class="content">
<h2><?php echo $pageHeaders[$pagenr]?></h2>
<div class="content">

<h3>Welcome to the SURFconext Service Provider Registration form</h3>

    <p>
    	Hello <?php echo $user; ?>, <br>
    	<br>
    	For the purpose of this registration we will use the following email address: <b><?php echo $email; ?></b>
    	<br>You may provide 'formal' contact information for you service via this form.
    <p>

    <h3>SURFconext Service Provider Registration form</h3>
    <p>
        With this form you can check and supplement your SAML2 metadata. It is recommended to use a SAML2 metadata file, but it is also possible to create metadata manually. 
    </p>
    <p>
        Note that this form can not be saved. Please collect all the information before you start. You also need a good understanding of SAML2 to enter the technical information correctly. For more information see the <a target="_blank" href="https://wiki.surfnetlabs.nl/display/surfconextdev/Documentation+for+Service+Providers" target="_blank">SURFconext service provider wiki page</a>.
    </p>

    <form action="index.php" method="post">
    	<input type="hidden" name="page" value="2">
    	<button type="submit" class="btn btn-primary">Continue</button>
	</form>
</div>
</section>
