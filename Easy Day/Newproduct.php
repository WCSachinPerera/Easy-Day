<?php session_start();
if (!isset($_SESSION["userName"])) {
    header('Location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>New products</title>
    <link rel="stylesheet" href="coce.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <nav>
        <div class="navdiv">
            <div class="logo">
                <a href="Home1.html"><img src="ed LOGO/New folder/logo_new_2ii-removebg-preview.png" /></a>
            </div>
            <div class="search">
                <form>
                    <input type="text" placeholder="Search products" />
                    <button>
                        <a href="#"><i class="fa fa-search"></i> </a>
                    </button>
                </form>
            </div>
            <ul>
                <li><a href="#Cid2" id="Cid1">Category</a></li>
                <li><a href="#Bid2" id="Bid1">Brands</a></li>
                <li><a href="#">Branches</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#A2" id="A1">About</a></li>
                <button>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                </button>
            </ul>
        </div>
    </nav>
    <h1>Newly added products</h1>

    <?php
    //connect with the database

    $con = mysqli_connect("localhost", "root", "", "easyday");

    //error handling

    if (!$con) {
        die("Sorry we have th etechnical issue");
    }

    //sql query

    $sql = "SELECT * FROM `addproduct` WHERE `adminname`='" . $_SESSION["userName"] . "'";

    //execute the query against the database

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <p> </p>
                        <img src="<?php echo $row["image"]; ?>" style="width:420px; height:250px">
                        <div class="container">
                            <h2 style="text-align: center; color: #084a83"><?php echo $row["size"]; ?></h2>
                            <h2 style="text-align: center; color: #084a83">LKR : <?php echo $row["price"]; ?>
                                <a href='delete.php?id=<?php echo $row["id"]; ?>'><button>Delete</button></a>
                                <button>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </button>
                            </h2>

                            <br>
                        </div>
                    </div>

                </div>

        <?php
        }
    }
    mysqli_close($con); //close the connection with the database
        ?>

        <footer class="footer" style="width: 100%">
            <div class="container" id="A2">
                <div class="row">
                    <div class="footer-col">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Get Help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Upcomeing products</h4>
                        <ul>
                            <li><a href="#">Easy Day Furniture</a></li>
                            <li><a href="#">Easy Day Electronics</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Social Media</h4>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="up">
                <a href="#A1"><i class="fa fa-angle-double-up"></i></a>
            </div>
        </footer>
</body>

</html>