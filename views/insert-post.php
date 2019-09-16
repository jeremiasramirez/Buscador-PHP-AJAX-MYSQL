<?php 
include_once "../models/index.php";
 
 
	 function addProduct($name, $price, $distribuitor){

		if( !empty($name) && !empty($price) &&  !empty($distribuitor) ){
 		$con = new conectionDB();
			$con->conected();
			global $conection;		

			$name= addslashes($name);
			$price= addslashes($price);
		 
			$distribuitor= addslashes($distribuitor);
		 
		$query = mysqli_query($conection, "INSERT INTO products(product_name,product_price,product_distribuitor)VALUES('$name','$price','$distribuitor')");
		}
	}
 

if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['distribuitor']) ){

	$name  = $_POST['name'];
	$price  = $_POST['price'];
	$distribuitor = $_POST['distribuitor'];

	addProduct($name, $price, $distribuitor);
 
}
