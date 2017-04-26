<?php

/*
// Opens a connection to the database
// Since it is a php file it won't open in a browser 
// It should be saved outside of the main web documents folder
// and imported when needed
*/

// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'ceelabadmin');
DEFINE ('DB_PASSWORD', 'databaseoverlord');
DEFINE ('DB_HOST', 'http://localhost/phpmyadmin/sql.php?server=1&db=cee_lab_invetory_database&table=equipment_manuals&pos=0&token=b1986a0f2d002d64fc995e309dcc9aee');
DEFINE ('DB_NAME', 'invetory');

// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>