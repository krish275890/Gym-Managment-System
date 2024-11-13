<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = "root";
$password = "";

// Database name is geeksforgeeks
$database = "gym";

// Server is localhost with
// port number 3306
$servername="localhost";
$mysqli = new mysqli($servername, $user,$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM plans;";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		.update
		{
			background-color: green;
			color: white;
			border : 0;
			outline: none;
			border-radius: 10px;
			height: 30px;


		}
		.delete
		{
			background-color: red;
			color: white;
			border : 0;
			outline: none;
			border-radius: 10px;
			height: 30px;
		}
	</style>
</head>

<body>
	<section>
		<h1>User List</h1>
		<!-- TABLE CONSTRUCTION -->
		<table width="100%">
			<tr>
				<th>Paln NAME</th>
				<th>Duration</th>
				<th>Price</th>
				<th width="15%">Operations</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['pname'];?></td>
				<td><?php echo $rows['duration'];?></td>
				<td><?php echo $rows['price'];?></td>
				<td><a href='update_plan.php?pm=<?php echo $rows['pname']?>'><input type ='submit' value ='Update' class ='update'></a>
				<a href='delete_plan.php?pm=<?php echo $rows['pname']?>'><input type ='submit' value ='Delete' class ='delete' onclick='return ckeckdelete()'></a></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>
<script>
	function ckeckdelete()
	{
		return  confirm('Are you sure?');
	}
</script>


</html>