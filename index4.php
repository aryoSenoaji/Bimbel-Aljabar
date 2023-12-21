<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery View</title>
<link rel="stylesheet" href="style4.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!--	Unite Gallery	-->
<script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>	
<script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>	
<link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
<script type='text/javascript' src='unitegallery/themes/grid/ug-theme-grid.js'></script>

</head>

<body>
<!--	Navbar	-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
	<div class="container">
		<a class="fs-2 navbar-brand" href="https://goo.gl/maps/NhRvovGp2Upx1f4a8"><i class="fad fa-starship"></i></a>
		<button
		class="navbar-toggler"
		type="button"
		data-bs-toggle="collapse"
		data-bs-target="#navbarNav"
		aria-controls="navbarNav"
		aria-expanded="false"
		aria-label="Toggle navigation"
		>
		<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarNav">
		<div class="mx-auto"></div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="index2.php">Why Us?</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="index3.php">Our Program</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">Gallery</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="index5.php">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="index6.php">Contact</a>
			</li>
		</ul>
		</div>
	</div>
</nav>

<!--	Jumbotron	-->
	<div class="jumbotron jumbotron-fluid">
	  <div class="container tittle">
		<h1 class="display-4">Our <br> Photos</h1>
	  </div>
	</div>

<!--	Gallery	-->
<section class="galleryView">
	<div class="row">
		<h1 class="text-center judul">Foto Pengajar <br> Dan Kegiatan Al Jabar </h1>
	</div>
	<div class="row">
		<div class="container-fluid">
		<div id="gallery" style="display:none;" class="rounded">

			<img alt="Preview Image 1"
				 src="img/toa-heftiba-LEoWU6PghAo-unsplash.jpg"
				 data-image="img/toa-heftiba-LEoWU6PghAo-unsplash.jpg"
				 data-description="Preview Image 1 Description">

			<img alt="Preview Image 2"
				 src="img/hero.png"
				 data-image="img/hero.png"
				 data-description="Preview Image 2 Description">

			<img alt="Preview Image 3"
				 src=""
				 data-image=""
				 data-description="Preview Image 3 Description">

			<img alt="Preview Image 4"
				 src=""
				 data-image=""
				 data-description="Preview Image 4 Description">

			<img alt="Preview Image 5"
				 src=""
				 data-image=""
				 data-description="Preview Image 5 Description">

			<img alt="Preview Image 6"
				 src=""
				 data-image=""
				 data-description="Preview Image 6 Description">
	</div>
		</div>
	</div>
</section>


<!--	footer	-->
	<footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique illum corrupti</p>
          <p class="pt-4 text-muted">Copyright ©2021 All rights reserved |
            <span> Aryo Senoaji</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Stay Update</h4>
          <p class="text-muted">For News!</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <button type="button" class="bg-transparent"><i class="fad fa-arrow-right text-white"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Contact Us</h4>
          <p class="text-muted">For More Info</p>
          <div class="column text-light">
            <a href="" class="me-3 fs-4"><i class="fal fa-mobile"></i></a>
            <a href="" class="me-3 fs-4"><i class="fad fa-map-pin"></i></a>
            <a href="" class="me-3 fs-4"><i class="fal fa-paper-plane"></i></a>
            <a href="" class="me-3 fs-4"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	

	<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery("#gallery").unitegallery();

		});
		
	</script>
<script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>	
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
</body>
</html>