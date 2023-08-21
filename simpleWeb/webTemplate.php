<!-- Chapter 4 web template project: The Web Template File -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title style="color: tomato;">Web Template</title>
</head>
<body>
	<?php include ("inc_header.html"); ?>
	<div style="width: 20%; text-align: center; float: left;">
		<?php include('inc_buttonNav.html'); ?>
	</div>

<!-- Start of dynamic content section -->
<?php
if(isset($_GET['content'])){
	// now check which button was actually checked
	switch ($_GET['content']){
		case 'About Us':
			include('inc_about.html');
			break;
		case 'Contact Us':
			include('inc_contact.html');
			break;
		case 'Home':
			default:
				include('inc_home.html');
				break;
	} //end of switch
} //end of if statement

else // No button has been selected
	include('inc_home.html');
	//end of else
?>
<!-- end of dynamic content section -->
 <?php include ("inc_footer.php"); ?>
</body>
</html>