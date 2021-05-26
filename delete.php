<?php
//connecting to database
$mysqli = new mysqli('localhost', 'root', '', 'authentification') or die(mysqli_error($mysqli));
//access to product selected
$user_id = $_GET['id'];
$sql = "DELETE FROM `products` WHERE `id`='$user_id'";
$result = $mysqli->query("$sql");
if($result == TRUE){
    echo "Product deleted successfully";
    header("Location:add_page.php");
}
else{
    echo "Error";
}
