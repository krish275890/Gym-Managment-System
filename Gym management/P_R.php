<?php
$insert = false;
if(isset($_POST['pname'])){
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
    $pname = $_POST['pname'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
   
   


    $sql = "INSERT INTO gym.plans (pname, duration,price) VALUES ('$pname','$duration','$price' );";
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

                <form action="P_R.php" method="post">
                    <h3>New User Registeration</h3><br><br>
                    <label for="name">Name : </label>
                    <input class="pad" type="text" name="pname" id="pname" placeholder="Enter your name"> <br><br>
                    <label for="duration">duration : </label>
                    <input class="pad" type="number" name="duration" id="duration" placeholder="Enter your Age"> <br><br>
                    <label for="price">Price : </label>
                    <input class="pad" type="number" name="price" id="price" placeholder="Enter your gender"> <br><br>
                    
                    
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