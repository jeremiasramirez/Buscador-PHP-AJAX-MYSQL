
<?php 
 
require "../models/index.php";
 
class deleteProduct extends conectionDB{

	function delete($id){
	 
		parent::conected();
	 
		global $conection;

		if($id != ""){

			$id = addslashes($id);
			$id = strip_tags($id);
	 
			mysqli_query($conection, "DELETE FROM products WHERE prod_id='$id'");
			header("Location: /buscador?rm=true");		

		}
	}


}

if(isset($_POST['id'])){

	$id = $_POST['id'];
	$delProd = new deleteProduct();
	$delProd->delete($id);

}

?>

