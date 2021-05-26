<!DOCTYPE html>
<html lang="en">
    <head>
            <!-- importer le fichier de style -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/2b7b8fc70a.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="style.css" media="screen" type="text/css">
    </head>
<body>
    <?php require_once 'create.php'; ?>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'authentification') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM products") or die($mysqli->error);
    ?>
    <div class="container-fluid row my-4">
        <div class="col-sm-1">
            <a href="categories_page.php" class="mx-3"> <i class="fas fa-undo-alt text-success"><span class="CN text-success">Return</span></i></a>
        </div>
    </div>
    <div class="container-fluid">
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th class="CN">Product image</th>
                    <th class="CN">Product name</th>
                    <th class="CN">Stock quantity</th>
                    <th class="CN">Store quantity</th>
                    <th class="CN">Product price</th>
                    <th class="CN">Product categorie</th>
                    <th class="CN">Action</th>
                </tr>
            </thead>
            <tbody class="text-center"> 
                <?php
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                ?>       
                        <tr>    
                            <td><?php echo $row['product_name']?></td>
                            <td><img src="<?php echo "produits/".$row['product_image'];?>" width="120px" alt="image"></td>
                            <td><?php echo $row['stock_quantity']?></td>
                            <td><?php echo $row['stock_minimal']?></td>
                            <td><?php echo $row['prix']?></td>
                            <td><?php echo $row['categorie']?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-success">Edit</a>&nbsp;<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>  
                <?php            
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container-fluid my-4 row justify-content-end">
        <div class="col-sm-">
            <a href="add_product.php" class="mx-3"><i class="fas fa-plus text-success"><span class="CN text-success text-center">Add Product</span></i></a>
        </div>
    </div>
    <!--------------------------------------Bootstrap CDN------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>