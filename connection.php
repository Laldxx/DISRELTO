<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "disrelto_user_data";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
