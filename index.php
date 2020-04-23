<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Change_me</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
  
<section class="promo-navbar-section">
	<div class="bg-image-layer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 text-center">
					<img src="https://studyofjoy.com/wp-content/themes/studyofjoy-new/assets/images/studyofjoy-logo.png" />
					<h1>Always<br/>Positive News</h1>
				</div>
				<div class="col-md-4 col-sm-12 text-center">



				</div>
				<div class="col-md-4 col-sm-12">
					
				</div>
			</div>
		</div>

		<!--Navbar -->
		<div class="container navbar-container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="#">Home</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link text-center" href="#"><i class="fas fa-portrait"></i><br/>Quotes</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		         <i class="fas fa-portrait"></i><br/>Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>

		</div>
		<!--Navbar -->
	</div> <!-- bg image layer -->
</section>

<section class="quotes-promo-section normal-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<h2>Popular quotes of the day</h2>
				<hr/>
			</div>
		</div>
	</div>
	<div class="container" style="padding: 0;overflow: hidden;">
		<div class="row">
			<div class="col-2 col-md-3 text-center">
				<div onclick="clickNextCarousel('left')" id="Carousel-left" class="carousel-smaller-image" style="background: url('https://studyofjoy.com/wp-content/themes/studyofjoy-new/motivation/95.jpg') no-repeat center 50%/100%;"></div>
			</div>
			<div class="col-8 col-md-6 text-center">
				<a href=""><img id="carouselCenter" class="img-thumbnail" src="https://studyofjoy.com/wp-content/themes/studyofjoy-new/motivation/937.jpg" data-number="937" /></a>
			</div>
			<div class="col-2 col-md-3 text-center">
				<div onclick="clickNextCarousel('right')" id="Carousel-right" class="carousel-smaller-image" style="background: url('https://studyofjoy.com/wp-content/themes/studyofjoy-new/motivation/179.jpg') no-repeat center 50%/100%;"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<hr/>
				<a href="https://studyofjoy.com/motivational-quotes/" class="btn btn-lg btn-primary">Be inspired</a>
			</div>
		</div>
	</div>
</section>

<section class="news-tv normal-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 text-center" style="background: url('https://studyofjoy.com/wp-content/uploads/2016/05/close-up-fashion-female-373945.jpg') no-repeat center 50%/100%; position: relative;">
				<h2>Title</h2>
			</div>
			<div class="col-md-4 col-sm-12 text-center">
				<div class="list-group">
				  <a href="#" class="list-group-item list-group-item-action active">
				    <div class="d-flex w-100 justify-content-center">
				      <h5 class="mb-1">List group item heading</h5>
				    </div>
				    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				    <small>Donec id elit non mi porta.</small>
				  </a>
				  <a href="#" class="list-group-item list-group-item-action">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading</h5>
				      <small class="text-muted">3 days ago</small>
				    </div>
				    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				    <small class="text-muted">Donec id elit non mi porta.</small>
				  </a>
				  <a href="#" class="list-group-item list-group-item-action">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading</h5>
				      <small class="text-muted">3 days ago</small>
				    </div>
				    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				    <small class="text-muted">Donec id elit non mi porta.</small>
				  </a>
				</div>
			</div>
		</div>
	</div>
</section>




<script>
function clickNextCarousel(side) {
	


	let leftBtn = document.getElementById("Carousel-left").style.backgroundImage.replace(/(url\(|\)|")/g, '');
	let rightBtn = document.getElementById("Carousel-right").style.backgroundImage.replace(/(url\(|\)|")/g, '');

	let firstRandom = Math.round(Math.random() * 1000);
	let secondRandom = Math.round(Math.random() * 1000);


	if(side == "left") {
		document.getElementById('carouselCenter').src= leftBtn;
	} else {
		document.getElementById('carouselCenter').src= rightBtn;

	}



	document.getElementById("Carousel-left").style.backgroundImage = "url('https://studyofjoy.com/wp-content/themes/studyofjoy-new/motivation/" + firstRandom + ".jpg')";

	document.getElementById("Carousel-right").style.backgroundImage = "url('https://studyofjoy.com/wp-content/themes/studyofjoy-new/motivation/" + secondRandom + ".jpg')";
}
</script>

</body>
</html>