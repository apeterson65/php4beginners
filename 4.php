<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

echo "<h2>Step1: Define a function and make it return a calculation of 2 numbers:</h2>";

function add2Numbers($num1, $num2) {
	$sumNumbers = $num1 + $num2;
	echo "The numbers " . $num1 . " and " . $num2 . " were passed in. <br>";
	 echo "The sum of the numbers is: " . $sumNumbers;

}
add2Numbers(45, 45);

echo "<h2>Step 2: Make a function that passes parameters and call it using parameter values</h2>";

function welcome($v1, $v2) {
	
	Echo "Hello " . $v1 . " how are you today? " . $v2;
}
welcome("Fred"," Excelent");

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>