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
		
        <!-- Pricing -->
        <div class="pricing-2-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 pricing-2 section-description wow fadeIn">
	                	<h2>Packages</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
	                    	Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-3 pricing-2-box wow fadeInUp">
	                    <div class="pricing-2-table">
	                    	<h3>Basic</h3>
	                    	<h4>Freelancer</h4>
	                    	<div class="pricing-2-table-divider"><span></span></div>
	                    	<div class="pricing-2-table-price">$<span>12</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>1000</span> contacts</p>
	                    		<p><span>Normal</span> speed</p>
	                    		<p><span>500</span> emails</p>
	                    		<p><span>300MB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	                <div class="col-sm-3 pricing-2-box wow fadeInDown">
	                    <div class="pricing-2-table pricing-2-table-best">
	                    	<h3>Ultimate</h3>
	                    	<h4>Best value</h4>
	                    	<div class="pricing-2-table-icon"><span aria-hidden="true" class="icon_like_alt"></span></div>
	                    	<div class="pricing-2-table-price">$<span>35</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>3000</span> contacts</p>
	                    		<p><span>2x</span> speed</p>
	                    		<p><span>2000</span> emails</p>
	                    		<p><span>500MB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	                <div class="col-sm-3 pricing-2-box wow fadeInUp">
	                	<div class="pricing-2-table">
	                    	<h3>Silver</h3>
	                    	<h4>Big business</h4>
	                    	<div class="pricing-2-table-divider"><span></span></div>
	                    	<div class="pricing-2-table-price">$<span>75</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>5000</span> contacts</p>
	                    		<p><span>4x</span> speed</p>
	                    		<p><span>4000</span> emails</p>
	                    		<p><span>900MB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	                <div class="col-sm-3 pricing-2-box wow fadeInDown">
	                	<div class="pricing-2-table">
	                    	<h3>Platinum</h3>
	                    	<h4>Bigger business</h4>
	                    	<div class="pricing-2-table-divider"><span></span></div>
	                    	<div class="pricing-2-table-price">$<span>120</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>7000</span> contacts</p>
	                    		<p><span>6x</span> speed</p>
	                    		<p><span>8000</span> emails</p>
	                    		<p><span>2GB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-8 testimonials section-description wow fadeInLeft">
	                    <h3>Listen to our clients</h3>
	                    <div class="testimonial-active"></div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
	                    		lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, 
	                    		quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
	                    		<br>
	                    		<a href="">John Doe, johndoe.com</a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
	                    		ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
	                    		incididunt ut labore et.
	                    		<br>
	                    		<a href="">Jane Jonsson, blog.jane.com</a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
	                    		lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, 
	                    		quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
	                    		<br>
	                    		<a href="">John Doe, johndoe.com</a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
	                    		ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
	                    		incididunt ut labore et.
	                    		<br>
	                    		<a href="">Jane Jonsson, blog.jane.com</a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/4.jpg" alt="" data-at2x="assets/img/testimonials/4.jpg">
	                    	</div>
	                    </div>
	                </div>
	            </div>
	            <div class="testimonials-icon-container">
            		<span aria-hidden="true" class="icon_chat"></span>
            	</div>
	        </div>
        </div>
        
        <!-- Call to action -->
        <div class="call-to-action-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
                    <div class="col-sm-12">
                        <div class="section-bottom-link wow fadeInUp">
                        	<a class="big-link-1 btn" href="contact.php">Contact us now!</a>
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
        	let li = document.querySelector('.scroll-link-pricing-2');
        	li.style.color = '#2ba560';
        </script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
