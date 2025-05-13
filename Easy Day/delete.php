<?php session_start();

//create association
$_SESSION["id"] = $_GET["id"];

//connect with the database

$con = mysqli_connect("localhost", "root", "", "easyday");

//error handling

if (!$con) {
    die("Sorry we have the etechnical issue");
}

//insert data to database 

$sql = "DELETE FROM `addproduct` WHERE `addproduct`.`id` = " . $_SESSION["id"] . ";";

//execute the query against the database


if (mysqli_query($con, $sql)) {
    header('Location:Newproduct.php');
}
