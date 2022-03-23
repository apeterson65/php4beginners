
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

<?php  
	echo "<h3>Assignment: Make a form that submits one value to POST super global </h3>";
	if(isset($_POST['submit'])){
		$thoughtOfDay = $_POST['thoughtOfDay'];
		echo "The thought for today is:   <br>" . $thoughtOfDay; 
	}

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>
<form action="6.php" method="post">
    
	<input type="text" name="thoughtOfDay" placeholder="Enter thought for today">
	
	<input type="submit" name="submit">
		
		
	</form>

</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>