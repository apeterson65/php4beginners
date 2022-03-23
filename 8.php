<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">

	
	
	<?php  
$password = "EncryptedPassword";
$salt = "randomPasswordEncryptionVariable";
$password_encrypted = crypt($password, $salt);



echo "<h3>Step 1 -Make a variable with some text as value</h3>";
echo "\$password = 'EncryptedPassword'<br>";
echo "\$salt = 'randomPasswordEncryptionVariable'<br>";

echo "<h3>Step 2 - Use crypt() function to encrypt it</h3>";
echo "<p> crypt(\$password, \$salt)</p>";
echo "<h3>Step 3 - Assign the crypt result to a variable</h3>";
echo "<p>\$password_encrypted = crypt(\$password, \$salt)</p>";
echo "<h3>Step 4 - echo the variable</h3>";
echo $password_encrypted;




	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>