<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php
// step 1
echo "<h2>Step 1: set 2 variables</h2> ";
echo "Our variables are <br> <h3>\$number1</h3> and <h3>\$number2</h3> ";		
		$number1 = 10; 
		$number2 = 20; 
//step 2
echo "<h2>Step 2: Add the two variables and display the sum with echo: </h2><br>";
		echo "The value of \$number1 is " . $number1 . "<br> The value of \$number2 is " . $number2 . "<br>";
		echo "The sum of Number 1 and Number 2 is " . $number1 + $number2 . "<br>";
//step3
echo "<h2>Step3: Make 2 Arrays with the same values, one regular and the other associative</h2>";
	$array1 = [10, 20]; 

	$array2 = ["var1"=>10, "var2"=>20];
	echo "The first array contains " . $array1[0] . " and " . $array1[1] . "<br>";
	echo "The second array contions" . $array2["var1"] ." and " . $array2["var2"] /* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>