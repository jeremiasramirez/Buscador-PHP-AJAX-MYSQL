<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INICIO - Busqueda</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

<div class="container__title__page">
	<h1 class="title__page">Search a product</h1>
</div>

<section class="container__search__form" id="container__search__form--js">

	<form action="php/data/index.php" class="form__search__product" method="POST">
		<input type="text" id="name__product--js" class="name__product" placeholder="Busca tu producto">
		<button class="form__search__product__btn__send" id="form__search__product__btn__send">
			Search product
		</button>
	</form>
	
</section>
<section id="data"></section>

<style>
	body{
		text-align: center;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.form__search__product__btn__send{
		padding: .5em 1em;
		border:0;
		background-color: blue;
	}
	.form__search__product__btn__send:hover{
		cursor: pointer;
		opacity: .6;
	}
	.name__product{
		padding: 1em 2em;
		border: 1px solid #ddd;
		font-size: 20px;
		text-align: center;
		background-color: #eee;
		border-radius: 5px;
	}
	.product__finded{
		background-color: green;
		color: white;
		font-weight: 600;
		font-family: arial;
		text-align: center;
		border-radius: 5px;
		width: 300px;
		padding:.5em;
	}
	.product__finded--feature{
		background-color: red;
		border-radius: 5px;
		color: white;
		font-weight: 600;
		font-family: arial;
		text-align: center;
		width: 300px;
		padding:.5em;
	}
	.header__product{
		width: 300px;
		margin: 0 .4em;
		font-size: 22px;
		font-family: arial;
		color: #eee;
		background-color: #222;
		border-radius: 4px;
		border: 1px solid #ddd; 

	}
	.product__find{
		font-family: sans-serif;
		width: 100px;
		padding: .6em 0;
		border: 1px solid #eee;
		background-color: #eee;
	}	
	.tr__product__find{
		text-align: center;
		width: 300px;

		margin: .2em 0;


	}
	.border{
		border:1px solid red;
	}

</style>
 
	<script src="public/js/process__search.js"></script>
	<script src="public/css/lib/iconfonts/js/all.min.js"></script>
</body>
</html>













