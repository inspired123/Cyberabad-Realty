
@include('header')
<!-- Hero section -->
	<section class="hero-section set-bg"  data-setbg="{{url('/')}}/img/page-top-bg.jpg" style="height: 334px;">
		<div class="container hero-text text-white">
			
		</div>
		<div class="container" style="margin-top: -151px;">
		<div class="row" >
		</div>
     
	</section>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Agent Single</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{url('/')}}/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    
    <link rel="stylesheet" href="{{url('/')}}/animate.css">
    
    <link rel="stylesheet" href="{{url('/')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css6/bootstrap.css">
    <link rel="stylesheet" href="{{url('/')}}/menu.css">
     
    <link rel="stylesheet" href="{{url('/')}}/css6/styles.css">
    <link rel="stylesheet" id="color" href="{{url('/')}}/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body{
	overflow-x:hidden;
	}
	</style>
</head>

<body class="inner-pages agents homepage-4 det">
    <!-- Wrapper -->
    <div id="wrapper">
        

        <!-- START SECTION AGENTS DETAILS -->
        <section class="blog blog-section portfolio single-proper details mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <section class="headings-2 pt-0 hee">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            
                                        </div>
                                    </div>
                                </section>
                                <div class="news-item news-item-sm" style="margin:-52px 0px 53px  0px;">
                                    <a href="agent-details.html" class="news-img-link">
                                        <div class="news-item-img homes">
										<!--div class="homes-tag button alt featured">4 Listings</div-->
										
                                        
                                            <img class="resp-img" src="{{url('/')}}/img/s-1.jpg" alt="blog image" style="width:378px;">
                                        </div>
                                    </a>
                                    <div class="news-item-text" style="margin:14px 0px 0px 58px;">
                                        
                                      
                                        <a href="agent-details.html"><h3>{{$users->first}}</h3></a>
                                        <div class="the-agents" >
                                            <ul class="the-agents-details" >
                                                <li><a href="#"style="color:black;" >Project-Name: {{$users->	project_name}}</a></li>
                                                <li><a href="#" style="color:black;">Mobile: {{$users->phone}}</a></li>
                                                
                                                <li><a href="#" style="color:black;">Fax: {{$users->	construction_name}}</a></li>
                                                <li><a href="#" style="color:black;">Email: {{$users->email}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="properties-full-grid-2.html" class="news-link">View My Listings</a>
                                            <div class="admin">
                                                <p>Company Name</p>
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-pots py-0">
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">{{$users->about}}</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p>
                            </div>
                            <!-- START SIMILAR PROPERTIES -->
                            <section class="similar-property featured portfolio bshd p-0 bg-white" style="margin:25px 0px 0px 0px;">
                                <div class="container">
                                    <h5>COMPLETED PROJECTS</h5>
                                    <div class="row">
                                        <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                            <div class="project-single">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt featured">Featured</div>
                                                            <div class="homes-tag button alt sale">For Sale</div>
                                                            <div class="homes-price">$9,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-2.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-6 col-md-6 col-xs-12 people rent">
                                            <div class="project-single">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button sale rent">For Rent</div>
                                                            <div class="homes-price">$3,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-3.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item col-lg-6 col-md-6 col-xs-12 people sale no-pb">
                                            <div class="project-single no-mb">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt sale">For Sale</div>
                                                            <div class="homes-price">$9,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-1.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-6 col-md-6 it2 col-xs-12 web rent no-pb x2">
                                            <div class="project-single no-mb last">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt featured">Featured</div>
                                                            <div class="homes-tag button sale rent">For Rent</div>
                                                            <div class="homes-price">$3,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-2.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
							
							  <section class="similar-property featured portfolio bshd p-0 bg-white" style="margin:25px 0px 0px 0px;">
                                <div class="container">
                                    <h5>ON GOING  PROJECTS</h5>
                                    <div class="row">
                                        <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                            <div class="project-single">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt featured">Featured</div>
                                                            <div class="homes-tag button alt sale">For Sale</div>
                                                            <div class="homes-price">$9,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-2.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-6 col-md-6 col-xs-12 people rent">
                                            <div class="project-single">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button sale rent">For Rent</div>
                                                            <div class="homes-price">$3,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-3.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item col-lg-6 col-md-6 col-xs-12 people sale no-pb">
                                            <div class="project-single no-mb">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt sale">For Sale</div>
                                                            <div class="homes-price">$9,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-1.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-6 col-md-6 it2 col-xs-12 web rent no-pb x2">
                                            <div class="project-single no-mb last">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt featured">Featured</div>
                                                            <div class="homes-tag button sale rent">For Rent</div>
                                                            <div class="homes-price">$3,000/mo</div>
                                                            <img src="{{url('/')}}/img/s-2.jpg" alt="home-1" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="button-effect">
                                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                    </div>
                                                </div>
                                                <!-- homes content -->
                                                <div class="homes-content">
                                                    <!-- homes address -->
                                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                                    <p class="homes-address mb-3">
                                                        <a href="single-property-1.html">
                                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                        </a>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
							
							
							
                            
                            <!-- End Reviews -->
                            <!-- Star Add Review -->
                            <section class="single reviews leve-comments details">
                                <div id="add-review" class="add-review-box">
                                    <!-- Add Review -->
                                    <h3 class="listing-desc-headline margin-bottom-20 mb-4">Leave A Review For Builder</h3>
                                    <span class="leave-rating-title">Your rating for this listing</span>
                                    <!-- Rating / Upload Button -->
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <!-- Leave Rating -->
                                            <div class="clearfix"></div>
                                            <div class="leave-rating margin-bottom-30">
                                                <input type="radio" name="rating" id="rating-1" value="1" />
                                                <label for="rating-1" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-2" value="2" />
                                                <label for="rating-2" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-3" value="3" />
                                                <label for="rating-3" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-4" value="4" />
                                                <label for="rating-4" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-5" value="5" />
                                                <label for="rating-5" class="fa fa-star"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Uplaod Photos -->
                                            <div class="add-review-photos margin-bottom-30">
                                                <div class="photoUpload">
                                                    <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                    <input type="file" class="upload" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 data">
                                            <form action="#">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End Add Review -->
                        </div>
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            
                            
                            <div class="sidebar">
							 
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>ON GOING PROJECTS</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="s-3.jpg" alt="" style="height:200px;"></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main my-4">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="s-1.jpg" alt="" style="height:200px;"></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="s-2.jpg" alt="" style="height:200px;"></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									
                                    
                                     <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header mb-5">
                                            <h4>Ongoing Project Details</h4>
                                        </div>
                                        <div class="widget-boxed-body" style="margin: -64px 0px 0px 0px;">
                                            <div class="slick-lancers slick-initialized slick-slider">
                                                <div class="slick-list draggable" style="height: 227.25px;">
												<div class="slick-track" style="opacity: 1; width: 1818px; transform: translate3d(0px, 0px, 0px);"><div class="agents-grid mr-0 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 303px;" tabindex="0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container" tabindex="0">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{url('/')}}/img/s-1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
												
                                                </div></div></div>
                                                
                                                
                                                
                                                
                                                
                                           
                                        </div>
                                    </div>
									 <!--div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header mb-5">
                                            <h4>Completed Property Details</h4>
                                        </div>
                                        <div class="widget-boxed-body" style="margin: -64px 0px 0px 0px;">
                                            <div class="slick-lancers slick-initialized slick-slider">
                                                <div class="slick-list draggable" style="height: 227.25px;">
												<div class="slick-track" style="opacity: 1; width: 1818px; transform: translate3d(0px, 0px, 0px);"><div class="agents-grid mr-0 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 303px;" tabindex="0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container" tabindex="0">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="s-2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
												
                                                </div></div></div>
                                                
                                                
                                                
                                                
                                                
                                           
                                        </div>
									 </div-->
									 
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION AGENTS DETAILS -->

        
        


        
       

    </div>
    <!-- Wrapper / End -->
</body>

@include('footer')