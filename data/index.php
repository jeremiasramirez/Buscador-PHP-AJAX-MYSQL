<?php 
require "../models/index.php";


class Products extends conectionDB {

	public function getproducts($name)
	{

		parent::conected();
		global $conection;

		$query = "SELECT * FROM products WHERE product_name like '%$name%'";
		$execquery =  mysqli_query($conection, $query);

		while ($prod = mysqli_fetch_array($execquery)){
			echo "<p>". $prod['product_name']."</p>";
		}


	}


}
if(isset($_POST['data'])){
	 $newProducts = new Products();
	 $newProducts->getproducts($_POST['data']);
} 









