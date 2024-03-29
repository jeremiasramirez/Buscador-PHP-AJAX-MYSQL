<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INICIO - Busqueda</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="public/css/product.css">
	<link rel="stylesheet" href="public/css/lib/jeremias-lib/jeremias-lib.css">
	<link rel="stylesheet" href="public/css/lib/jeremias-spinner/spinner.css">
 
</head>
<body>

<div class="container__title__page">
	<h1 class="title__page">Search a product <i class="fas fa-egg" style="color:white;"></i></h1>
</div>

<section class="container__search__form" id="container__search__form--js">

	<form action="" class="form__search__product" method="POST" enctype="form">
		<input type="search" id="name__product--js" class="name__product" placeholder="Busca tu producto">
		<button class="form__search__product__btn__send" id="form__search__product__btn__send">
			<i class="fas fa-search" style="color:white;"></i>
		</button>
		<div class=articles>
			<a href="admin/" class="btn--add min">Add article  <span class="fas fa-plus-circle"></span></a>
			<a href="admin/all" class="btn--yes min">All articles  <span class="fas fa-align-right"></span></a>
		</div>
	</form>
	
</section> 
 
<section id="data"></section>

 <div class="sk-circle" id="spinner">
  <div class="sk-circle1 sk-child"></div>
  <div class="sk-circle2 sk-child"></div>
  <div class="sk-circle3 sk-child"></div>
  <div class="sk-circle4 sk-child"></div>
  <div class="sk-circle5 sk-child"></div>
  <div class="sk-circle6 sk-child"></div>
  <div class="sk-circle7 sk-child"></div>
  <div class="sk-circle8 sk-child"></div>
  <div class="sk-circle9 sk-child"></div>
  <div class="sk-circle10 sk-child"></div>
  <div class="sk-circle11 sk-child"></div>
  <div class="sk-circle12 sk-child"></div>
</div>
 
 
	<script src="public/js/process__search.js"></script>
	<!-- <script src="public/js/process__delete.js"></script> -->
	<script src="public/css/lib/iconfonts/js/all.min.js"></script>
	<script src="public/css/lib/jeremias-lib/jeremias-lib.js"></script>
</body>
</html>













