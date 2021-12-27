<?php 
    @require('database.php');


    
    if(isset($_POST['create']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['image2'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $image2 = $_POST['image2'];
        
        $sql = 'INSERT into cards (`name`, `price` , `image` , `image2`) values ("'. $name .'", "'. $price .'" , "'. $image .'" , "'. $image2 .'")';

        if($conn->query($sql) === true){
            header('location:form.php');
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else {
        // echo '<p style="color: red;">Please Enter Name And Price</p>';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
</head>
<body class="bg-light">
    
    <div class="bg-info w-25 mx-auto p-3 mt-5">
        <form action="./form.php" method="POST">
        <h6 class="text-white text-center">Create Card</h6>
        <hr class="bg-white">
  <div class="form-group text-white">
    <label for="Name">Name</label>
    <input type="text" required class="form-control" name="name" id="Name">
  </div>
  <div class="form-group text-white">
    <label for="Price">Price</label>
    <input type="number" required class="form-control" name="price" id="Price">
  </div>
  <div class="form-group text-white">
    <label for="image">image</label>
    <input type="file" required class="form-control-file bg-white text-dark p-1" name="image" id="image">
  </div>
  <div class="form-group text-white">
    <label for="himage">Hover image</label>
    <input type="file" required class="form-control-file bg-white text-dark p-1" name="image2" id="himage">
  </div>
  <hr class="bg-white">
  <div class="text-center">
  <button type="submit" name="create" class="btn btn-danger w-50">Create</button>
  </div>
        </form>
        
    </div>


<script src="./asset/js/bootstrap.bundle.js"></script>
</body>
</html>