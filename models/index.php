<?php
 
	class conectionDB{
		function conected(){
			global $conection;

			try{
				 $host = "localhost";
				 $user = "jere";
				 $pass = "0847";
				 $db = "buscador";
				 
				$conection =mysqli_connect($host, $user, $pass, $db);
				
				if(mysqli_connect_errno($conection)){
					throw new Exception("101");
				}

			}catch(Exception $e){
				echo "<p class=error_101 style='color: white;background-color: rgba(100%, 0%, 0%,90%);position:fixed;width:100vw;text-align: center;font-family: arial;top:1.9em;font-size: 28px;z-index: 10000;height:100vh;'>
				Error " . $e->getMessage() ."</p>" . PHP_EOL;
			}
	}
	

}
 


?>
 
 
