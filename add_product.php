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
        <form action="create.php" method="POST" class="my-5">
                <h2 class="text-center CN">New Product</h2>
                <div class="form-group">
                    <label>Product Name:</label>
                    <input type="text" name="product_name" placeholder="Insert here" class="form-control">
                </div>
                <div class="form-group">    
                    <label>Product Image:</label>
                    <input type="text" name="product_image" placeholder="Insert here" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stock Quantity:</label>
                    <input type="text" name="stock_quantity" placeholder="Insert here" class="form-control">
                </div>
                <div class="form-group">
                    <label>Store Quantity:</label>
                    <input type="text" name="stock_minimal" placeholder="Insert here" class="form-control">
                </div>
                <div class="form-group">    
                    <label>Product Price:</label>
                    <input type="text" name="prix" placeholder="Insert here" class="form-control">
                </div>
                <div class="form-group">    
                    <label>Product Categorie:</label>
                    <!-- <input type="text" name="categorie" placeholder="Insert here" class="form-control"> -->
                    <select name="categorie" class="custom-select">
                        <option value="dairy">dairy</option>
                        <option value="clothes">clothes</option>
                        <option value="drinks">drinks</option>
                        <option value="fruits">fruits</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="save">Save</button>
                </div>
        </form>
    </div>
</body>
</html>