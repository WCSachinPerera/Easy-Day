<?php session_start();

if (isset($_POST["btnSubmit"])) {

    //read the values user has given and assign to the varibles

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //connect with the database

    $con = mysqli_connect("localhost", "root", "", "easyday");

    //error handling

    if (!$con) {
        die("Sorry we have an etechnical issue");
    }

    //insert data to database 

    $sql = "INSERT INTO `admin`(`name`, `email`, `password`) 
VALUES ('" . $name . "','" . $email . "','" . $password . "');";

    //execute the query against the database

    $result = mysqli_query($con, $sql);

    header('Location:adminlogin.php');
}
