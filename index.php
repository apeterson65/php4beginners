<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-sm-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->

		<article class="main-content col-sm-8">
<div class="jumbotron">
    <h2 class="text-muted">Important</h2>

    <h3>Explanation of site</h3>

    <p>I have displayed the steps that were being asked for on each page.</p>

    <p> I used XAMPP to create the site. In order to run the site you will need to have XAMPP or something similar running to allow
        you to see the site.  To get XAMPP go to the following site.
    </p>
    <a href="https://www.apachefriends.org/download.html">XAMPP Download</a>

  
    <p>The file structure will need to be placed in the XAMPP starting directory, or you will need to configure the XAMPP file to point to where the files are placed. </p>
    <p>To set the starting folder open the httpd.conf file in xamp set up for apache. Look for DocumentRoot and directory. Those values will need to be set to where you put your data.
</p>
<h3>Database in Section 7</h3>
<p>In section 7 it required access to a database.  The database connnect information is in a subfolder called "section7" the connect file is db.php</p>
<p>The database is set up as follows:
    <ul>
        <li>Database name: <b>languageconverter</b>
            <ol> Table: 'words' contains the following fields:
                <li>id</li>
                <li>SpanishWord</li>
                <li>EnglishWord</li>
                <li>FrenchWord</li>

            </ol>
        </li>
    </ul>
</p>
</div>

<!--

<div class="row">


</div>


<div class="row">

    <h3 class="text-center">Here is a FAST track guide on what courses you need if you need to do it fast</h3>

    <h3 class="text-center">The order of importance is from left to right <span></span></h3>
    <h3 class="text-center">I have <span style="color:red">discounted</span> each of these courses for you, as token of appreciation for being my student</h3>



    <div class="col-sm-3">
        <div class="thumbnail">
            <a target="_blank" href="https://www.udemy.com/oop-php-object-oriented-programing-with-project-1-course/?couponCode=APP_10">

                <img src="images/phpoop.jpg" class=img-responsive alt="...">
            </a>

            <div class="caption">
                <h3>PHP OOP </h3>
                <p>This Object Oriented PHP</p>
                <p><a target="_blank" href="https://www.udemy.com/oop-php-object-oriented-programing-with-project-1-course/?couponCode=APP_10" class="btn btn-primary" role="button">$10 - GET IT</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="thumbnail">
            <a target="_blank" href="https://www.udemy.com/php-with-laravel-for-beginners-become-a-master-in-laravel/?couponCode=APP_10">

                <img src="images/laravel.jpg" class=img-responsive alt="...">
            </a>

            <div class="caption">
                <h3>Laravel </h3>
                <p>The most popular Framework</p>
                <p><a target="_blank" href="https://www.udemy.com/php-with-laravel-for-beginners-become-a-master-in-laravel/?couponCode=APP_10" class="btn btn-primary" role="button">$10 - GET IT</a></p>
            </div>
        </div>
    </div>



    <div class="col-sm-3">
        <div class="thumbnail">
            <a target="_blank" href="https://www.udemy.com/javascript-for-beginners-introduction-learn-fast-easy/?couponCode=APP_10">

                <img src="images/javascript.jpg" class=img-responsive alt="...">
            </a>

            <div class="caption">
                <h3>JavaScript </h3>
                <p>The mother of the web</p>
                <p><a target="_blank" href="https://www.udemy.com/javascript-for-beginners-introduction-learn-fast-easy/?couponCode=APP_10" class="btn btn-primary" role="button">$10 - GET IT</a></p>
            </div>
        </div>
    </div>


    <div class="col-sm-3">
        <div class="thumbnail">
            <a target="_blank" href="https://www.udemy.com/es6-ecmascript-6-for-beginners/">

                <img src="images/es6.jpg" class=img-responsive alt="...">
            </a>

            <div class="caption">
                <h3>JS - ES6 </h3>
                <p>The mother of the web</p>
                <p><a target="_blank" href="https://www.udemy.com/es6-ecmascript-6-for-beginners/" class="btn btn-primary" role="button">FREE - GET IT</a></p>
            </div>
        </div>
    </div>

    <p style="font-weight: bold;">Keep in mind this is a just a fast track, there are other levels of javascript, which I offer, there are also other php courses that will re-enforce your knowledge as well.

</div>



<div class="row">
    <h1 class="text-center btn-danger">Important Links</h1>
     <a href="http://edwindiaz.com/" target="_blank" class="btn btn-info btn-lg btn-block">PERSONAL WEBSITE</a>
      <a href="https://www.facebook.com/groups/449972161851291/" target="_blank" class="btn btn-warning btn-lg btn-block">FACEBOOK GROUP FOR THIS COURSE</a>
    <a href="http://codingfaculty.com/" target="_blank" class="btn btn-success btn-lg btn-block">SCHOOL WEBSITE</a>
   
    <a href="http://codingfaculty.com/p/html-and-css-for-beginners-crash-course-learn-fast-easy/" target="_blank" class="btn btn-primary btn-lg btn-block">FREE HTML COURSE</a>
</div>
--!>

	</article>
			

<?php include "includes/footer.php"; ?>
			
			



