<?php


//require mysql connecion
use database\DBController;
use database\Product;
use  database\Cart;
require ('database/DBController.php');

require ('database/Product.php');

require ('database/Cart.php');
//db controller object
$db=new DBController();

//product o
$product=new Product($db);
$product_shuffle=$product->getData(); //can access this variable from anywhere in project

$cart= new Cart($db);
