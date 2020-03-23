<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lancar - Bootstrap One-Page Portfolio Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>    
        <!-- Loader --> <!-- Анимация загрузки работает на JS -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
		
		<!-- запускаем навигатор из nav.php -->
		<!-- Top menu -->
		<?php 
		  include('nav.php');
		 ?>
		
        <!-- About us -->
        <div class="about-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
	                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- Block 2 (team member) -->
        <div class="block-2-container section-container about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left block-2-media wow fadeInLeft">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/1.jpg" alt="" data-at2x="assets/img/about/1.jpg">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            	<div class="col-sm-8 block-2-box block-2-right wow fadeInUp">
	            		<h3>Jane Doe / <span>Our CEO</span></h3>
	            		<p>
	            			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	            			labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	            		</p>
	            		<p>
	            			Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
	            			Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.
	            		</p>
	            		<h3>Follow Her:</h3>
	            		<div class="about-social">
		                	<a href="#"><i class="fa fa-facebook"></i></a>
		                	<a href="#"><i class="fa fa-dribbble"></i></a>
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            </div>
	        </div>
        </div>
        
        <!-- Block 2 (team member) -->
        <div class="block-2-container section-container section-container-gray about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-8 block-2-box block-2-left wow fadeInLeft">
	            		<h3>Tim Brown / <span>Developer</span></h3>
	            		<p>
	            			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	            			labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	            		</p>
	            		<p>
	            			Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
	            			Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.
	            		</p>
	            		<h3>Follow Him:</h3>
	            		<div class="about-social">
		                	<a href="#"><i class="fa fa-facebook"></i></a>
		                	<a href="#"><i class="fa fa-dribbble"></i></a>
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            	<div class="col-sm-4 block-2-box block-2-right block-2-media wow fadeInUp">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/2.jpg" alt="" data-at2x="assets/img/about/2.jpg">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            </div>
	        </div>
        </div>
        
        <!-- Block 2 (team member) -->
        <div class="block-2-container section-container about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left block-2-media wow fadeInLeft">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/3.jpg" alt="" data-at2x="assets/img/about/3.jpg">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            	<div class="col-sm-8 block-2-box block-2-right wow fadeInUp">
	            		<h3>Sarah Red / <span>Designer</span></h3>
	            		<p>
	            			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	            			labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	            		</p>
	            		<p>
	            			Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
	            			Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.
	            		</p>
	            		<h3>Follow Her:</h3>
	            		<div class="about-social">
		                	<a href="#"><i class="fa fa-facebook"></i></a>
		                	<a href="#"><i class="fa fa-dribbble"></i></a>
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            </div>
	        </div>
        </div>        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script> <!-- Этот скрипт для работы Loader -->
        <!-- Свой JS для подсветкиоткрытой строницы -->
        <script>
        	let li = document.querySelector('.scroll-link-about');
        	li.style.color = '#2ba560';
        </script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
