<?php
require "../models/index.php";

class Products extends conectionDB {

	function countproductfinded($productFindNum){
		if( ($productFindNum === 1) ){
			print("<p class='product__finded' id='product__finded--js'>". $productFindNum." producto encontrado <i class='fas fa-check'></i></p>");
		}
		else if( ($productFindNum > 1) ){
			print("<p class='product__finded' id='product__finded--js'>". $productFindNum." productos encontrados <i class='fas fa-check'></i></p>");
		}
		else{
			print("<p class='product__finded--feature' id='product__finded--js'>Ningun producto encontrado. <i class='fas fa-times'></i></p>");
		}

	}
	public function headersproduct()
	{
		print("<th class='header__product'>ID</th>");
		print("<th class='header__product'>Nombre</th>");
		print("<th class='header__product'>Precio</th>");
		print("<th class='header__product'>Distribuidor</th>");

	}
	public function getproducts($name)
	{
		$name = addslashes($name);
		$name = strip_tags($name);
		$name = htmlentities($name);

		parent::conected();
		global $conection;

		$query = "SELECT * FROM products WHERE product_name like '%$name%'";
		$execquery =  mysqli_query($conection, $query);

		$productFindNum = mysqli_num_rows($execquery);
		$this->countproductfinded($productFindNum);

		print("<table>");
		$this->headersproduct();
		
		while ($prod = mysqli_fetch_array($execquery)){
			print("
				<tr class='tr__product__find'>
				 
					<td class='product__find' id='product__find--js'>". $prod['prod_id']."</td>
					<td class='product__find' id='product__find--js'>". $prod['product_name']."</td>
					<td class='product__find' id='product__find--js'>". $prod['product_price']."</td>
					<td class='product__find' id='product__find--js'>". $prod['product_distribuitor']."</td>
					 
				</tr>
			");
		}
		print("</table>");

	}

}
?>
