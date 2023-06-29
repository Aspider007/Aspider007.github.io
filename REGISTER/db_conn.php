<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "agm_express_delivery";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}