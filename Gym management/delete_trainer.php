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
$Tid = $_GET['Tid'];
// Build the SQL query to delete the user
$sql = "DELETE FROM gym.trainer WHERE Tid='$Tid';";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
echo "Trainer with plan name $Tid has been deleted.";
?>

<meta http-equiv="refresh" content="0; url='http://localhost:3000/trainer_table.php'" />
<?php
} else {
echo "Error deleting user: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>