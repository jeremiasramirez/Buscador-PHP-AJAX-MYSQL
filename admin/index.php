<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INICIO - Busqueda</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../public/css/product.css">
	<link rel="stylesheet" href="../public/css/lib/jeremias-lib/jeremias-lib.css">
 
</head> 
<body>
 <?php 
 

 ?>
<div class="container__title__page">
	<h1 class="btn--yes medium" style="padding: 1em">Add a product <i class="fas fa-egg" style="color:white;"></i></h1>
</div>

<section class="responsive" id="container__search__form--js">

	<form action="" class="form f medium" method="POST" enctype="form">
		 <input type="text" placeholder="name" id="name-post">
		 <input type="number" placeholder="price" id="price-post">
		 <input type="text" placeholder="distribuitor" id="distribuitor-post">
 		<button class="btn--yes min" id="form__post__send">Add product</button>
	</form>
	
</section> 
 
 
<p class="alert--chargin small" >
	<a href="../">Ver producto agregado
		<span class="fas fa-reply-all">
		</span>
	</a>
</p>
 
 <style>
 	.responsive{
 		display: flex;
 		justify-content: center;
 		align-items: center;
 	}
 	.f{
 		display: grid;
 		justify-items: center;
 		grid-template-rows: 40% 40% 40%;
 		grid-template-columns: 100%; 

 		margin: .3em;
 	}
 	.f input{
 		margin: .2em;

 	}

 </style>


	<script src="../public/js/insert-post.js"></script>
	<!-- <script src="public/js/process__delete.js"></script> -->
	<script src="../public/css/lib/iconfonts/js/all.min.js"></script>
	<script src="../public/css/lib/jeremias-lib/jeremias-lib.js"></script>
</body>
</html>













