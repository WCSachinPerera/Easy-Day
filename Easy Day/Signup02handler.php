<?php session_start();

if (isset($_POST["btnSubmit"])) {

    //read the values user has given and assign to the varibles

    $fname = $_POST["Fname"];
    $lname = $_POST["Lname"];
    $email = $_POST["Email"];
    $contact = $_POST["Cno"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    //connect with the database

    $con = mysqli_connect("localhost", "root", "", "easyday");

    //error handling

    if (!$con) {
        die("Sorry we have an etechnical issue");
    }

    //insert data to database 

    $sql = "INSERT INTO `signup_ed`(`Fname`, `Lname`, `Email`, `Cno`, `address`, `password`) 
VALUES ('" . $fname . "','" . $lname . "','" . $email . "','" . $contact . "','" . $address . "','" . $password . "');";

    //execute the query against the database

    $result = mysqli_query($con, $sql);

    header('Location:Login02.php');
}
