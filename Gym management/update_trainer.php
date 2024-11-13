<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "gym";
 // Create a database connection
$conn = mysqli_connect($server, $username, $password, $dbname);

$Tid = $_GET['Tid'];
$query = "SELECT * FROM gym.trainer where Tid= '$Tid'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>


<?php
$insert = false;
if(isset($_POST['upd_t'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gym";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $dbname);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $Tid = $_POST['Tid'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $Joining = $_POST['Joining'];
    $address = $_POST['address'];
    $email = $_POST['email'];


    $sql = "UPDATE gym.trainer set name = '$name',Tid = '$Tid',age = '$age',gender = '$gender',phone = '$phone',Joining = '$Joining',address = '$address',email ='$email' where Tid = '$Tid'";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        echo "<script>alert('Record Updated')</script>";

        // Flag for successful insertion
        $insert = true;

        ?>
        <meta http-equiv="refresh" content="0; url='http://localhost:3000/trainer_table.php'" />
        <?php
    }
    else{

        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="F1.css">
    <style>
        body {
            background: #dbd9d9;
        }
    </style>
    <title>condidate details </title>
</head>

<body>
    <div class="content">

        <div class="">
            <div class="centered">
                <form action="#" method="post">
                    <h3>Update the Details</h3><br><br>
                    <label for="name">Name : </label>
                    <input class="pad" type="text" name="name" id="name" value="<?php echo $result['name'];?>"> <br><br>
                    <label for="age">Age : </label>
                    <input class="pad" type="number" name="age" id="age" value="<?php echo $result['age'];?>"> <br><br>
                    <label for="gender">Gender : </label>
                    <input class="pad" type="text" name="gender" id="gender" value="<?php echo $result['gender'];?>"> <br><br>
                    <label for="phone">Phone no. : </label>
                    <input class="pad" type="text" name="phone" id="phone" value="<?php echo $result['phone'];?>"> <br><br>
                    <label for="address">Address : </label>
                    <input class="pad" type="text" name="address" id="address" value="<?php echo $result['address'];?>"> <br><br>
                    <label for="Email">Email : </label>
                    <input class="pad" type="email" name="email" id="email" value="<?php echo $result['email'];?>"> <br><br>
                    <label for="Email">Joining : </label>
                    <input class="pad" type="date" name="Joining" id="Joining" value="<?php echo $result['Joining'];?>"> <br><br>
                    <label for="Email">Trainer Id : </label>
                    <input class="pad" type="number" name="Tid" id="Tid" value="<?php echo $result['Tid'];?>"> <br><br>
                    <label for="Join">Joining date : </label>
                    <input class="pad" type="date" name="Join" id="Join" value="<?php echo $result['Joining'];?>"> <br><br>
                    <button class="btn" name= "upd_t">Update Details</button>
                </form>
            </div>
        </div>
        <!-- <div class="split right">
            <div class="centered">
                <form action="index.php" method="post">
                    <label for="name">Id : </label>
                    <input class="pad" type="number" name="name" id="name" placeholder="Enter your id"> <br><br>
                    <label for="age">Password : </label>
                    <input class="pad" type="number" name="age" id="age" placeholder="Enter your Password"> <br><br>


                    <button class="btn">Log in</button>

            </div>
        </div> -->
    </div>

</body>

</html>