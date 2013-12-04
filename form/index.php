<?php 
// start a session
session_start();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SURFconext Service Provider Registration</title>
	<meta name="author" content="Niels van Dijk" >
	
		<!-- Bootstrap & customizations -->
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-2.0.4.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-alert.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-button.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-dropdown.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-form.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-generic.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-modal.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-navbar.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-pagination.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-popover.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-table.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/bootstrap-tooltip.css">

        <!-- Iconic font for Bootstrap -->
        <link rel="stylesheet" href="../SURFnet-styleguide/css/font-awesome.css">

        <!-- Non-bootstrap Styling -->
        <link rel="stylesheet" href="../SURFnet-styleguide/css/layout.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/generic.css">
        <link rel="stylesheet" href="../SURFnet-styleguide/css/component-userbox.css">

        <!-- Non-bootstrap Styling -->
        <link rel="stylesheet" href="./css/sp-registration.css">

        <script src="../SURFnet-styleguide/js/jquery/jquery-1.7.2.min.js"></script>
        <script src="./js/sp-registration.js"></script>

</head>
<body>

<?php 

include 'header.php';

switch ($pagenr){
    case 1:
		include 'show.page1.php';
        break;
        
    case 2:
		include 'show.page2.php';
        break;
        
    case 3:
		include 'show.page3.php';
        break;
        	
    case 4:
		include 'show.page4.php';
    	break;
    	
   	case 101:
		// there is nothing to process here
   		break;
    	
   	case 201:
        include 'show.page3.php';
        break;

    case 301:
   		include 'process.page3.php';
   		break;
    		 
   	case 401:
   		include 'process.page4.php';
   		break;

   	case 501:
   		include 'process.page5.php';
   		break;
    	
    default:
    	include 'show.page1.php';
    	break;
    
}

include 'footer.php';

?>





</body>
</html>
