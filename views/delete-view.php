<?php 
require "../models/index.php";
$con = new conectionDB;
 
$con::conected();
global $conection;

 
if(isset($_GET['id'])){
	$id = $_GET['id'];
	mysqli_query($conection, "DELETE FROM products WHERE prod_id='$id'");
	header("Location: /buscador?rm=true");
}

?>