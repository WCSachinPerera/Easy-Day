<?php session_start();
if (!isset($_SESSION["userName"])) {
  header('Location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Admin.css" />
  <title>Admin Page</title>
</head>

<body>
  <h1>Welcome to Admin page</h1>
  <br /><br /><br />
  <h1>Add Product Form</h1>
  <form action="Admin.php" method="post" enctype="multipart/form-data">
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/jpeg , image/png , image/jpg"><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" min="0"><br>

    <label for="size">Size:</label>
    <input type="text" id="size" name="size"><br>

    <label for="category">Category:</label>
    <select id="category" name="category" onchange="toggleOptions()">
      <option value="category_wise">Category Wise</option>
      <option value="brand_wise">Brand Wise</option>
    </select><br>

    <div id="brandOptions" style="display: none;">
      <label for="brand">Brand:</label>
      <select id="brand" name="brand">
        <option value="coca_cola">Coca Cola</option>
        <option value="elephant_house">Elephant House</option>
        <option value="maliban">Maliban</option>
        <option value="munchee">Munchee</option>
        <option value="nestle">Nestle</option>
        <option value="prima">Prima</option>
      </select><br>
    </div>

    <div id="categoryOptions" style="display: none;">
      <label for="category_type">Category Type:</label>
      <select id="category_type" name="category_type">
        <option value="vegetable">Vegetables</option>
        <option value="fruits">Fruits</option>
        <option value="meat">Meat</option>
        <option value="seafood">Sea Food</option>
        <option value="dairy">Dairy Products</option>
        <option value="beverage">Beverages</option>
        <option value="frozenfoods">Frozen Foods</option>
        <option value="cookingessentials">Cooking Essentials</option>
        <option value="household">Household</option>
      </select><br>
    </div>

    <button type="submit" name="btnSubmit">Submit</button>
    <br><br>
    <a href="Newproduct.php">Newly Aded Product</a>

    <?php

    if (isset($_POST["btnSubmit"])) {

      //read the values user has given and assign to the varibles

      $price = $_POST["price"];
      $size = $_POST["size"];
      $category = $_POST["category"];

      //save image details in the folder 

      $image = "images/" . basename($_FILES["image"]["name"]);
      move_uploaded_file($_FILES["image"]["tmp_name"], $image);


      //connect with the database

      $con = mysqli_connect("localhost", "root", "", "easyday");

      //error handling

      if (!$con) {
        die("Sorry we have a technical issue");
      }

      //insert data to database 

      $sql = "INSERT INTO `addproduct`(`id`, `price`, `size`, `image`, `adminname`) VALUES (NULL,'" . $price . "', '" . $size . "', '" . $image . "', '" . $_SESSION["userName"] . "');";

      //execute the query against the database


      if (mysqli_query($con, $sql)) {
        echo "<br><br> Product added succusfully";
      } else {
        echo "Something went wrong please select the file again";
      }
    }

    ?>
  </form>

  <script>
    function toggleOptions() {
      const categorySelect = document.getElementById("category");
      const brandOptions = document.getElementById("brandOptions");
      const categoryOptions = document.getElementById("categoryOptions");

      if (categorySelect.value === "brand_wise") {
        brandOptions.style.display = "block";
        categoryOptions.style.display = "none";
      } else if (categorySelect.value === "category_wise") {
        brandOptions.style.display = "none";
        categoryOptions.style.display = "block";
      } else {
        brandOptions.style.display = "none";
        categoryOptions.style.display = "none";
      }
    }
  </script>


</body>

</html>