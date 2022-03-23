Explanation of site
  I have displayed the steps that were being asked for on each page.

    I used XAMPP to create the site. In order to run the site you will need to have XAMPP or something similar running to allow you to see the site.  To get XAMPP go to the following site.
   
    https://www.apachefriends.org/download.html"
  
   The file structure will need to be placed in the XAMPP starting directory, or you will need to configure the XAMPP file to point to where the files are placed.
  To set the starting folder open the httpd.conf file in xamp set up for apache. Look for DocumentRoot and directory. Those values will need to be set to where you put your data.

Database in Section 7
In section 7 it required access to a database.  The database connnect information is in a subfolder called "section7" the connect file is db.php
The database is set up as follows:
  
      Database name: Languageconverter
            Table: 'words' contains the following fields:
                id
                SpanishWord
                EnglishWord
                FrenchWord
