<<<<<<< HEAD
<?php
$insert =false;
if(isset($_POST['name'])){
     // set connection variables
    $server="localhost";
    $username ="root";
    $password="";

    // Create a database connection
    $con=mysqli_connect($server,$username,$password);

    // check for connection success
    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());
    }
    // echo "Success connecting to the database "

//    Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age','$gender', '$email', '$phone', '$other', current_timestamp());"; 
        

        // echo $sql;
    // Execute the query
        if($con->query($sql) == true){
            // echo "Successfully inserted ";

            // Flaqg for successfull insertion 
            $insert =true;
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
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Source+Code+Pro:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="bg4.jpg" alt="university" class="bg">
    <div class="container">
        <h1>Welcome to HMC India Trip form</h1>
        <br>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <br>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Thanks for submitting your form.We are happy to see you joining us for INDIA trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">

            <input type="text" name="age" id="age" placeholder="Enter your age">

            <input type="text" name="gender" id="gender" placeholder="Enter your gender">

            <input type="email" name="email" id="email" placeholder="Enter your email">

            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no.">

            <textarea name="other" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>

            <button class="btn">Submit</button>

        </form>
        <script src="index.js"></script>
         
</body>

=======
<?php
$insert =false;
if(isset($_POST['name'])){
     // set connection variables
    $server="localhost";
    $username ="root";
    $password="";

    // Create a database connection
    $con=mysqli_connect($server,$username,$password);

    // check for connection success
    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());
    }
    // echo "Success connecting to the database "

//    Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age','$gender', '$email', '$phone', '$other', current_timestamp());"; 
        

        // echo $sql;
    // Execute the query
        if($con->query($sql) == true){
            // echo "Successfully inserted ";

            // Flaqg for successfull insertion 
            $insert =true;
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
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Source+Code+Pro:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="bg4.jpg" alt="university" class="bg">
    <div class="container">
        <h1>Welcome to HMC India Trip form</h1>
        <br>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <br>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Thanks for submitting your form.We are happy to see you joining us for INDIA trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">

            <input type="text" name="age" id="age" placeholder="Enter your age">

            <input type="text" name="gender" id="gender" placeholder="Enter your gender">

            <input type="email" name="email" id="email" placeholder="Enter your email">

            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no.">

            <textarea name="other" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>

            <button class="btn">Submit</button>

        </form>
        <script src="index.js"></script>
         
</body>

>>>>>>> 8746f10f92ca5a1cddcb82bb292877311dc6367d
</html>