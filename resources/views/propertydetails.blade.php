@include('header')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Real Estate</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>  
	<link rel="stylesheet" href="css/style.css"/>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,400,500,700" rel="stylesheet">

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate.css" rel="stylesheet">
    <link href="lib/selectric/selectric.css" rel="stylesheet">
    <link href="lib/swiper/css/swiper.min.css" rel="stylesheet">
    <link href="lib/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="lib/photoswipe/default-skin/default-skin.css">
    <link href="css1/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="lib/jquery-3.2.1.min.js"></script>
    <script src="lib/popper.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/selectric/jquery.selectric.js"></script>
    <script src="lib/swiper/js/swiper.min.js"></script>
    <script src="lib/aos/aos.js"></script>
    <script src="lib/sticky-sidebar/ResizeSensor.min.js"></script>
    <script src="lib/sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="lib/photoswipe/photoswipe.min.js"></script>
    <script src="lib/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="lib/lib.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
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
							<a href="login.html" target="_blank"><i class="fa fa-sign-in"></i> Login</a>
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
	</header>
    <div id="main">
        <!-- <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
            <div class="container">
                <a class="navbar-brand" href="index.html"><span class="icon-uilove icon-uilove-realestate"></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-content"
                    aria-controls="menu-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu-content">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Home <span class="sr-only">(current)</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="index.html" class="dropdown-item">Homepage 1</a>
                                <a href="index2.html" class="dropdown-item">Homepage 2</a>
                                <a href="index3.html" class="dropdown-item">Homepage 3</a>
                                <a href="index4.html" class="dropdown-item">Homepage 4</a>
                                <a href="index5.html" class="dropdown-item">Homepage 5</a>
                                <a href="index6.html" class="dropdown-item">Homepage 6</a>
                                <a href="index7.html" class="dropdown-item">Homepage 7</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Listings
                            </a>
                            <div class="dropdown-menu">
                                <a href="property_listing.html" class="dropdown-item">List View</a>
                                <a href="property_grid.html" class="dropdown-item">Grid View</a>
                                <a href="property_listing_map.html" class="dropdown-item">Map View</a>
                                <a href="property_single.html" class="dropdown-item">Single View 1</a>
                                <a href="property_single2.html" class="dropdown-item">Single View 2</a>
                                <a href="property_single3.html" class="dropdown-item">Single View 3</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Agents
                            </a>
                            <div class="dropdown-menu">
                                <a href="agent_list.html" class="dropdown-item">Agent List</a>
                                <a href="agent.html" class="dropdown-item">Agent Profile</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown megamenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div class="col col-md-8">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="title">Homepage</li>
                                                        <li><a href="index.html">Homepage 1</a></li>
                                                        <li><a href="index2.html">Homepage 2</a></li>
                                                        <li><a href="index3.html">Homepage 3</a></li>
                                                        <li><a href="index4.html">Homepage 4</a></li>
                                                        <li><a href="index5.html">Homepage 5</a></li>
                                                        <li><a href="index6.html">Homepage 6</a></li>
                                                        <li><a href="index7.html">Homepage 7</a></li>
                                                        <li class="title">Login Pages</li>
                                                        <li><a href="signin.html">Signin</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="title">Property Listing</li>
                                                        <li><a href="property_listing.html">List View</a></li>
                                                        <li><a href="property_grid.html">Grid View</a></li>
                                                        <li><a href="property_listing_map.html">Map View</a></li>
                                                        <li class="title">Single Property</li>
                                                        <li><a href="property_single.html">Single View 1</a></li>
                                                        <li><a href="property_single2.html">Single View 2</a></li>
                                                        <li><a href="property_single3.html">Single View 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="title">Other Pages</li>
                                                        <li><a href="plans.html">Plans</a></li>
                                                        <li><a href="information_page.html">Information Page</a></li>
                                                        <li><a href="coming_soon.html">Coming Soon</a></li>
                                                        <li><a href="404_error.html">Error Page</a></li>
                                                        <li><a href="success.html">Success Page</a></li>
                                                        <li><a href="contact.html">Contact Page</a></li>
                                                        <li><a href="compare.html">Compare Properties</a></li>
                                                        <li class="title">Agent Pages</li>
                                                        <li><a href="agent_list.html">Agent List</a></li>
                                                        <li><a href="agent.html">Agent Profile</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <ul class="list-unstyled">
                                                        <li class="title">Account Pages</li>
                                                        <li><a href="my_listing_add.html">Add Listing</a></li>
                                                        <li><a href="my_bookmarked_listings.html">Bookmarked Listing</a>
                                                        </li>
                                                        <li><a href="my_listings.html">My Listings</a></li>
                                                        <li><a href="my_profile.html">My Profile</a></li>
                                                        <li><a href="my_password.html">Change Password</a></li>
                                                        <li><a href="my_notifications.html">Notifications</a></li>
                                                        <li><a href="my_membership.html">Membership</a></li>
                                                        <li><a href="my_payments.html">Payments</a></li>
                                                        <li><a href="my_account.html">Account</a></li>
                                                        <li class="title">Blog Pages</li>
                                                        <li><a href="blog.html">Blog Archive</a></li>
                                                        <li><a href="blog_single.html">Blog Single</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item dropdown user-account">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="user-image" style="background-image:url(' img/demo/profile3.jpg');"></span>
                                Hi, John
                            </a>
                            <div class="dropdown-menu">
                                <a href="my_profile.html" class="dropdown-item">My Profile</a>
                                <a href="my_password.html" class="dropdown-item">Change Password</a>
                                <a href="my_notifications.html" class="dropdown-item">Notifications</a>
                                <a href="my_membership.html" class="dropdown-item">Membership</a>
                                <a href="my_payments.html" class="dropdown-item">Payments</a>
                                <a href="my_account.html" class="dropdown-item">Account</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link nav-btn" href="my_listing_add.html"><span><i
                                        class="fa fa-plus" aria-hidden="true"></i> Add listing</span></a></li>
                    </ul>

                </div>
            </div>
        </nav> -->
        <div class="container" style="margin: 181px 0px 0px 0px;">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-12 col-xl-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Property for sale</a></li>
                        <li class="breadcrumb-item active" aria-current="page">2 bed semi-detached bungalow</li>
                    </ol>
                    <div class="page-header bordered mb0">
                        <div class="row">
                            <div class="col-md-8"> <a href="#" class="btn-return" title="Back"><i
                                        class="fa fa-angle-left"></i></a>
                                <h1>2 bed semi-detached bungalow <span class="label label-bordered">For sale</span>
                                    <small><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</small>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <div class="price">£250,000 <small>$900/sq ft</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="item-single">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-md-12 col-lg-12 col-xl-10">
                        <div class="row row justify-content-md-center has-sidebar">
                            <div class="col-md-7 col-lg-8">
                                <div>
                                    <div class="item-gallery">
                                        <div class="swiper-container gallery-top" data-pswp-uid="1">
                                            <div class="swiper-wrapper lazyload">

                                                <div class="swiper-slide">
                                                    <figure itemprop="associatedMedia" itemscope
                                                        itemtype="http://schema.org/ImageObject"> <a
                                                            href="img/03.jpg" itemprop="contentUrl"
                                                            data-size="2000x1414"> <img src="img/03.jpg"
                                                                class="img-fluid swiper-lazy" alt="Drawing Room"> </a>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure itemprop="associatedMedia" itemscope
                                                        itemtype="http://schema.org/ImageObject"> <a
                                                            href="img/03.jpg" itemprop="contentUrl"
                                                            data-size="2000x1414"> <img
                                                                data-src="img/03.jpg" src="img/03.jpg"
                                                                class="img-fluid swiper-lazy" alt="Drawing Room"> </a>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure itemprop="associatedMedia" itemscope
                                                        itemtype="http://schema.org/ImageObject"> <a
                                                            href="img/03.jpg" itemprop="contentUrl"
                                                            data-size="2000x1414"> <img
                                                                data-src="img/03.jpg" src="img/03.jpg"
                                                                class="img-fluid swiper-lazy" alt="Drawing Room"> </a>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure itemprop="associatedMedia" itemscope
                                                        itemtype="http://schema.org/ImageObject"> <a
                                                            href="img/03.jpg" itemprop="contentUrl"
                                                            data-size="2000x1414"> <img
                                                                data-src="img/03.jpg" src="img/03.jpg"
                                                                class="img-fluid swiper-lazy" alt="Drawing Room"> </a>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure itemprop="associatedMedia" itemscope
                                                        itemtype="http://schema.org/ImageObject"> <a
                                                            href="img/03.jpg" itemprop="contentUrl"
                                                            data-size="2000x1414"> <img
                                                                data-src="img/03.jpg" src="img/03.jpg"
                                                                class="img-fluid swiper-lazy" alt="Drawing Room"> </a>
                                                    </figure>
                                                </div>

                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <div class="swiper-container gallery-thumbs">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                                <div class="swiper-slide"><img src="img/03.jpg"
                                                        class="img-fluid" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="item-features">
                                            <li><span>540</span> sq m </li>
                                            <li><span>3</span> Rooms </li>
                                            <li><span>1</span> Bedrooms </li>
                                            <li><span>2</span> Bathrooms </li>
                                        </ul>
                                        <div class="item-description">
                                            <h3 class="headline">Property description</h3>
                                            <p><strong>Hall</strong> <strong>entrance</strong> UPVC double glazed door
                                                to the front, laminate flooring, storage cupboard, loft access and under
                                                floor heating.</p>
                                            <p><strong>Lounge/diner/kitchen</strong> <strong>24' 6" x 16' 0" (7.47m x
                                                    4.88m)</strong> Spacious L shape open plan living, UPVC double
                                                glazed window and bi-folding doors to the rear, laminate flooring,
                                                television and telephone connection points, power sockets and under
                                                floor heating.</p>
                                            <p>Fitted kitchen with wall and base cupboards, integrated Bosch electric
                                                hob and oven, cooker hood, lamona inset sink and drainer, mosaic style
                                                splash back tiling, integrated Bosch washing machine and dishwasher,
                                                integrated Bosch fridge freezer and power sockets.</p>
                                            <p><strong>Bedroom</strong> <strong>one</strong> <strong>10' 08" x 10' 04"
                                                    (3.25m x 3.15m)</strong> UPVC double glazed window to the front,
                                                television connection point, power sockets and under floor heating.</p>
                                            <p><strong>Bedroom</strong> <strong>two</strong> <strong>9' 05" x 9' 0"
                                                    (2.87m x 2.74m)</strong> UPVC double glazed window to the front,
                                                television connection point, power sockets and under floor heating.</p>
                                            <p><strong>Bathroom</strong> <strong>8' 08" x 6' 08" (2.64m x
                                                    2.03m)</strong> UPVC double glazed window to the side, tiled
                                                flooring, L shaped bath with fitted shower over head, wash hand basin,
                                                WC, extractor fan, tiled surrounds and under floor heating.</p>
                                            <p><strong>Outside</strong> <strong>areas</strong> Front - large driveway
                                                with space for multiple vehicles.</p>
                                            <p>Rear - Large fully enclosed garden laid to lawn with patio around the
                                                property and side access.</p>
                                        </div>
                                        <h3 class="headline">Property Details</h3>
                                        <ul class="checked_list feature-list">
                                            <li><strong>Building Age:</strong> 2 Years</li>
                                            <li><strong>Parking:</strong> Attached Garage</li>
                                            <li><strong>Cooling:</strong> Central Cooling</li>
                                            <li><strong>Heating:</strong> Forced Air, Gas</li>
                                            <li><strong>Sewer:</strong> Public/City</li>
                                            <li><strong>Water:</strong> City</li>
                                        </ul>
                                        <h3 class="headline">Property Features</h3>
                                        <ul class="checked_list feature-list">
                                            <li>Alarm</li>
                                            <li>Gym</li>
                                            <li>Internet</li>
                                            <li>Swimming Pool</li>
                                            <li>Window Covering</li>
                                        </ul>
                                        <div class="item-navigation">
                                            <ul class="nav nav-tabs v2" role="tablist">
                                                <li role="presentation"><a href="#map" aria-controls="map" role="tab"
                                                        data-toggle="tab" class="active"><i class="fa fa-map"></i> <span
                                                            class="hidden-xs">Map &amp; nearby</span></a></li>
                                                <li role="presentation"><a href="#streetview" aria-controls="streetview"
                                                        role="tab" data-toggle="tab"><i class="fa fa-road"></i> <span
                                                            class="hidden-xs">Street View</span></a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="map">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1215.7401235613713!2d1.4497354260471211!3d52.45232942952154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9f169c5a088db%3A0x75a6abde48cc5adc!2sKents+Ln%2C+Bungay+NR35+1JF%2C+UK!5e0!3m2!1sen!2sin!4v1489862715790"
                                                        width="600" height="450" style="border:0;"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="streetview">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2s!4v1489861898447!6m8!1m7!1sGz9bS-GXSJE28jHD19m7KQ!2m2!1d52.45191646727986!2d1.451480542718656!3f0!4f0!5f0.8160813932612223"
                                                        width="600" height="450" style="border:0"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <div id="sidebar" class="sidebar-right">
                                    <div class="sidebar_inner">
                                        <div id="feature-list" role="tablist">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse"
                                                            href="#specification" aria-expanded="true"
                                                            aria-controls="specification"> Specifications <i
                                                                class="fa fa-caret-down float-right"></i> </a> </h4>
                                                </div>
                                                <div id="specification" class="panel-collapse collapse show"
                                                    role="tabpanel">
                                                    <div class="card-body">
                                                        <table class="table v1">
                                                            <tr>
                                                                <td>Bedrooms</td>
                                                                <td>3</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bathrooms</td>
                                                                <td>2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Covered area</td>
                                                                <td>4590 sqft</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Area</td>
                                                                <td>5600 sqft</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Floor</td>
                                                                <td>Ground Floor</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow">
                                            <h5 class="subheadline mt-0  mb-0">For Sale by Agent</h5>
                                            <div class="media">
                                                <div class="media-left"> <a href="agent.html"> <img
                                                            class="media-object rounded-circle"
                                                            src="img/pic.jpg" width="64" height="64" alt="">
                                                    </a> </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="agent.html">John Doe</a></h4>
                                                    <p><a href="tel:01502392905"><i class="fa fa-phone"
                                                                aria-hidden="true"></i> Call: 01502 392905</a></p>
                                                    <p><a href="agent.html" class="btn btn-sm btn-light">View
                                                            Profile</a></p>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal"
                                                data-target="#leadform">Request Details</a>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group"> <a href="#"
                                                class="btn btn-light" data-toggle="tooltip" title="Save to favorites"><i
                                                    class="fa fa-star" aria-hidden="true"></i></a> <a href="#"
                                                class="btn btn-light" data-toggle="tooltip" title="Print this page"><i
                                                    class="fa fa-print" aria-hidden="true"></i></a> <a href="#"
                                                class="btn btn-light" data-toggle="modal"
                                                data-target="#email-to-friend"><span data-toggle="tooltip"
                                                    title="Email to Friend"><i class="fa fa-envelope-o"
                                                        aria-hidden="true"></i></span></a> <a href="#"
                                                class="btn btn-light" data-toggle="modal"
                                                data-target="#report-listing"><span data-toggle="tooltip"
                                                    title="Report Listing"><i class="fa fa-exclamation-circle"
                                                        aria-hidden="true"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lead Form Modal -->
        <div class="modal fade  item-badge-rightm" id="leadform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="media">
                            <div class="media-left"><img src="img/demo/property/thumb/1.jpg" width="60"
                                    class="img-rounded mt5" alt=""></div>
                            <div class="media-body">
                                <h4 class="media-heading">Request details for 2 bed semi-detached bungalow for sale</h4>
                                Kents Lane, Bungay NR35
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Your Telephone</label>
                                <input type="tel" class="form-control" placeholder="Your Telephone">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea rows="4" class="form-control"
                                    placeholder="Please include any useful details, i.e. current status, availability for viewings, etc."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Request Details</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Email to friend Modal -->
        <div class="modal fade item-badge-rightm" id="email-to-friend" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="media">
                            <div class="media-left"> <img src="img/demo/property/thumb/1.jpg" width="60"
                                    class="img-rounded mt5" alt=""> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Email friend about 2 bed semi-detached bungalow for sale</h4>
                                Kents Lane, Bungay NR35
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Friends Email</label>
                                <input type="email" class="form-control" placeholder="Friends Email">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea rows="4" class="form-control"
                                    placeholder="">I thought you might want to take a look at this property for sale.</textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Request Details</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Listing Modal -->
        <div class="modal fade item-badge-rightm" id="report-listing" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="media">
                            <div class="media-left"> <i class="fa fa-3x fa-exclamation-circle" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Report Listing for 2 bed semi-detached bungalow for sale</h4>
                                Kents Lane, Bungay NR35
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Contact Name</label>
                                <input type="text" class="form-control" placeholder="Contact Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label>Nature of report</label>
                                <select class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="no_longer_available">Property is no longer available</option>
                                    <option value="incorrect_price">Price listed is incorrect</option>
                                    <option value="incorrect_last_sold_price">Last sold price incorrect</option>
                                    <option value="incorrect_description">Property description is inaccurate</option>
                                    <option value="incorrect_location">Property location is incorrect</option>
                                    <option value="incorrect_content">Problem with photos, floorplans, etc.</option>
                                    <option value="inappropriate_video">Problem with the video</option>
                                    <option value="agent_not_contactable">Agent is not contactable</option>
                                    <option value="incorrect_running_costs">Running costs is displaying inaccurate
                                        values</option>
                                    <option value="other">Other (please specify)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description of content issue </label>
                                <textarea rows="4" class="form-control"
                                    placeholder="Please provide as much information as possible..."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Report Error</button>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        <!-- <footer id="footer" class="bg-light footer-light">
            <div class="container container-1000">
                <div class="row">
                    <div class="col-lg-3">
                        <p><span class="icon-uilove icon-uilove-realestate"></span></p>
                        <address class="mb-3">
                            <strong>Twitter, Inc.</strong><br>
                            1355 Market Street, Suite 900<br>
                            San Francisco, CA 94103<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <div class="footer-social mb-4"><a href="#" class="ml-2 mr-2"><span
                                    class="fa fa-twitter"></span></a> <a href="#" class="ml-2 mr-2"><span
                                    class="fa fa-facebook"></span></a> <a href="#" class="ml-2 mr-2"><span
                                    class="fa fa-instagram"></span></a></div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="footer-links">
                            <ul class="list-unstyled">
                                <li class="list-title"><a href="#">About</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="footer-links">
                            <ul class="list-unstyled">
                                <li class="list-title"><a href="#">Links</a></li>
                                <li><a href="#">For Rent</a></li>
                                <li><a href="#">For Sale</a></li>
                                <li><a href="#">Commercial</a></li>
                                <li><a href="#">Agents</a></li>
                                <li><a href="#">Property Guides</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="footer-links">
                            <ul class="list-unstyled">
                                <li class="list-title"><a href="#">Help</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Cancellation</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-lg-right ml-lg-2">
                            <form>
                                <div class="list-title">Subscribe</div>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="email" class="form-control form-control-lg subscribe-input"
                                        placeholder="Email">
                                    <div class="input-group-append ml-0">
                                        <button class="btn subscribe-button" type="button"><i
                                                class="fa fa-envelope"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="footer-payments"><span class="fa fa-cc-visa"></span> <span
                                    class="fa fa-cc-mastercard"></span> <span class="fa fa-cc-amex"></span> </div>
                        </div>
                    </div>

                </div>
                <div class="footer-credits d-lg-flex justify-content-lg-between align-items-center">
                    <div>Powered by <strong>uilove</strong></div>

                    <div>© 2018 UILOVE Inc. All Rights Reserved</div>
                </div>
            </div>
        </footer> -->
    </div>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>
    <script type="text/javascript">
        // Photoswipe

        var initPhotoSwipeFromDOM = function (gallerySelector) {
            var parseThumbnailElements = function (el) {
                console.log(el);
                var thumbElements = $(el).closest(main_gallery).find('figure'),
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for (var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes 
                    if (figureEl.nodeType !== 1) {
                        continue;
                    }

                    linkEl = figureEl.children[0]; // <a> element

                    size = linkEl.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };



                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }

                    if (linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    }

                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function (e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function (el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                });

                if (!clickedListItem) {
                    return;
                }
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = $(clickedListItem).closest(main_gallery).find('figure'),
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if (childNodes[i].nodeType !== 1) {
                        continue;
                    }

                    if (childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }
                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedGallery);
                }
                return false;
            };

            var openPhotoSwipe = function (index, galleryElement, disableAnimation) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {
                    history: false,
                    bgOpacity: 0.8,
                    loop: false,
                    barsSize: {
                        top: 0,
                        bottom: 'auto'
                    },

                    // define gallery index (for URL)
                    galleryUID: $(galleryElement).closest(main_gallery).attr('data-pswp-uid'),

                    getThumbBoundsFn: function (index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = document.querySelectorAll(main_gallery + ' img')[index],
                            //var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect();

                        return {
                            x: rect.left,
                            y: rect.top + pageYScroll,
                            w: rect.width
                        };
                    }

                };

                options.index = parseInt(index, 10);

                // exit if index not found
                if (isNaN(options.index)) {
                    return;
                }

                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
                gallery.shout('helloWorld', 'John' /* you may pass more arguments */);



                var totalItems = gallery.options.getNumItemsFn();

                function syncPhotoSwipeWithOwl() {
                    var currentIndex = gallery.getCurrentIndex();
                    galleryTop.slideTo(currentIndex);
                    if (currentIndex == (totalItems - 1)) {
                        $('.pswp__button--arrow--right').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--right').removeAttr('disabled');
                    }
                    if (currentIndex == 0) {
                        $('.pswp__button--arrow--left').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--left').removeAttr('disabled');
                    }
                };
                gallery.listen('afterChange', function () {
                    syncPhotoSwipeWithOwl();
                });
                syncPhotoSwipeWithOwl();
            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);

            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }
        };
        var main_gallery = '.gallery-top';
        var galleryTop = new Swiper(main_gallery, {
            spaceBetween: 10,
            lazy: {
                loadPrevNext: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
            , on: {
                init: function () {
                    initPhotoSwipeFromDOM(main_gallery);
                },
            }
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            centeredSlides: true,
            slidesPerView: 5,
            touchRatio: 0.2,
            slideToClickedSlide: true,
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;	
    </script>
</body>

	@include('footer')