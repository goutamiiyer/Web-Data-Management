<?php

	# function to connect to mysql
	# return the connection object
	function OpenConnectionToDb()
	{
		$con = mysqli_connect("localhost","root","noopur22");
		mysqli_select_db($con,'dheerajr_wdm');
		return $con;
	}
?>