<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->

	
<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers
	

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
// step 1
echo "<h2>Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP:</h2>". "<br>";
$value = 53;
if ($value < 53) {

	echo "<h6> you are older than 53</h6>";

	}elseif($value != 50) {

		echo "<h5>I love PHP</h5>" ;

	} else {
		echo "I am learning PHP";
	}
	//Step 2
	echo "<h2>Step 2: Make a forloop  that displays 10 numbers: </h2>" ;
	for ($x = 0; $x < 10; $x++) {
		echo "The number is " . $x . "<br>";
		
	}
	//step 3
	echo "<h2>Step 3 : Make a switch Statement that test againts one condition with 5 cases:</h2>";
	$forFun = 1; 
	while($forFun <= 5) {
		switch ($forFun) {
			case 1:
				echo "This is option 1 <br>";
				break;
			case 2:
				echo "This is option 2 <br>";
				break;
			case 3:
			echo "This is option 3 <br>";
				break;
			case 4:
			echo "This is option 4 <br>";
				break;
			case 5:
			echo "This is option 5 <br>";
				break;
			default:
			echo"something went wrong ";
			
		}
		$forFun++;
	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>