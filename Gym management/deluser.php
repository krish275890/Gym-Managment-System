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
$uid = $_GET['uid'];
// Build the SQL query to delete the user
$sql = "DELETE FROM gym.member WHERE uid='$uid';";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
  echo "User with uid $uid has been deleted.";
  ?>

  <meta http-equiv="refresh" content="0; url='http://localhost:3000/user_table.php'" />
  <?php
} else {
  echo "Error deleting user: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a user</title>
</head>
<body>
    <form action="deluser.php" method="post">
    <label for="Email">Email : </label>
    <input class="pad" type="email" name="Email" id="Email" placeholder="Enter the email"> <br>


    <button type="submit" class="btn" >Delete user</button>
</form>
</body>
</html> -->