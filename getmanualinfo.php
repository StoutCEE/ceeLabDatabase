<?php
	// Get a connection for the database
	//require_once('../mysqli_connect.php');
	
	
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
	DEFINE ('DB_NAME', 'cee_lab_invetory_database');

	// $dbc will contain a resource link to the database
	// @ keeps the error from showing in the browser

	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .
	mysqli_connect_error());
	
	
	// Create a query for the database
	$query = "SELECT brand, title, classification , copyrightyear, location FROM equipment_manuals";

	// Get a response from the database by sending the connection
	// and the query
	$response = @mysqli_query($dbc, $query);

	// If the query executed properly proceed
	if($response){

	echo '<table align="left"
	cellspacing="5" cellpadding="8">

	<tr><td align="left"><b>Brand</b></td>
	<td align="left"><b>Title</b></td>
	<td align="left"><b>Classification</b></td>
	<td align="left"><b>Copyright Year</b></td>
	<td align="left"><b>Location</b></td>';

	// mysqli_fetch_array will return a row of data from the query
	// until no further data is available
	while($row = mysqli_fetch_array($response)){

	echo '<tr><td align="left">' . 
	$row['brand'] . '</td><td align="left">' . 
	$row['title'] . '</td><td align="left">' .
	$row['classification'] . '</td><td align="left">' . 
	$row['copyrightyear'] . '</td><td align="left">' .
	$row['location'] . '</td><td align="left">' . 

	echo '</tr>';
	}

	echo '</table>';

	} else {

	echo "Couldn't issue database query<br />";

	echo mysqli_error($dbc);

	}

	// Close connection to the database
	mysqli_close($dbc);

?>