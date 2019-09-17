<?php 
require "../views/loadproduct.php";

function loadproduct(){
	$load  = new loadProduct();
	$load->getproducts();
}
loadproduct();
 
?>