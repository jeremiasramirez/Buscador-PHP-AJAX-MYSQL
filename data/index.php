<?php 
require "../views/loadproduct.php";

function createInstanceOfProduct($data)
{
	 $data = addslashes($_POST['data']);
	 $data = strip_tags($_POST['data']);
	 $data = htmlentities($_POST['data']);

	$newProducts = new Products();
	$newProducts->getproducts($data);
}
 
if(isset($_POST['data']) )
{
	if(!empty($_POST['data']) && !ctype_space($_POST['data'])==1)
	{

	 $data = addslashes($_POST['data']);
	 $data = strip_tags($_POST['data']);
	 $data = htmlentities($_POST['data']);
	 createInstanceOfProduct($data);

	}
} 

function loadproduct(){
	$load  = new loadProduct();
	$load->getproducts();
}
loadproduct();
 
?>





