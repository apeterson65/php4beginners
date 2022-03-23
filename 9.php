<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<?php

$expiration = time() + (60*60*24*7);
setcookie('CodeCookie', 'Test Cookie', $expiration);

?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
		
			
		
	
	<?php 

		echo "<h3>Step 1 -Create a link saying Click Here, and set 
		the link href to pass some parameters and use the GET super global to see it</h3>";

	?>

	<a href="9.php?source=4001">Click me for a code</a> <br>

	<?php

		if(isset($_GET['source'])) {
			echo "Your Code is: " . $_GET['source'];

		}

		echo "<h3>Step 2 - Set a cookie that expires in one week</h3>";
		echo "<p>A cookie has been set, see step 3 for more information</p>";

	

		echo "<h3>Step 3 - Start a session and set it to value, any value you want.</h3>";

		if(isset($_COOKIE["CodeCookie"])) {
			echo $_COOKIE["CodeCookie"];
		}


		/*  Create a link saying Click Here, and set 
		the link href to pass some parameters and use the GET super global to see it

			Step 2 - Set a cookie that expires in one week

			Step 3 - Start a session and set it to value, any value you want.
		*/
			
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>