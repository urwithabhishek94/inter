<?php
include "conn.php";

 if(isset($_POST['Search']))
 {
 	
 	$from=$_POST['from'];
 	$to=$_POST['to'];
 	//$date1=$_POST['date1'];
 	//$date2=$_POST['date2'];
 	

 	$sql="SELECT no_bus, date1 FROM bus WHERE s_from='$from' AND s_to='$to' "
 		$run=mysqli_query($conn, $sql);
 		while($row=mysqli_fetch_array($run)){

 	}
 ?>