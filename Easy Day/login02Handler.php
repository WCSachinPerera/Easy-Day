<?php session_start();

if (isset($_POST["btnSubmit"])) {

    //read the values user has given and assign to the varibles

    $email = $_POST["Email"];
    $password = $_POST["password"];

    //connect with the database

    $con = mysqli_connect("localhost", "root", "", "easyday");

    //error handling

    if (!$con) {
        die("Sorry we have th etechnical issue");
    }

    //sql query

    $sql = "SELECT * FROM `signup_ed` WHERE `email`='" . $email . "' AND `password`='" . $password . "'";

    //execute the query against the database

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        //create a session

        $_SESSION["userName"] = $email;

        header('Location:Home1.html');
    } else {
        header('Location:Login02.php');
    }
}
