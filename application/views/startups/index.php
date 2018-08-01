<!DOCTYPE html>
<html lang="en">

  <head>
	  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/landing/assets/landing/img/startupszw1.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Enlisting Platform for all startups across africa">
    <meta name="author" content="Developer Prince">

    <title>Startups</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/landing/assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo base_url() ?>assets/landing/assets/landing/css/card.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/landing/assets/landing/css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="imgs-navy" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
					<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about" >About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">Contributors</a>
						</li>
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>dashboard" >Startup Central</a>
						</li>
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>startups" >List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
						</li>
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>user" >Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" style="height: 25%;">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
				  <img class="img-fluid" src="<?php echo base_url() ?>assets/images/startupszw-long.png" alt="" style="margin-top: 25%;">
          <!--<h1 class="mx-auto my-0 text-uppercase">Startupszw</h1>-->
          <!-- <h2 class="text-white-50 mx-auto mt-2 mb-5">Discover Zimbabwe's most innovative + inventive products, projects & startups</h2> -->
        </div>
      </div>
    </header>
   
    <!-- Contributors Section -->
    <section id="projects" class="projects-section bg-light">
     <div class="col-lg-12 mx-auto text-center">
     	<h2 class="text-black mb-4 text-center">Startups in Zimbabwe</h2>
     	<div class="portfolio-item">
			 	<div class="container">
				  <div class="row">
		        <?php foreach ($startups as $startup): ?>
            <!-- Startup Card -->
            <div class="col-md-3 col-sm-6 col-lg-3 card-deco show-case" style="padding-bottom: 5%;">
              <div class="portfolio-item isotope-item" >
                <div class="card transition hover-bg">
                    <h2 class="transition str-h2"><?php echo $startup['name'] ?></h2>
                      <p class="startup-description str-text"><small><?php echo $startup['brief'] ?></small></p>
                      <div class="cta-container transition" style="margin-left: -25%;"><a href="" class="cta-loc" data-toggle="modal" data-target="#<?php echo $startup['id'] ?>" id="readmore-1" >ReadMore</a></div>
                      <div class="card_circle transition">
                          <img src="<?php echo base_url()?>assets/images/startups/<?php echo $startup['startup_img']?>"/>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                </div>
            </div>
						<!-- Startup Modal -->
						<div class="modal fade" id="<?php echo $startup['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $startup['id'] ?>" aria-hidden="true" style="border-radius: 25px;">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<img src="<?php echo base_url()?>assets/images/startups/<?php echo $startup['startup_img']?>" alt="" style="width: 25%;">
										<h5 class="modal-title" id="<?php echo $startup['id'] ?>"><?php echo $startup['name'] ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p><?php echo $startup['description'] ?></p>
									</div>
									<div class="modal-footer">
										<div class="container">
											<a href="#"><i class="fab fa-facebook-square"></i></a>
											<a href="#"><i class="fab fa-linkedin"></i></a>
											<a href="#"><i class="fab fa-twitter-square"></i></a>
											<a href="#"><i class="fas fa-file-powerpoint"></i></a>
											<a href="#"><i class="fas fa-file-invoice-dollar"></i></a>
											<a href="#"><i class="fab fa-internet-explorer"></i></a>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
     			</div>
				</div>		
     	
     	
			
			</div>
			</div>
		
		</div>
    </section>

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto" style="border-radius: 5px; background: #9053c7;
    background: -webkit-linear-gradient(-135deg, #0B4F6C, #01BAEF);
    background: -o-linear-gradient(-135deg, #0B4F6C, #01BAEF);
    background: -moz-linear-gradient(-135deg, #0B4F6C, #01BAEF) ">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Developed By Kubaki & Designed by Panthera 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/landing/assets/landing/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/landing/assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/landing/assets/landing/vendor/font-awesome/js/all.js"></script>
    <script src="<?php echo base_url() ?>assets/landing/assets/landing/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/landing/assets/landing/js/grayscale.js"></script>

  </body>

</html>
