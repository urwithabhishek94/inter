

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js">
	</script>
	<title></title>
</head>
<body>
	<div><button>BUS TICKETS</button> <button>HOTELS</button> <button>BUS HIRE</button> <button>PILGRIMAGES</button> <button>CARS</button> 
	</div>
	
	<h3>Online bus Ticket Booking</h3>
	<form method="post" action="see_bus.php">
	<input type="text" name="from" placeholder="From" required="">
	<input type="text" name="to" placeholder="To" required="">
	<input type="text" name="date1" id="date1" alt="date" class="IP_calendar" title="d/m/Y" placeholder="ONWARD DATE" required="">
	<input type="text" name="date2" id="date1" alt="date" class="IP_calendar" title="d/m/Y" placeholder="RETURN DATE">
	<input type="submit" name="Search" value="Search Buses">
	</form>

	<?php
	include "../php/conn.php";

 if(isset($_POST['Search']))
 {
 	
 	$from=$_POST['from'];
 	$to=$_POST['to'];
 	$date1=$_POST['date1'];
 	//$date2=$_POST['date2'];
 	

 	$sql="SELECT no_bus, s_from, s_to, date1, Fare FROM bus WHERE s_from='$from' AND s_to='$to' AND date1='$date1'";
 		$run=mysqli_query($conn, $sql);

 		while($row=mysqli_fetch_array($run)){
 		?>
 		<div>
 			<h3>Date <?php echo $row['date1'];?></h3>
 			<h3>NO.of bus is <?php echo $row['no_bus'];?></h3>
 			<h3>Fare <?php echo $row['Fare'];?></h3>
			<h3><?php echo $row['s_from'];?> To <?php echo $row['s_to'];?> </h3>
			<button>book</button>

		</div>
<?php }} ?>
</body>
</html>