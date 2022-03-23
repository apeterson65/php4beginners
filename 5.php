<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
	echo "<h3>Step1: Use a pre-built math function here and echo it: </h3>";
		echo mt_rand(1,6) . "\n";
	echo "<h3>Step2: Use a pre-built string function here and echo it:</h3>";
		echo strtoupper("this is a lower case string converted to upper case.");
	echo "<h3>Step3: Use a pre-built Array function here and echo it:</h3>";
		$numbersArray = array (5, 20, 3, 5, 20);
		echo strtoupper("original Array <br>");
		foreach ($numbersArray as $unsorted){
			echo "$unsorted\n <br>";
		}
		echo strtoupper("sorted array <br>");
		asort($numbersArray);
		foreach($numbersArray as $sorted) {
			echo "$sorted <br>";
		}

/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>