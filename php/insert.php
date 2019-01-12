<?php
include "conn.php";

 if(isset($_POST['Search']))
 {
 	
 	$from=$_POST['from'];
 	$to=$_POST['to'];
 	$date1=$_POST['date1'];
 	$date2=$_POST['date2'];
 	

 	$sql= "INSERT INTO bus (s_from, s_to, date1, date2)values('$from','$to','$date1','$date2')";
 		$run=mysqli_query($conn, $sql);
 		if ($run)
 		{
 		  header("location:../html/bkBus.php");
		}
 		else
 		{
 			header("location:../html/bkBus.php?404");
 		}
 	}
 ?>