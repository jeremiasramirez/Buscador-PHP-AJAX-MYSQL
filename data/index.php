<?php 

require "../views/findproduct-view.php";

function createInstanceOfProduct($data)
{
	 $data = addslashes($data);
	 $data = strip_tags($data);
	 $data = htmlentities($data);

	$newProducts = new Products();
	$newProducts->getproducts($data);
}
 
if(isset($_POST['data']))
{
	if(!empty($_POST['data']) && !ctype_space($_POST['data'])==1)
	{

	 $data = addslashes($_POST['data']);
	 $data = strip_tags($_POST['data']);
	 $data = htmlentities($_POST['data']);
	 createInstanceOfProduct($data);

	}
} 

?>





