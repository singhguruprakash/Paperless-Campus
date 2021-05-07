<?php
$hostname= "localhost";
$username ="root";
$password="";
$dbname ="paperless";


$conn = new mysqli($hostname,$username,$password,$dbname);

if(mysqli_connect_error())
{
	die("Connection error :". mysqli_error());
	}else
	{
		//echo("Connection sussessfull........");
		}
		
		
 ?>