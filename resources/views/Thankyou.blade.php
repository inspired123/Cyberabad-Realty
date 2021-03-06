
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>  
	<link rel="stylesheet" href="css/style.css"/>
	<style>
    .clearfix:before,
.clearfix:after {
    display: table;

    content: ' ';
}
.clearfix:after {
    clear: both;
}

 #particles-js {
    width: 100%;
    height: 100%;
    background-color: #6580d2;
}
.page-404 .outer {
    position: absolute;
    top: 0;

    display: table;

    width: 100%;
    height: 100%;
}
.page-404 .outer .middle {
    display: table-cell;

    vertical-align: middle;
}
.page-404 .outer .middle .inner {
    width: 300px;
    margin-right: auto;
    margin-left: auto;
}
.page-404 .outer .middle .inner .inner-circle {
    height: 300px;

    border-radius: 50%;
    background-color: #ffffff;
}
.page-404 .outer .middle .inner .inner-circle:hover i {
    color: #39bbdb!important;
    background-color: #f5f5f5;
    box-shadow: 0 0 0 15px #39bbdb;
}
.page-404 .outer .middle .inner .inner-circle:hover span {
    color: #39bbdb;
}
.page-404 .outer .middle .inner .inner-circle i {
    font-size: 5em;
    line-height: 1em;

    float: right;

    width: 1.6em;
    height: 1.6em;
    margin-top: -.7em;
    margin-right: -.5em;
    padding: 20px;

    -webkit-transition: all .4s;
            transition: all .4s;
    text-align: center;

    color: #f5f5f5!important;
    border-radius: 50%;
    background-color: #39bbdb;
    box-shadow: 0 0 0 15px #f0f0f0;
}
.page-404 .outer .middle .inner .inner-circle span {
    font-size: 11em;
    font-weight: 700;
    line-height: 1.2em;

    display: block;

    -webkit-transition: all .4s;
            transition: all .4s;
    text-align: center;

    color: #e0e0e0;
}
.page-404 .outer .middle .inner .inner-status {
    font-size: 20px;

    display: block;

    margin-top: 20px;
    margin-bottom: 5px;

    text-align: center;

    color: #39bbdb;
}
.page-404 .outer .middle .inner .inner-detail {
    line-height: 1.4em;

    display: block;

    margin-bottom: 10px;

    text-align: center;

    color: #999999;
}
</style>
	<style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
        #createproperty{
            border: 1px solid green;
            padding: 9px 15px 10px 15px;
            border-radius: 5px;
            background-color: #30caa0;
        }
         #createproperty:hover{
             background-color: #d64521;
              border: 1px solid green;
            padding: 9px 15px 10px 15px;
            border-radius: 5px;
         }
    </style>


    <style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
    <style>
   
.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column; 
}
.wrapper-2{
  padding :30px;
  text-align:center;    background: #fff;


}
.infotechno-contact-us-bg {
    background-color: #f8f9fa;
    background-size: cover;
    background-repeat: no-repeat; 
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#007bff;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: 1px; 
  padding:6px;
  text-align:center; border-top: solid 1px #e1e3e4; background:#fff;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#000;
  letter-spacing:1px; font-size:17px; 
    font-family: 'Cairo', sans-serif;
}
.footer-like p a{
  text-decoration:none;
  color:#007bff;
  font-weight:600;
}

/*@media (min-width:360px){*/
/*  h1{*/
/*    font-size:3.5em;*/
/*  }*/
/*  .go-home{*/
/*    margin-bottom:20px;*/
/*  }*/
/*}*/

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
      BORDER: solid 1px #e9ecef;
    background: #fff;
}



</style>
</head>

<body>
   
	
	<!-- Header section -->
	<header class="header-section" style="background-image: url(img/photo-1600992450680-7ea101248d56.jpg);">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							9786543120
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info@gmail.com
						</div>
						<div class="top-info">
							<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true !important;">
      Dropdown button
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>
						</div>
					</div>
					
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							
							
						</div>
						<div class="user-panel">
<!--						    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->
							<a href="register.html" target="_blank"><i class="fa fa-user-circle"></i> Register</a>
							<a href=""><i class="fa fa-sign-in"></i> Login</a>
							<a href="#"  id="createproperty" ><i class="fa fa-plus"></i> Create Property</a>

                               

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="categories.html">FEATURED LISTING</a></li>
							<li><a href="about.html">ABOUT US</a></li>
							<li><a href="single-list.html">Pages</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header><br>
<div class="container">
		<h2 class="heading-agileinfo">Thank You<span>we will reply promptly

once your message is received.</span></h2>
				<div class="popular-grids">
					<!--<div class="col-md-4 popular-grid">-->
					<!--	<img src="images/g7.jpg" class="img-responsive" alt=""/>-->
					<!--	<div class="popular-text">-->
					<!--		<h5><a href="#" data-toggle="modal" data-target="#myModal2">Birthday 2017</a></h5>-->
					<!--		<div class="detail-bottom">-->
					<!--			<ul>-->
					<!--				<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>-->
					<!--				<li><i class="fa fa-map-marker" aria-hidden="true"></i>LONDON, UK</li>-->
					<!--			</ul>-->
					<!--			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					
					
					
					
					
					<!--<div class="col-md-4 popular-grid">-->
					<!--	<img src="images/g3.jpg" class="img-responsive" alt=""/>-->
					<!--	<div class="popular-text">-->
					<!--		<h5><a href="#" data-toggle="modal" data-target="#myModal">Promotions</a></h5>-->
					<!--		<div class="detail-bottom">-->
					<!--			<ul>-->
					<!--				<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>-->
					<!--				<li><i class="fa fa-map-marker" aria-hidden="true"></i>LONDON, UK</li>-->
					<!--			</ul>-->
					<!--			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<div class="feature-images-wrapper infotechno-contact-us-bg section-space--pb_60">
					<div class="container">
						<div class="row">
						
						
						<div class="content">
  <div class="wrapper-1">
    <div class="wrapper-2">
	  <h3 class="text-center"><img src="img/gmail.gif" style="width:50%;"></h3>	
      <p>Thanks for contacting us, <br>we will reply promptly

once your message is received.  </p>
      <confirmation email="" soon="" <="" p="">
     <a href="index.html"></a><button class="go-home" onclick="window.location.href = 'index.html';"><a href="index.html"></a> 
      go home
      </button>
    </confirmation></div>
    <div class="footer-like">
      <p>You can reach us @ Ph: <a href="tel:81798 63307">+91 81798 63307</a>
      </p><span class="text-center" id="timer">This page will redirect in 0 seconds.</span>
    </div>
</div>
</div>



							
							
						</div>
					</div>

        </div>

      
        </div>
					
					
				<!--	<script type="text/javascript">-->
    <!--    var count = 5;-->
    <!--    var redirect = "https://www.inspiredinfotech.com/Marri-Krishna-Hall";-->
    <!--    function countDown() {-->
    <!--        var timer = document.getElementById("timer");-->
    <!--        if (count > 0) {-->
    <!--            count--;-->
    <!--            timer.innerHTML = "This page will redirect in " + count + " seconds.";-->
    <!--            setTimeout("countDown()", 1000);-->
    <!--        } else {-->
    <!--            window.location.href = redirect;-->
    <!--        }-->
    <!--    }-->
    <!--    countDown();-->
    <!--</script>-->
					
					
					<div class="clearfix"></div>
				</div>
<script>
    particlesJS("particles-js", {
    "particles": {
		"number": {
			"value": 80,
			"density": {
				"enable": true,
				"value_area": 800
			}
		},
		"color": {
			"value": "#ffffff"
		},
		"shape": {
			"type": "circle",
			"stroke": {
				"width": 0,
				"color": "#000000"
			},
			"polygon": {
				"nb_sides": 5
			},
			"image": {
				"src": "img/github.svg",
				"width": 100,
				"height": 100
			}
		},
		"opacity": {
			"value": 0.5,
			"random": false,
			"anim": {
				"enable": false,
				"speed": 1,
				"opacity_min": 0.1,
				"sync": false
			}
		},
		"size": {
			"value": 3,
			"random": true,
			"anim": {
				"enable": false,
				"speed": 40,
				"size_min": 0.1,
				"sync": false
			}
		},
		"line_linked": {
			"enable": true,
			"distance": 150,
			"color": "#ffffff",
			"opacity": 0.4,
			"width": 1
		},
		"move": {
			"enable": true,
			"speed": 6,
			"direction": "none",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
				"enable": false,
				"rotateX": 600,
				"rotateY": 1200
			}
		}
	},
	"interactivity": {
		"detect_on": "canvas",
		"events": {
			"onhover": {
				"enable": true,
				"mode": "grab"
			},
			"onclick": {
				"enable": true,
				"mode": "push"
			},
			"resize": true
		},
		"modes": {
			"grab": {
				"distance": 140,
				"line_linked": {
					"opacity": 1
				}
			},
			"bubble": {
				"distance": 400,
				"size": 40,
				"duration": 2,
				"opacity": 8,
				"speed": 3
			},
			"repulse": {
				"distance": 200,
				"duration": 0.4
			},
			"push": {
				"particles_nb": 4
			},
			"remove": {
				"particles_nb": 2
			}
		}
	},
	"retina_detect": true
}); 
</script>
</body><br>
	<!-- Footer section -->
	<footer class="footer-section set-bg" style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<h5 class="fw-title">REALESTATE</h5>
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>Reliance cyber villae </p>
						<p><i class="fa fa-phone"></i>Madhapur</p>
						<p><i class="fa fa-envelope"></i>info.@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Hitech</a></li>
							<li><a href="">Madhapur</a></li>
							<li><a href="">Kondapur</a></li>
							<li><a href="">Gawchibowli</a></li>
							<li><a href="">Patancheruvu</a></li>
						</ul>
						<ul>
							<li><a href="">Kukatapally</a></li>
							<li><a href="">Jubilli Hills</a></li>
							<li><a href="">Sr nagar</a></li>
							<li><a href="">Secunderabad</a></li>
							<li><a href="">Bachupalli</a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				
				<div class="copyright">
					<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="123.com" target="_blank">123.com</a>
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	

</html>