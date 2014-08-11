<?php
	
	require 'class.php'; // include class file ( It have all the calculations)

	$tax = new incometax(); // Create new object for incometax class

	$tax->calculator('individual', 'senior_citizen', 'india', '400000');

?>
