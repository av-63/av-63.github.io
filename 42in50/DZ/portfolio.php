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
		
        <!-- Portfolio -->
        <div class="portfolio-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 portfolio section-description wow fadeIn">
	                	<h2>Our portfolio</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum 
	                    	est notare quam littera gothica, quam nunc putamus parum claram lorem.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInUp">
	            		<a href="#" class="filter-all active">All</a> / 
	            		<a href="#" class="filter-design">Design</a> / 
	            		<a href="#" class="filter-development">Development</a> / 
	            		<a href="#" class="filter-branding">Branding</a>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                <div class="portfolio-box design">
		                	<img src="assets/img/portfolio/1.jpg" alt="" data-at2x="assets/img/portfolio/1.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Trilli Bi template</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box development">
		                	<img src="assets/img/portfolio/2.jpg" alt="" data-at2x="assets/img/portfolio/2.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Sit amet logo</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box branding">
		                	<img src="assets/img/portfolio/3.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Aeria app page</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box development">
		                	<img src="assets/img/portfolio/4.jpg" alt="" data-at2x="assets/img/portfolio/4.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Etiam processus dynamicus</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box design">
		                	<img src="assets/img/portfolio/5.jpg" alt="" data-at2x="assets/img/portfolio/5.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>March notare site</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box development">
		                	<img src="assets/img/portfolio/6.jpg" alt="" data-at2x="assets/img/portfolio/6.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Mirum est notare</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box design">
		                	<img src="assets/img/portfolio/7.jpg" alt="" data-at2x="assets/img/portfolio/7.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Celic template</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box development">
		                	<img src="assets/img/portfolio/8.jpg" alt="" data-at2x="assets/img/portfolio/8.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Sit amet logo</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box branding">
		                	<img src="assets/img/portfolio/9.jpg" alt="" data-at2x="assets/img/portfolio/9.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Jalia business</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box design">
		                	<img src="assets/img/portfolio/10.jpg" alt="" data-at2x="assets/img/portfolio/10.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Mirum est notare</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box development">
		                	<img src="assets/img/portfolio/11.jpg" alt="" data-at2x="assets/img/portfolio/11.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Etiam processus social</p>
		                		</div>
		                	</div>
		                </div>
		                <div class="portfolio-box branding">
		                	<img src="assets/img/portfolio/12.jpg" alt="" data-at2x="assets/img/portfolio/12.jpg">
		                	<div class="portfolio-box-text-container">
		                		<div class="portfolio-box-text">
		                			<p>Sit website logo</p>
		                		</div>
		                	</div>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>
        
		<!-- Block 2 -->
        <div class="block-2-container section-container section-container-gray">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-6 block-2-box block-2-left wow fadeInLeft">
	            		<h3>How we do it?</h3>
	            		<p>
	            			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
	            			incididunt ut labore et dolore magna.
	            		</p>
	            		<ul>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Etiam processus dynamicus qui
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Quam nunc putamus Photoshop
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Mutationem consuetudium WordPress
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Exerci tation ullamcorper
	            			</li>
	            		</ul>
	            	</div>
	            	<div class="col-sm-6 block-2-box block-2-right block-2-media wow fadeInUp">
	            		<div class="video-box">
		                    <div class="embed-responsive embed-responsive-16by9">
		                    	<iframe class="embed-responsive-item" src="//player.vimeo.com/video/115014610?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		                    </div>
	                    </div>
	            	</div>
	            </div>
	        </div>
        </div>

		<!-- Our motto -->
        <div class="our-motto-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 our-motto section-description wow fadeInLeftBig">
	                    <p>
	                    	"Success is not the key to happiness. Happiness is the key to success. 
	                    	If you love what you are doing, you will be successful."
	                    </p>
	                    <div class="our-motto-author">ALBERT SCHWEITZER</div>
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
        	let li = document.querySelector('.scroll-link-portfolio');
        	li.style.color = '#2ba560';
        </script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
