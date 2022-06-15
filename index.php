<?php 
$random_number = 5;
$random_word = "Why Choosing Us";
$item_number = 4;
$item = array(
	array(
		'name' => "Sakarias Armchair", 
		'type' => "chair",
		'star' => 10,
		'price' => 392
	), 
	array(
		'name' => "Baltsar Chair", 
		'type' => "chair",
		'star' => 8,
		'price' => 299
	), 
	array(
		'name' => "Anjay Chair", 
		'type' => "chair",
		'star' => 6,
		'price' => 519
	), 
	array(
		'name' => "Nyantuy Chair", 
		'type' => "chair",
		'star' => 9,
		'price' => 921
	)
);

// var_dump($item)
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="last-modified" content="15/06/2022">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Technical Test</title>
	
	<!-- Section Break Point -->

</head>
<body>

	<nav id="navigationBar" class="navbar navbar-expand-lg bg-dark bg-opacity-25 fixed-top">
	  <div class="container-fluid m-3">
	    <a class="navbar-brand text-light fw-bold" href="#">Panto</a>	    
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hamburgerMenu" aria-controls="hamburgerMenu" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
    	</button>
	    <div class="collapse navbar-collapse justify-content-center" id="hamburgerMenu">
	    <!-- <div class="collapse navbar-collapse" id="hamburgerMenu"> -->
	    	<ul class="navbar-nav">
		        <li class="nav-item dropdown ms-3 me-3">
	            	<a class="nav-link dropdown-toggle text-light" href="#" id="furniture" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            		Furniture
	            	</a>
	            	<ul class="dropdown-menu bg-dark bg-opacity-10" aria-labelledby="furniture">
		                <li><a class="dropdown-item text-light text-opacity-75" href="#">Chair</a></li>
		                <li><a class="dropdown-item text-light text-opacity-75" href="#">Beds</a></li>
		                <li><a class="dropdown-item text-light text-opacity-75" href="#">Sofa</a></li>
		                <li><a class="dropdown-item text-light text-opacity-75" href="#">Lamp</a></li>

		                <!-- <li><hr class="dropdown-divider"></li> -->

	            	</ul>
	            </li>
		        <li class="nav-item ms-3 me-3">
		          <a class="nav-link text-light" href="#">Shop</a>
		        </li>
		        <li class="nav-item ms-3 me-3">
		          <a class="nav-link text-light" href="#">About Us</a>
		        </li>
		        <li class="nav-item ms-3 me-3">
		          <a class="nav-link text-light">Contact</a>
		        </li>
		    <ul class="navbar-nav">
		        <li class="nav-item">
				    <img class="" src="assets/icon/00-cart-01.png" alt="00-cart-01">
		        </li>
		    </ul>
	    	</ul>
	    </div>
	  </div>
	</nav>

	<!-- Section Break Point -->

	<div id="mainBanner" class="carousel slide mb-5" data-bs-touch="picture" data-bs-ride="false">
		<div class="carousel-indicators">
		    <button type="button" data-bs-target="#mainBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#mainBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#mainBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		    <div class="carousel-item active">
			    <img src="assets/picture/01_TopBanner_01.png" class="d-block w-100" alt="01_TopBanner_01">
			    <div class="carousel-caption d-none d-md-block">
			        <h5>First slide label</h5>
			        <p>Some representative placeholder content for the first slide.</p>
			    </div>
			    </div>
			    <div class="carousel-item">
				    <img src="assets/picture/01_TopBanner_01 - Copy.png" class="d-block w-100" alt="...">
			    <div class="carousel-caption d-none d-md-block">
			        <h5>Second slide label</h5>
			        <p>Some representative placeholder content for the second slide.</p>
			    </div>
			    </div>
			    <div class="carousel-item">
				    <img src="assets/picture/Rectangle 1450 (1).png" class="d-block w-100" alt="Rectangle 1450 (1)">
			    <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Some representative placeholder content for the third slide.</p>
			    </div>
		    </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#mainBanner" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#mainBanner" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		</button>
	</div>
	
	<!-- Section Break Point -->

	<div id="benefit" class="container-fluid bg-body">
		<div class="row">
			<!-- <div class="col-sm m-2 pt-3"> -->
			<div class="col-sm pt-5 pb-1">
				<h2 href="fw-bold text-start">
					<?php echo $random_word ; ?>
				</h2>
			</div>
			<!-- <div class="col-sm m-2"> -->
			<div class="col-sm pt-5 pb-1">
				<h4 class="mb-3">Luxury facilities</h4>
				<p>You can get a workspace of the highst quality at an affordable price and still enjoy the facilities that are oly here.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
			<!-- <div class="col-sm m-2"> -->
			<div class="col-sm pt-5 pb-1">
				<h4 class="mb-3">Affordable Price</h4>
				<p>The advantage of hiring a workspace with us is that givees you comfortable service and all-around facilities.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
			<!-- <div class="col-sm m-2"> -->
			<div class="col-sm pt-5 pb-1">
				<h4 class="mb-3">Many Choices</h4>
				<p>We provide many unique work space choices so that you can choose the workspace to your liking.</p>
				<a class="text-danger" href="#">More Info =></a>
			</div>
		</div>
	</div>

	<!-- Section Break Point -->

	<div id="productDisplay" class="carousel slide bg-secondary bg-opacity-10" data-bs-ride="carousel">
		<div class="carousel-inner">
		    <div class="carousel-item row active col-12">
		    	<img src="assets\picture\03b_ChairDisplay_01.png" class="w-75" alt="03b_ChairDisplay_01">
		    	<div class="row bg-light">
			    	<p class="text-muted mb-0"><?php echo $item[0]['type']; ?></p>
			    	<h4 class="text-black"><?php echo $item[0]['name']; ?></h4>
			    	<p class="text-warning col">$<?php echo $item[0]['price']; ?></p>
		    		<h1 class="text-dark col">+</h1>
		    	</div>
		    </div>
		    <!-- <div class="carousel-item">
		    	<img src="assets\picture\03b_ChairDisplay_01.png" class="d-block w-100" alt="03b_ChairDisplay_02">
		    </div>
		    <div class="carousel-item">
		    	<img src="assets\picture\03b_ChairDisplay_01.png" class="d-block w-100" alt="03b_ChairDisplay_03">
		    </div> -->
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#productDisplay" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#productDisplay" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		</button>
	</div>

	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>