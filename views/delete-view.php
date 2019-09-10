<?php 
require "../models/index.php";
$con = new conectionDB;
 
$con::conected();
global $conection;

 
 
if(isset($_POST['id'])){
	$id = $_POST['id'];
	mysqli_query($conection, "DELETE FROM products WHERE prod_id='$id'");
	header("Location: /buscador?rm=true");
}

?>