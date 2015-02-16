<?php #Script - index.php
//This is the main page for the site.

//Include the HTML header:
include('includes/header.html');

//The content on this page is introductory text pulled from the database, base upon the selected language:

echo $words['intro'];

//Include the HTML footer file:
include ('includes/footer.html');
?>