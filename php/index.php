<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "website";

    $connect = mysqli_connect($servername,$username,$password,$database);
    if($connect == true){
        echo "Connection Successfully"."<br>";
    } else{
        die($connect);
    }
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $contact = $_REQUEST['contact'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='2'>
        <thead>
            <th>First name </th>
            <th>Last name</th>
            <th>Birth date</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Password</th>
        </thead>
        <tr>
            <?php
            $query = "INSERT INTO `registration`(`first_name`, `last_name`, `birth_date`, `gender`, `contact`, `email`, `password`) VALUES ('$fname','$lname','$dob','$gender','$contact','$email','$password')";
            mysqli_query($connect,$query);
            echo "
            <td>$fname</td>
            <td>$lname</td>
            <td>$dob</td>
            <td>$gender</td>
            <td>$contact</td>
            <td>$email</td>
            <td>$password</td>
            ";

            ?>
        </tr>
    </table>
</body>
</html>