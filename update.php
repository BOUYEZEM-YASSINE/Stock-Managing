<?php
//connecting to database
 $mysqli = new mysqli('localhost', 'root', '', 'authentification') or die(mysqli_error($mysqli));
 //access to product selected
 $user_id = $_GET['id'];
 $sql = "SELECT * FROM products WHERE `id`='$user_id'";
 $result = $mysqli->query("$sql") or die($mysqli->error);
 while($row = $result->fetch_assoc()){
    $p_name = $row['product_name'];
    $p_img = $row['product_image'];
    $s_quantity = $row['stock_quantity'];
    $m_quantity = $row['stock_minimal'];
    $prix = $row['prix'];
    $ctgr = $row['categorie'];
 }
 if(isset($_POST['update'])){
    $p_name = $_POST['product_name'];
    $p_img = $_POST['product_image'];
    $s_quantity = $_POST['stock_quantity'];
    $m_quantity = $_POST['stock_minimal'];
    $prix = $_POST['prix'];
    $ctgr = $_POST['categorie'];
    $sql = "UPDATE `products` SET `product_name`='$p_name',`product_image`='$p_img',`stock_quantity`='$s_quantity',`stock_minimal`='$m_quantity',`prix`='$prix',`categorie`='$ctgr' WHERE `id`='$user_id'";
    $result = $mysqli->query($sql);
    if($result == TRUE){
        header("Location:add_page.php");
    }
    else{
        echo "Product couldn't be edited";
    }
}
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
            <!-- importer le fichier de style -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/2b7b8fc70a.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="style.css" media="screen" type="text/css">
    </head>
<body>
<div class="container-fluid row my-4">
        <div class="col-sm-1">
            <a href="add_page.php" class="mx-3"> <i class="fas fa-undo-alt text-success"><span class="CN text-success">Return</span></i></a>
        </div>
</div>
<div class="container-fluid row justify-content-center m-0 p-0">
        <form action="" method="POST" class="my-5">
                <h2 class="text-center CN">Update</h2>
                <div class="form-group">
                    <label>Product Name:</label>
                    <input type="text" name="product_name" value="<?php echo $p_name?>" class="form-control">
                </div>
                <div class="form-group">    
                    <label>Product Image:</label>
                    <input type="text" name="product_image" value="<?php echo $p_img?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stock Quantity:</label>
                    <input type="text" name="stock_quantity" value="<?php echo $s_quantity?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Store Quantity:</label>
                    <input type="text" name="stock_minimal" value="<?php echo $m_quantity?>" class="form-control">
                </div>
                <div class="form-group">    
                    <label>Product Price:</label>
                    <input type="text" name="prix" value="<?php echo $prix?>" class="form-control">
                </div>
                <div class="form-group">    
                    <label>Product Categorie:</label>
                    <!-- <input type="text" name="categorie" placeholder="Insert here" class="form-control"> -->
                    <input name="categorie" value="<?php echo $ctgr?>" class="form-control"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="update">Update</button>
                </div>
        </form>
    </div>
</body>
</html>