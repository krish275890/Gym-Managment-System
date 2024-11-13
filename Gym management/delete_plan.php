<?php
// Get the email address submitted from the form


// Connect to the MySQL database
$host = "localhost";
$user = "root";
$password = "";
$database = "gym";
$conn = mysqli_connect($host, $user, $password, $database);

// Check for errors in the database connection
if (mysqli_connect_errno()) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$pname = $_GET['pm'];
// Build the SQL query to delete the user
$sql = "DELETE FROM gym.plans WHERE pname='$pname';";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
  echo "User with plan name $pname has been deleted.";
  ?>
  
  <meta http-equiv="refresh" content="0; url='http://localhost:3000/plan_table.php'" />
  <?php
} else {
  echo "Error deleting user: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>