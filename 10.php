<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	echo "<h3>Step 1: Use the Make a class called Dog</h3>";
	echo "<p>Done behind the scenes, see code</p>";
		class Dog {
			var $eyeColor = "Brown";
			var $noseType = "Triangle";
			var $furColor = "Black";
			var $tailType = "Short";

			function ShowAll() {
				echo $this->eyeColor . "<br>";
				echo $this->noseType . "<br>";
				echo $this->furColor . "<br>";
				echo $this->tailType . "<br>";
			}
		}
		
	

	echo "<h3>Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color</h3>";
	echo "<p>Done behind the scenes, see code</p>";
		
	echo "<h3>Step 3: Make a method named ShowAll that echos all the properties</h3>";
	echo "<p>Done behind the scenes, see code</p>";
	$pitbull = new Dog();
	echo "<h3>Step 4: Instantiate the class / create object and call it pitbull</h3>";
	$pitbull-> ShowAll();

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>