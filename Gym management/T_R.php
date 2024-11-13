<?php
$insert = false;
if(isset($_POST['name'])){
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


    $sql = "INSERT INTO gym.trainer (name, age, gender, phone, address, email,Tid,Joining) VALUES ('$name', '$age', '$gender', '$phone', '$address', '$email','$Tid','$Joining');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
          echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
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

                <form action="T_R.php" method="post">
                    <h3>New Trainer Registeration</h3><br><br>
                    <label for="name">Name : </label>
                    <input class="pad" type="text" name="name" id="name" placeholder="Enter your name"> <br><br>
                    <label for="age">Age : </label>
                    <input class="pad" type="number" name="age" id="age" placeholder="Enter your Age"> <br><br>
                    <label for="gender">Gender : </label>
                    <input class="pad" type="text" name="gender" id="gender" placeholder="Enter your gender"> <br><br>
                    <label for="phone">Phone no. : </label>
                    <input class="pad" type="text" name="phone" id="phone" placeholder="enter phone number"> <br><br>
                    <label for="address">Address : </label>
                    <input class="pad" type="text" name="address" id="address" placeholder="Enter the address"> <br><br>
                    <label for="Email">Email : </label>
                    <input class="pad" type="email" name="email" id="email" placeholder="Enter the email"> <br><br>
                    <label for="Email">Joining : </label>
                    <input class="pad" type="date" name="Joining" id="Joining" placeholder="Enter the email"> <br><br>
                    
                    <label for="Email">Trainer Id : </label>
                    <input class="pad" type="number" name="Tid" id="Tid" placeholder="Enter the email"> <br><br>
                    
                    <!-- <label for="Join">Joining date : </label>
                    <input class="pad" type="date" name="Join" id="Join" placeholder="Joining date"> <br><br> -->

                    <button class="btn">Register</button>
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