<?php 

 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INICIO - Busqueda</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>


<section class="container__search__form" id="container__search__form--js">

	<form action="php/data/index.php" class="form__search__product" method="POST">
		<input type="text" id="name__product--js">
		<button class="form__search__product__btn__send" id="form__search__product__btn__send">
			Search product
		</button>
	</form>
	
</section>
<p id="data"></p>

<script>
	

	let btnSendSearch = document.getElementById("form__search__product__btn__send");
	let dataValue = document.getElementById("name__product--js");

	if(btnSendSearch){
		btnSendSearch.addEventListener("click", (e)=>{
	e.preventDefault()
			let http = new XMLHttpRequest();
				http.open("POST", "data/index.php", 1);

				http.addEventListener("load", (e)=>{

				document.getElementById("data").innerHTML=(e.target.responseText)
				})
				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.send(`data=${dataValue.value}`);
		}, false);
	}





</script>





	
</body>
</html>













