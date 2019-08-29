<?php 
require "../models/index.php";

class Products extends conectionDB {

	public function getproducts($name)
	{
		$data = addslashes($_POST['data']);
		$data = strip_tags($_POST['data']);
		$data = htmlentities($_POST['data']);

		parent::conected();
		global $conection;

		$query = "SELECT * FROM products WHERE product_name like '%$name%'";
		$execquery =  mysqli_query($conection, $query);

		while ($prod = mysqli_fetch_array($execquery)){
			echo "<p>". $prod['product_name']."</p>";
		}


	}


}
function createInstanceOfProduct($data)
{
	$newProducts = new Products();
	$newProducts->getproducts($data);
}
 
if(!empty($_POST['data']) && isset($_POST['data']) && !ctype_space($_POST['data'])==1)
{
	 $data = addslashes($_POST['data']);
	 $data = strip_tags($_POST['data']);
	 $data = htmlentities($_POST['data']);

	 createInstanceOfProduct($data);
 
} 
else{
	echo "<p>No hay datos para buscar.</p>";
}









