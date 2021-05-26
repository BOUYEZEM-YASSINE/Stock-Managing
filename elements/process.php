<?php
$mysqli = new mysqli('localhost', 'root', '', 'authentification') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){
     $pro_name = $_POST['product_name'];
     $pro_image = $_POST['product_image'];
     $sto_quantity = $_POST['stock_quantity'];
     $str_quantity = $_POST['stock_minimal'];
     $prx = $_POST['prix'];
     $ctgr = $_POST['categorie'];
     $mysqli->query("INSERT INTO products(product_name, product_image, stock_quantity, stock_minimal, prix, categorie) VALUES( '$pro_name', '$pro_image', '$sto_quantity', '$str_quantity', '$prx', '$ctgr')");
}