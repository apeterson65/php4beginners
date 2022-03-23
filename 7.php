<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php include "section7/db.php";?>"
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  
	echo "<h3>Step 1 - Create a database in PHPmyadmin </h3>";
	echo "<p>Created a database called 'LanguageConverter' </p>";
	      if($connection) {
			  echo "connected to language database";

		} else{
			echo "Connection failed:(" . mysqli_error($connection);
		}

	echo "<h3>Step 2 - Create a table like the one from the lecture </h3>";
	echo "<p>Created a table called 'words' </p>";
		$query = "SELECT * FROM  words ";
		$result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error($connection));
		}
		

	echo "<h3>Step 3 - Insert some Data </h3>";
	while($record = mysqli_fetch_assoc($result)) {
		print_r($record);
		
	}
	echo "<h3>Step 4 - Connect to Database and read data </h3>";
	$query = "SELECT * FROM  words ";
		$result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error($connection));
		}
	 while($record = mysqli_fetch_assoc($result)) {
		echo "The English word " . $record['EnglishWord'] . " Is " . $record['SpanishWord'] . " in Spanish" . " and is " . $record['FrenchWord'] . " in French <br>";
	
		
	  }

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
