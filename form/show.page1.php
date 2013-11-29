
<section class="content">
<h2><?php echo $pageHeaders[$pagenr]?></h2>
<div class="content">

<h3>Welcome to the SURFconext Service Provider Registration form</h3>

    <p>
    	Hello <?php echo $user; ?>, <br>
    	<br>
    	For the purpose of this registration we will use the following email address: <b><?php echo $email; ?></b>
    	<br>You may provide 'formal' contact endpoint(s) for you service via this form.
    <p>

    <h3>Using these forms</h3>
    <p>
        Most SAML2 SP software will generate SAML2 metadata for you. Unfortunately, the SAML2 metadata standards allows many options and very few are mandatory. SURFconext expects some optional elements to be present (like organisational information) and doen't allow some others.
    </p>
    <p>
        This form's primairy focus is on checking your generated SAML2 metadata for SURFconext compatibility. You can open the last tab of the below
        form ("metadata") and past the metadata XML into it. The form will automatically process your data and detect any missing information after you refresh the page. Update all the missing information and refresh again. If there are no more warnings then the metadata is ready to send to the SURFconext administrators. This can be done by going to the
        "metadata" tab, scrolling to the bottom and pressing the "send" button.
   </p>
   <p>
        If you do not have a SAML2 metadata file, you can generate it manually here. You need go through all the tabs and enter the missing information
        and send it in. This method is not advisable as you need to have a good understanding of SAML2 to enter the technical information correctly.
   </p>
   <p>
        Note that this form cannot be saved while working on it. If you leave the SP form page your work will be lost. This means that it is advisable
        to first collect all the necessary information before completing and sending it.
        <br>
        For more information see the <a href="https://wiki.surfnetlabs.nl/display/surfconextdev/Documentation+for+Service+Providers">SURFconext service provider wiki page</a>.
    </p>

    <form action="index.php" method="post">
    	<input type="hidden" name="page" value="2">
    	<button type="submit" class="btn btn-primary">Continue</button>
	</form>
</div>
</section>
