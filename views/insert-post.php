<?php 
include_once "../models/index.php";
 
 
	 function addProduct($name, $price, $distribuitor){

		if( !empty($name) && !empty($price) &&  !empty($distribuitor) ){
 		$con = new conectionDB();
			$con->conected();
			global $conection;		

			$name= addslashes($name);
			$name= strip_tags($name);

			$price= addslashes($price);
			$price= strip_tags($price);

			$distribuitor= addslashes($distribuitor);
			$distribuitor= strip_tags($distribuitor);

			$errnone = 1;
		 	$errexits = 0;
			$query = mysqli_query($conection, "INSERT INTO products(product_name,product_price,product_distribuitor) VALUES ('$name','$price','$distribuitor')
				");

			if($query){
				print($errexits);
			}
			else{
				print($errnone);
			}
		}
	}
 

if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['distribuitor']) ){

	$name  = $_POST['name'];
	$price  = $_POST['price'];
	$distribuitor = $_POST['distribuitor'];

	addProduct($name, $price, $distribuitor);
 
}
