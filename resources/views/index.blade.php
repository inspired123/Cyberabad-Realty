@include('header')
<link rel="stylesheet" href="cssr/owl.carousel.min.css" type="text/css">
	  <link rel="stylesheet" href="{{url('/')}}/css3/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/css3/style.css" type="text/css">
<style>
    <!-- premium services-->
/*premium services*/
.section-pad-t30 {
    padding-top: 40px;
    padding-bottom: 20px;
}
.our-services .single-services {
    border: 1px solid #dafcef;
    padding: 20px 0;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    transition: .4s;
}
.mb-30 {
    margin-bottom: 30px;
}
/*builders*/
.section.team {
  padding: 6rem 0;
  background: #f6f6f6;
}

.team .sec-title {
  margin-left: 1rem;
}

.team .sec-title h2 span {
  font-weight: 600;
  color: #111;
}

.team .sec-title h2 {
  color: #274abb;
  margin-bottom: .5rem;
}

.team .team-all {
  padding: 0;
  margin: 0;
}

.team-wrap {
  padding-bottom: 80px;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.team-img {
  position: relative;
  z-index: 9;
}

.team-img img {
  width: 100%;
}

.team-content {
  height: 80px;
  width: 100%;
  bottom: 0;
  border: 1px solid #ccc;
  position: absolute;
  text-align: center;
  overflow: hidden;
  -webkit-transition: all 0.6s;
  transition: all 0.6s;
  z-index: 9;
  background: #fff;
}

.team-wrap:hover .team-content {
  height: 150px;
}

.team-info {
  background: #fff;
  padding: 20px;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.team-wrap:hover .team-content .team-info {
  background: #fff;
}

.team-content h3 {
  text-transform: capitalize;
  margin-bottom: 0px;
  color: #444;
  font-size: 16px;
}

.team-content p {
  color: #666;
  font-style: italic;
  margin-bottom: 10px;
  font-size: 15px;
  font-weight: 400;
  letter-spacing: 1px;
}

.team-content ul {
  opacity: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: opacity 0.4s, -webkit-transform 0.6s;
  transition: opacity 0.4s, -webkit-transform 0.6s;
  transition: transform 0.6s, opacity 0.4s;
  transition: transform 0.6s, opacity 0.4s, -webkit-transform 0.6s;
}

.team-wrap:hover .team-content ul {
  opacity: 1;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  -webkit-transition: opacity 0.4s, -webkit-transform 0.6s;
  transition: opacity 0.4s, -webkit-transform 0.6s;
  transition: transform 0.6s, opacity 0.4s;
  transition: transform 0.6s, opacity 0.4s, -webkit-transform 0.6s;
  margin-bottom: 10px;
}

.team-content ul li {
  opacity: 0;
  padding: .3rem 0;
  -webkit-transform: translateY(40px);
          transform: translateY(40px);
  -webkit-transition: opacity 0.1s, -webkit-transform 0.6s;
  transition: opacity 0.1s, -webkit-transform 0.6s;
  transition: transform 0.6s, opacity 0.1s;
  transition: transform 0.6s, opacity 0.1s, -webkit-transform 0.6s;
  display: inline-block;
}

.team-wrap:hover .team-content ul li {
  opacity: 1;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}

.team-wrap:hover .team-content ul li:nth-child(1) {
  -webkit-transition-delay: 100ms;
          transition-delay: 100ms;
}

.team-wrap:hover .team-content ul li:nth-child(2) {
  -webkit-transition-delay: 200ms;
          transition-delay: 200ms;
}

.team-wrap:hover .team-content ul li:nth-child(3) {
  -webkit-transition-delay: 300ms;
          transition-delay: 300ms;
}

.team-wrap:hover .team-content ul li:nth-child(4) {
  -webkit-transition-delay: 400ms;
          transition-delay: 400ms;
}

.team-wrap:hover .team-content ul li:nth-child(5) {
  -webkit-transition-delay: 500ms;
          transition-delay: 500ms;
}

.team-socials ul li a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.team-content span a {
  color: #000;
  -webkit-transition: all 1s;
  transition: all 1s;
  position: relative;
  text-transform: uppercase;
  font-size: 12px;
}

.team-wrap:hover .team-content span a {
  bottom: 6px;
}

.team-content span a:hover {
  color: #121B22;
}

.team .team-pro ul {
  padding: 0;
  margin: 0;
}

.team .team-pro ul li {
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.team .team-pro .fa {
  font-size: 1.2rem;
  text-align: center;
  border: 1px solid #fff;
  border-radius: 5px;
  color: #fff;
  margin: 0 .5rem;
  width: 2.1rem;
  height: 2.1rem;
  line-height: 2.1rem;
}

.team .team-all.padding {
  padding-bottom: 2.5rem;
}

@media screen and (max-width: 991px) {
  .team .team-pro {
    padding-bottom: 2.5rem;
  }

  .team .team-pro:last-child {
    padding-bottom: 0px;
  }

  .team .pb-none {
    padding-bottom: 0px;
  }

  .team .team-all.padding {
    padding-bottom: 0px;
  }
}
@media screen and (max-width: 767px) {
  .team .pb-none {
    padding-bottom: 2.5rem;
  }
}
.team .team-pro .fa.fa-facebook {
  background: #3b5998;
}

.team .team-pro .fa.fa-twitter {
  background: #1da1f2;
}

.team .team-pro .fa.fa-instagram {
  background: #e1306c;
}
/*endbuilders*/
/*agents*/
.agent-section {
background: #F2F4F5;
padding-bottom: 55px;
overflow: hidden;
}
.agent-section.about-page {
background: #ffffff;
}
.agent-section.about-page .agent-carousel.owl-carousel .owl-nav button {
color: #2cbdb8;
border-radius: 0;
border-color: #e5e5e5;
}
.agent-section .section-title {
margin-bottom: 30px;
}
.agent-carousel.owl-carousel .owl-nav button[type=button] {
width: 26px;
height: 60px;
border: 2px solid #D9DBDC;
display: inline-block;
font-size: 18px;
color: #aaaab3;
border-radius: 2px;
position: absolute;
left: -42px;
top: 50%;
-webkit-transform: translateY(-30px);
-ms-transform: translateY(-30px);
transform: translateY(-30px);
-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
transition: all 0.4s;
}
.agent-carousel.owl-carousel .owl-nav button[type=button].owl-next {
left: auto;
right: -42px;
}
.agent-carousel.owl-carousel .owl-nav button[type=button]:hover {
background: #707079;
color: #ffffff;
border-color: #707079;
}
.agent-carousel .owl-stage-outer {
padding-bottom: 45px;
padding-top: 20px;
}
.agent-carousel.owl-carousel .owl-item img {
display: inline-block;
}
.agent-carousel .col-lg-3 {
max-width: 100%;
}
.agent-carousel .single-agent {
text-align: center;
background: #ffffff;
-webkit-box-shadow: 0 8px 15px 5px rgba(12, 35, 34, 0.05);
box-shadow: 0 8px 15px 5px rgba(12, 35, 34, 0.05);
padding: 40px 0;
-webkit-transition: all 0.3s;
-o-transition: all 0.3s;
transition: all 0.3s;
}
.agent-carousel .single-agent:hover {
-webkit-box-shadow: 0 4px 15px rgba(12, 35, 34, 0.2);
box-shadow: 0 4px 15px rgba(12, 35, 34, 0.2);
}
.agent-carousel .single-agent:hover .sa-pic .hover-social a.twitter {
right: -15px;
opacity: 1;
visibility: visible;
}
.agent-carousel .single-agent:hover .sa-pic .hover-social a.instagram {
right: -15px;
opacity: 1;
visibility: visible;
}
.agent-carousel .single-agent:hover .sa-pic .hover-social a.facebook {
bottom: 6px;
opacity: 1;
visibility: visible;
}
.agent-carousel .single-agent .sa-pic {
position: relative;
width: 200px;
height: 200px;
margin: 0 auto;
}
.agent-carousel .single-agent .sa-pic img {
height: 200px;
width: 200px;
border-radius: 50%;
}
.agent-carousel .single-agent .sa-pic .hover-social {
position: absolute;
right: 0;
bottom: 0;
}
.agent-carousel .single-agent .sa-pic .hover-social a {
display: inline-block;
color: #ffffff;
font-size: 18px;
height: 40px;
width: 40px;
line-height: 40px;
text-align: center;
background: #222222;
border-radius: 50%;
}
.agent-carousel .single-agent .sa-pic .hover-social a.twitter {
background: #29BFE8;
position: absolute;
right: -40px;
bottom: 100px;
-webkit-transition: all 0.2s ease 0.2s;
-o-transition: all 0.2s ease 0.2s;
transition: all 0.2s ease 0.2s;
opacity: 0;
visibility: hidden;
}
.agent-carousel .single-agent .sa-pic .hover-social a.instagram {
background: #F74D91;
position: absolute;
right: -40px;
bottom: 50px;
-webkit-transition: all 0.4s ease 0.4s;
-o-transition: all 0.4s ease 0.4s;
transition: all 0.4s ease 0.4s;
opacity: 0;
visibility: hidden;
}
.agent-carousel .single-agent .sa-pic .hover-social a.facebook {
background: #3973E8;
position: absolute;
right: 15px;
bottom: -4px;
-webkit-transition: all 0.6s ease 0.6s;
-o-transition: all 0.6s ease 0.6s;
transition: all 0.6s ease 0.6s;
opacity: 0;
visibility: hidden;
}
.agent-carousel .single-agent h5 {
font-size: 20px;
color: #19191a;
font-weight: 600;
margin-top: 25px;
}
.agent-carousel .single-agent h5 span {
display: block;
font-size: 14px;
color: #aaaab3;
font-weight: 400;
margin-top: 12px;
}
/*endagents*/
</style>
<!-- Search Form-2 -->
<style type="text/css">#section2,#section4{background:#fff;padding:50px 25px}#section3{padding:4% 0;margin-top:0}.two_pro .top img{height:250px!important}.category_block img{width:100%;height:150px}.category_block{width:100%;text-align:center;box-shadow:0 0 3px #ccc!important}.category_block:hover{box-shadow: 1px 4px 8px #d8d8d8ba !important}.category_block h3{font-size:16px;padding:10px}.section_heading::after{display:block;width:192px;border-bottom:2px solid #26baee;margin:auto;height:4px;border-top:1px solid #26baee}#ftco-nav .nav-item a,#ftco-nav .nav-item{font-size:12px!important;font-weight:400!important;color:#383838!important;letter-spacing:.3px}.section_heading{opacity:1;color:#006fb7;font-size:27px;text-transform:capitalize;text-align:center;margin-bottom:29px;margin-top:-10px;font-weight:500}.recommended_pro:hover{box-shadow:1px 4px 10px #9f9e9e}.recommended_pro .top{width:100%;position:relative;background:none!important;border:none!important;padding:0}.recommended_pro .top .loc{position:absolute;bottom:0;padding:10px;background:
    #000000b3;width:100%;max-width:30%;text-align:center;font-size:14px}.recommended_pro .top img{width:100%;position:relative;height:150px;border-top-left-radius:8px;border-top-right-radius:8px}.recommended_pro{margin:5px 0 15px;border-radius:8px}.recommended_pro .bottom{width:100%;background:#fff;padding:15px 10px 10px;border-bottom-left-radius:8px;border-bottom-right-radius:8px}.recommended_pro .bottom p{margin:0;font-size:14px;color:#7c7a7a}.btn-contact{background:red;color:#fff;padding:1px 10px;font-size:14px;border-radius:0;margin:2px 0}.recent_property .right h5 strong{color:red;font-size:14px}.recommended_pro .bottom h4{font-size:14px;margin-bottom:15px;text-transform:capitalize;font-weight:bold;color:#006fb7}.recommended_pro.recent_pro .top .loc{max-width:50%;padding:4px;font-size:12px}.recommended_pro.recent_pro .bottom{box-shadow:0 1px 4px #e6e5e5;border-bottom-left-radius:8px;border-bottom-right-radius:8px}.recent_pro .bottom{height:186px;position:relative}.recent_pro .bottom .price{position:absolute;bottom:10px}.recommended_pro{margin:5px 0 15px;box-shadow:0 3px 6px rgba(0,0,0,.16) , 0 3px 6px rgba(0,0,0,.23)!important}.recommended_pro.recent_pro .bottom h4{margin:2px 0}.recommended_pro.recent_pro .bottom p{font-size:12px}.recent_property .left{float:left;width:35%}.recent_property .right{float:left;width:65%;padding:5px 10px}.recent_property .left img{width:100%;height:150px;border-top-left-radius:8px;border-bottom-left-radius:8px}.recent_property .right h4{font-size:14px;margin:0;text-transform:capitalize;font-weight:bold;color:#006fb7}.recent_property .right h5{font-size:16px;margin:2px 0}.recent_property .right p{font-size:12px;margin:2px 0;color:#767373}.recent_property{box-shadow:1px 1px 4px #ccc;min-height:150px;border-radius:8px}#section5{background-repeat:no-repeat;background-size:cover;background-position:center;position:relative;padding:30px 15px!important}#section5::after{content:'';position:absolute;top:0;left:0;right:0;bottom:0;display:block;background:#eee;z-index:0}.slide_next,.slide_prev,.slide_next:hover,.slide_prev:hover{font-size:44px;align-items:center;justify-content:center;color:#fff;text-decoration:none;display:none}.swiper-container{padding:0 13px;margin:0 -20px}.swiper-container:hover .slide_next,.swiper-container:hover .slide_prev{display:flex}.swiper-container1:hover .slide_next,.swiper-container1:hover .slide_prev{display:flex}.view_all{display:flex;align-items:center;justify-content:center;font-size:24px;color:#0168be}.view_all1{min-height:337px;background:#fff}.vedios_con{position:relative;z-index:1;padding:50px 0}.videos img{width:100%;height:230px;border-radius:8px;border:none;padding:0}.videos h5{padding:15px 0;color:#ff8f56;font-weight:bold;font-size:16px}.videos{width:100%;margin-bottom:20px;display:block;text-align:center;text-decoration:none!important;max-width:250px;position:relative}.videos .fa-play{position:absolute;top:36%;font-size:25px;color: #ffffffc7;left:42%;border:2px solid #fff;width:50px;height:50px;border-radius:50%;padding:12px 16px;background: #000000b5}.video_heading{color:#fff;font-size:33px;text-align:center;margin-bottom:21px;margin-top:-21px}#section2 a{text-decoration:none!important}.ftco-footer{font-size:16px;background:#000;padding:3em 0 0}#search_form1{display:block}#search_form2{display:none}@media only screen and (max-width:600px){#search_form1{display:none}#search_form2{display:block}.container{max-width:99%!important}.hide_txt{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}.padd-1{padding:4px!important}#section2,#section4,#section3,#section5{background:#fff;padding:30px 0}.category_block img{width:100%;height:100px}.category_block h3{font-size:12px;padding:10px}.section_heading{font-size:14px;color:#a25;font-weight:bold;margin-bottom:15px}.section_heading::after{width:120px}#section4 .col-6{padding:0 5px}.recent_property{min-height:80px}.recent_property .left img{height:80px}.recent_property .left .views{left:8px;font-size:8px}.recent_property .right h4{font-size:10px}.recent_property .right p{font-size:8px;display:none}.recent_property .right h5{font-size:12px;margin:2px 0}.recent_property .right h5 strong{font-size:10px}.view_all{font-size:15px}.videos{max-width:90%;margin-left:8%}.section_tabs ul li a{padding:6px 6px!important;display:inline-block!important;color:#fff!important;margin:4px 2px!important;width:88px!important;text-align:center;text-decoration:none;font-size:14px!important;border-radius:8px!important}#section2{padding:20px 0!important;position:unset!important}.cat h3{font-size:12px!important}}.free{background:#ffbf00;padding:0 9px;border-radius:5px;font-weight:700}.left .views{left:22px}.right .views{position:inherit;min-width:90px;width:100%;display:inline}.section_tabs ul li a{padding:5px 14px;display:inline-block;background:#000;color:#fff;margin:5px;text-align:center;text-decoration:none;border-radius:8px!important;font-size:18px}.section_tabs ul li a.active,.section_tabs ul li a:hover,.section_tabs ul li a.show{background:red}.section_tabs ul li{display:inline}.section_tabs ul{text-align:center;margin:20px auto;border:none;display:block}#section2{padding:0;width:100%;background:#e7717d}.cat h3{float:left;font-size:16px;color:#000;padding-left:15px}@media only screen and (max-width:600px){.cat h3{font-size:12px!important}}.swiper-wrapper{width:100%!important}.cat img{width:25%;float:left}.cat a{background:#fff;display:flex;align-items:center;height:80px;box-shadow:0 3px 6px rgba(0,0,0,.16) , 0 3px 6px rgba(0,0,0,.23)!important;margin:10px 0;padding:23px;border-radius:6px}.cat a:hover{box-shadow:0 3px 6px rgba(0,0,0,.16) , 0 3px 6px rgba(0,0,0,.23)!important}.head_txt{color:#000;letter-spacing:.3px;font-size:14px;font-weight:500}.top-right{position:absolute;top:8px;right:16px}.hed_btn{font-size:15px;background:#dc3545;padding:8px;border-radius:5px;color:#fff;letter-spacing:.3px}.my_menu a{background:#f8f9fa;border:1px solid #fff;align-items:center;padding:1% 2% 1% 1%!important;color:#fe031b!important;text-decoration:none!important;border-radius:5px!important;font-size:15px!important;margin:1%!important;letter-spacing:.3px!important}.recommended_pro:hover{box-shadow:1px 4px 10px #9f9e9e!important}.cat:hover{box-shadow:1px 4px 10px #9f9e9e!important}.item:hover{box-shadow:1px 4px 10px #9f9e9e!important}.prop_type{width:20%;display:inline-block;color:#6c758d!important;font-size:1.10rem}.form{max-width:60%!important}.form input{width:60%!important}.like{cursor:pointer;color:#fff}.liked{color:red!important}.search h1{text-align:center;color:#fff;font-weight:600}.bmenu a{text-align:center;color:#fff;text-decoration:underline;margin-right:7px}.bmenu a:hover{background-color:#08c}.bmenu{text-align:center;margin-bottom:10px}.search_main::before{content:"";position:absolute;background: #00000078;top:0;right:0;bottom:0;left:0;z-index:1}.bg_sec{background:#e4e4e4;padding:3% 0}.side_sticky a{display:block;padding:5px 10px;font-size:18px;color:#fff;text-align:center;border-bottom: 1px solid #ffffff6b}.side_sticky{position:fixed;z-index:100;background:#398fa7;color:#fff;right:0;top:30%}.views{z-index:2!important}</style>
<!-- end Search Form-2 -->
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="">
		
		
		
			<div id="demo" class="carousel slide" data-ride="carousel">
					
					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>
					
					<!-- The slideshow -->
					<div class="carousel-inner" style="height:650px">
					    <div class="carousel-item active">
							<img src="img/Cyberabad-Realty-820 x 312--3.png" alt="" style="height:650px;width:1349px;">
						</div>
						
						
						{{ csrf_field() }}
					<div class="carousel-item" >
				
				<div id="load-data20">
				    
				</div>
			 	
				
			</div>
						
					</div>
					
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
			</div>
	</section>
		<section>
			<div class="container" style="margin-top: -300px;">
				
				<div class="container ">
					<h1 style="color:white; text-align:center;">Hyderabad's No.1 Property Site</h1>
                    <div class="col-sm-8 offset-2 col-12" style="padding-top: 50px;">
                        <form action='#' method='post' id='search_form1'>
                            <div class="input-group">
                                <select id="property_type" name="property_type"  style="font-family: Sans-Serif !important; font-size: 13px; font-weight: 500; text-align: center; width: 20%;
								height: auto;
								border: none;
								padding: 9px;
								color: #787878;
								border-top-left-radius: 5px;
								border-bottom-left-radius: 5px;
								background-color: #006FB7;
								color: white;">
                                     <option value="" selected="selected">Property Type</option>
                                    <option value="plot">Plot</option>
                                    <option value="villa">Villa</option>
									<option value="farmlands">Farm Land (AGRICULTURAL)</option>
                                    <option value="independent">Independent House</option>
                                    <option value="farmhouse">Farm House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="office">Office</option>
                                    <option value="godown">Godown</option>
                                    <option value="sheds">Sheds</option>
                                    <option value="industrialproperties">Industrial Properties</option>
									<option value="warehouse">warehouse</option>
                                    
                                    <option value="developmentland">Development Land</option>
								</select>
                                <input id="search" type="text" placeholder="Search address, area, zipcode, city etc.." name="search" style="font-family: Sans-Serif !important;padding: 5px 256px 5px 7px; font-size: 14px; font-weight: 500; flex: 1 1 auto; padding: 7px; padding-left: 12px;  border: none;color:#787878;">
                                
                                <button type="button" style="padding: 7px; font-family: Sans-Serif !important; font-size: 18px; font-weight: 500; background: white; border:none; border-top-right-radius: 5px; border-bottom-right-radius: 5px;" onclick="search_properties()"><i class="fa fa-search mr-4 ml-4"></i></button>
							</div>
						</form>
						<!-- Search Form-2 -->
						<form action="#" method="post" id="search_form2" style="margin: -259px 12px 20px -82px;">
                            <div class="form-group">
                                    <select id="property_type" name="property_type" style="
                                    font-family: Sans-Serif !important;
    font-size: 13px;
    font-weight: 500;
    text-align: center;
    width: 100%;
    height: auto;
    border: none;
    padding: 7px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    background-color: #006FB7;
    color: white;">
                                    <option disabled="disabled" value="" selected="selected">Property Type</option>
                                    <option value="plot">Plot</option>
                                    <option value="villa">Villa</option>
                                    <option value="independent house">Independent House</option>
                                    <option value="farm house">Farm House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="office">Office</option>
                                    <option value="godown">Godown</option>
                                    <option value="sheds">Sheds</option>
                                    <option value="industrial properties">Industrial Properties</option>
                                    <option value="farm land">Farm Land (AGRICULTURAL)</option>
                                    <option value="development land">Development Land</option>
                                </select>
                            </div>
                            <div class="form-group">
                            
                                <input type="text" id="search"  name="search" placeholder="Search address, area, zipcode, city etc.." name="pac-input" style="font-family: Sans-Serif !important; font-size: 14px; font-weight: 500; flex: 1 1 auto; padding: 7px; padding-left: 12px;  border: none;color:#787878;width:100%;">
                                <input type="hidden" name="lat" value="">
                                <input type="hidden" name="lng" value="">
                                <input type="hidden" name="swlat" value="">
                                <input type="hidden" name="swlng" value="">
                                <input type="hidden" name="nelat" value="">
                                <input type="hidden" name="nelng" value="">
                                <input type="hidden" name="location_type" value="">
                                <input type="hidden" name="country_sn" value="">
                                <input type="hidden" name="county_sn" value="">
                                <input type="hidden" name="adm_lvl_1_sn" value="">
                              
                            </div>
                            <div claa="form-group">
                                  <button type="submit"  class="btn btn-danger btn-block btn-sm" onclick="search_properties()">Search</button>
                            </div>
                        </form>
                        <!-- Search Form-2 -->
						<span class="text-danger" ><strong id="property_type-error"></strong></span>
						
					</div>
				</div>
			</div>
			</section>
	
	<!-- Hero section end -->

<br>
<br>
<br>
<br>
</div>

	
 <section class="property-details-section spad" id="search_results" style="display:none;" >
        <div class="container">
            <div class="row">
			 <div class="col-lg-3" style="border:1px solid black; border-radius: 12px;">
                    <div class="property-sidebar">
                        <h4>Search Property</h4>
                        <form action="#" class="sidebar-search">
                            <div class="sidebar-btn">
                                <div class="bt-item">
                                    <input type="radio" name="pfor" id="st-buy" checked="" value="1">
                                    <label for="st-buy" style="border-radius: 13px;">Buy</label>
                                </div>
                                <div class="bt-item">
                                    <input type="radio" name="pfor" id="st-rent" value="2">
                                    <label for="st-rent" style="border-radius: 13px; padding-left:10px;">Rent</label>
                                </div>

                            </div>
               
							<div class="nice-select" tabindex="0"  >
							<span class="current">Location</span>
							<ul class="list" id="search_location">
							<li data-value="" class="option selected">Location</li>
							        @php
    $locations=\App\Locations::where(['status' => 1])->get();
    @endphp
    @foreach($locations as $lo)
							<li data-value="{{ $lo->id}}" class="option">{{ $lo->name}}</li>
							   
							           @endforeach
							                   </ul>
			</div>
<input type="hidden" name="search_location_value" id="search_location_value" />
							<div class="nice-select" tabindex="0" >
							<span class="current">Property Type</span>
							<ul class="list" id="search_property">
							<li data-value="" class="option selected">Property Type</li>
							<li data-value="villa" class="option">Villas</li>
							<li data-value="farmlands" class="option">Farmlands/AgriLands</li>
                            <li data-value="independent" class="option">Independent House</li>
							<li data-value="apartment" class="option">Apartments/Flats</li>
							<li data-value="farmhouse" class="option">FarmHouse</li>							
							<li data-value="plot" class="option">Plots</li>
							<li data-value="warehouse" class="option">WareHouses</li>
							</ul></div>
							<input type="hidden" name="search_property_value" id="search_property_value" />
                            <div class="nice-select" tabindex="0" >
							<span class="current">No of Bedroom</span>
							<ul class="list" id="search_bedrooms">
							<li data-value="" class="option selected">No of Bedroom</li>
							<li data-value="1" class="option">1</li>
							<li data-value="2" class="option">2</li>
							<li data-value="3" class="option">3</li>
							<li data-value="4" class="option">4</li>
							<li data-value="5" class="option">5</li>
							<li data-value="6" class="option">6</li>
							<li data-value="7" class="option">7</li>
							<li data-value="8" class="option">8</li>
							</ul>
							</div>
							<input type="hidden" name="search_bedrooms_value" id="search_bedrooms_value" />

                          <div class="nice-select" tabindex="0" >
						  <span class="current">No of Bathrooms</span>
						  <ul class="list" id="search_bathrooms">
						  <li data-value="" class="option selected">No of Bathrooms</li>
                            <li data-value="1" class="option">1</li>
							<li data-value="2" class="option">2</li>
							<li data-value="3" class="option">3</li>
							<li data-value="4" class="option">4</li>
							<li data-value="5" class="option">5</li>
							<li data-value="6" class="option">6</li>

						  </ul></div>
						  							<input type="hidden" name="search_bathrooms_value" id="search_bathrooms_value" />

                         <div class="nice-select" tabindex="0" >
						 <span class="current">No of Guest Rooms</span>
						 <ul class="list" id="search_guest">
						 <li data-value="" class="option selected">No of Guest Rooms</li>
						 <li data-value="1" class="option">1</li>
							<li data-value="2" class="option">2</li>
							<li data-value="3" class="option">3</li>
						 </ul>
						 </div>
						 						  							<input type="hidden" name="search_guest_value" id="search_guest_value" />

							<div class="nice-select" tabindex="0" >
							<span class="current">Year Built</span>
							<ul class="list" id="search_year">
							<li data-value="" class="option selected">Year Built</li>
							<li data-value="2016" class="option">2016</li>
							<li data-value="2017" class="option">2017</li>
							<li data-value="2018" class="option">2018</li>
							<li data-value="2019" class="option">2019</li>
							<li data-value="2020" class="option">2020</li>
							</ul></div>
							

							<input type="hidden" name="search_year_value" id="search_year_value" />

					
																<div class="nice-select" tabindex="0" >
							<span class="current">Size in sqft</span>
							<ul class="list" id="search_size">
							<li data-value="" class="option selected">Size in sqft</li>
							<li data-value="1000,2000" class="option">1000 - 2000</li>
							<li data-value="2000,3000" class="option">2000 - 3000</li>
							<li data-value="3000,4000" class="option">3000 - 4000</li>
							<li data-value="4000,5000" class="option">4000 - 5000</li>
							<li data-value="5000,6000" class="option">5000 - 6000</li>
							</ul></div>
										
																	<input type="hidden" name="search_size_value" id="search_size_value" />

										

						<div class="nice-select" tabindex="0" >
							<span class="current">Price</span>
							<ul class="list" id="search_price">
							<li data-value="" class="option selected">Price</li>
							<li data-value="0,100000" class="option">0 - 100000</li>
							<li data-value="100000,1000000" class="option">100000 - 1000000</li>
							<li data-value="1000000,2000000" class="option">1000000 - 2000000</li>
							<li data-value="2000000,3000000" class="option">2000000 - 3000000</li>
							<li data-value="3000000,4000000" class="option">3000000 - 4000000</li>
							</ul></div>
										
																	<input type="hidden" name="search_price_value" id="search_price_value" />

					
                            <!--<div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRangeP">Size:</label>
                                    <input type="text" id="roomsizeRangeP">
                                </div>
                                <div id="roomsize-range-P" class="slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 14.2857%; width: 42.8571%;">
								</div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 14.2857%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 57.1429%;"></span>
								</div>
                            </div>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRangeP">Price:</label>
                                    <input type="text" id="priceRangeP" readonly="">
                                </div>
                                <div id="price-range-P" class="slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0.003125%; width: 62.4969%;">
								</div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0.003125%;">
								</span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 62.5%;">
								</span>
								</div>
                            </div>-->
                            <button type="button" style="border-radius: 13px;" class="search-btn" id="advance_search" onclick="advance_search_new()">Search Property</button>
                        </form>
						<div class="best-agents">
                            <h4>Featured properties</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/Untitled design.png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Renovated Apartment</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/Untitled design (1).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Villa</h5>
                                   
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/Untitled design (2).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>IndependentHouse</h5>
                                   
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
						<div class="best-agents">
                            <h4>Top Properties</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/Untitled design (3).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Villa</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/Untitled design (4).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>FarmHouse</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/Untitled design (5).png" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>FarmLand</h5>
                                    
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
                        <div class="best-agents">
                            <h4>Best Agents</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/best-agent-1.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Lester Bradley</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/best-agent-2.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Janie Blair</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                
                                
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" >
                    <div class="pd-details-text">
                        <div class="pd-details-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-send"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-print"></i></a>
                            <a href="#"><i class="fa fa-cloud-download"></i></a>
                        </div>
						<div class="row" style="border:1px solid black; border-radius: 12px;padding: 11px 6px 6px 7px;margin: 0px 0px 6px -10px;">
						
						            <div class="col-lg-3 col-md-3">
									<p><span id="count"></span> Search results</p>
									</div>
									<!--div class="col-lg-3 col-md-3">
									<select>
									
                                <option value="" >status</option>
								<option value="">Sale</option>
								<option value="">Rent</option>
								
                            </select>
									</div-->
									<!--div class="col-lg- col-md-3">
									<select>
                                <option value="" style="border-radius: 13px;">Featured</option>
								<option value="">TopRating</option>
								<option value="">Average</option>
                            </select>
									</div-->
									<!--div class="col-lg-3 col-md-3">
									<select>
                                <option value="" style="border-radius: 13px;">Transaction</option>
								<option value="">New</option>
								<option value="">Old</option>
                            </select>
									</div-->
								
						
						
						
						
						
						</div>
				    </div>
						
		{{ csrf_field() }}
			<div class="row" id="search-data">
				
				
				
			</div>
			
		
  </div>
                        

</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>
	<!-- NEW Properties section -->
<section class="space-pb" style="margin-top: 88px;">
  <div class="container">
<div class="container">
		<section class="space-pb">
  <div class="container">
    
     
        <div class="section-title text-center">
          <h2 style="margin: -13px 0px 0px 0px;">Newly listed properties</h2>
          <p>Find your dream home from our Newly added properties</p>
        </div>
      </div>
    </div>
{{ csrf_field() }}
			<div class="row" id="load-data19">
				
				
				
		
  </div>
</section>
</div>
<br>
<br>
	<!-- New Properties section end -->
	<!-- Properties section -->
	<section class="properties-section spad" >
		<div class="container">
			<div class="section-title text-center">
				<h3 id="VILLA_PROPERTIES"> Top Villa Properties In Hyderabad</h3>
				<p>Discover how much the latest properties have been sold for</p>
			</div>
			
			{{ csrf_field() }}
			<div class="row" id="load-data11">
				
				
				
			</div>
			<!--<div class="row">-->
			<!--	<div class="col-md-6" >-->
			<!--		<div class="propertie-item set-bg"  data-setbg="img/1563269176_EIPL-Group-La-Paloma-s1.jpg">-->
			<!--			<div class="sale-notic">FOR SALE</div>-->
			<!--			<div class="propertie-info text-white">-->
			<!--				<div class="info-warp">-->
			<!--					<a href="single-list.html">176 Kingsberry, Dr Anderson</a>-->
			<!--					<p><i class="fa fa-map-marker"></i> Madhapur, NY 14626</p>-->
			<!--				</div>-->
			<!--				<div class="price">$1,777,000</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-md-6">-->
			<!--		<div class="propertie-item set-bg" data-setbg="img/1598361356_1593580194_vessella_group-s1.jpg">-->
			<!--			<div class="rent-notic">FOR Rent</div>-->
			<!--			<div class="propertie-info text-white">-->
			<!--				<div class="info-warp">-->
			<!--					<h5>45 Lianne Dr, Greece Street</h5>-->
			<!--					<p><i class="fa fa-map-marker"></i> Hitech, VA 23441</p>-->
			<!--				</div>-->
			<!--				<div class="price">$1255/month</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-md-6">-->
			<!--		<div class="propertie-item set-bg" data-setbg="img/1593576574_NCC-urban-Gardenia-s1.jpg">-->
			<!--			<div class="sale-notic">FOR SALE</div>-->
			<!--			<div class="propertie-info text-white">-->
			<!--				<div class="info-warp">-->
			<!--					<h5>6101 Aqua Ave Apt 603</h5>-->
			<!--					<p><i class="fa fa-map-marker"></i>Kukatpally, FL 33141</p>-->
			<!--				</div>-->
			<!--				<div class="price">$150,000</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-md-6">-->
			<!--		<div class="propertie-item set-bg" data-setbg="img/1593177641_APR-Group_Gallery_Image-s1.jpg">-->
			<!--			<div class="rent-notic">FOR Rent</div>-->
			<!--			<div class="propertie-info text-white">-->
			<!--				<div class="info-warp">-->
			<!--					<h5>339 N Oakhurst Dr Apt 303</h5>-->
			<!--					<p><i class="fa fa-map-marker"></i>Gachibowli, CA 90210</p>-->
			<!--				</div>-->
			<!--				<div class="price">$3000/month</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-md-6">-->
			<!--		<div class="propertie-item set-bg" data-setbg="img/1589533199_1-s1.jpg">-->
			<!--			<div class="rent-notic">FOR Rent</div>-->
			<!--			<div class="propertie-info text-white">-->
			<!--				<div class="info-warp">-->
			<!--					<h5>339 N Oakhurst Dr Apt 303</h5>-->
			<!--					<p><i class="fa fa-map-marker"></i>Gachibowli, CA 90210</p>-->
			<!--				</div>-->
			<!--				<div class="price">$3000/month</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-md-6">-->
			<!--		<div class="propertie-item set-bg" data-setbg="img/1563269581_Sir-Sai-Tirumala-Cons-Pvt-Ltd-s1.jpg">-->
					
			<!--			<div class="sale-notic">FOR SALE</div>-->
			<!--			<div class="propertie-info text-white">-->
			<!--				<div class="info-warp">-->
			<!--					<h5>176 Kingsberry, Dr Anderson</h5>-->
			<!--					<p><i class="fa fa-map-marker"></i> Madhapur, NY 14626</p>-->
			<!--				</div>-->
			<!--				<div class="price">$1,777,000</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
		</div>
	
	</section>
	<!-- Properties section end -->

      <section class="properties-section spad" style="margin-top:-246px;">
		<div class="container">
			<div class="section-title text-center">
				<h3 id="INDEPENDENT"> Independent House Projects In Hyderabad</h3>
				<p>Discover how much the latest properties have been sold for</p>
			</div>
			
				{{ csrf_field() }}
					<div class="row" id="load-data12">
				
			 	
				
			</div>
		
	</section>
	<!--<section class="properties-section spad" style="margin-top:-242px;">-->
	<!--	<div class="container">-->
	<!--		<div class="section-title text-center">-->
	<!--			<h3>Top Apartments Projects In Hyderabad</h3>-->
	<!--			<p>Discover how much the latest properties have been sold for</p>-->
	<!--		</div>-->
	<!--		{{ csrf_field() }}-->
	<!--				<div class="row" id="load-data13"></div>-->
				
				
				
	<!--		</div>-->
		
	<!--</section>-->                                
	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/service.jpg" alt="">
				</div>
				<div class="col-lg-5" style="margin: -100px 0px 85px 93px;">
					<div class="section-title text-white">
						<h3>OUR SERVICES</h3>
						<p>We provide the perfect service for </p>
					</div>
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Consultant Service</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Properties Management</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Renting and Selling</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->


	<!-- feature section -->
		<section class="feature-section spad" style="margin-top:-150px;">
		<div class="container">
			<div class="section-title text-center">
				<h3 id="FARM">Farm Properties</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			{{ csrf_field() }}
			<div class="row" id="load-data">
				
				
				
			</div>

		</div>
		
		
		
	</section>
	<!-- feature section end -->
	
	
	
	
	
	
	
	
	
	
	<!-- my services  section -->
<!--	<section class="feature-section spad" style="margin-top:-150px;">-->
<!--		<div class="container">-->
<!--			<div class="section-title text-center">-->
<!--				<h3>Services</h3>-->
				
<!--			</div>-->
<!--			<div class="row">-->
<!--			   <div class="col-md-6 padd-0 brdr bgc-fff btm-mrg-20 box-shad">-->
<!--                    <div class="view">-->
<!--                        <div class="caption">-->
<!--                            <h3>Services</h3>-->
<!--                            <a href="" rel="tooltip" title="Add to Favorites"><span class="fa fa-heart-o fa-2x"></span></a>-->
<!--                            <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>-->
<!--                        </div>-->
<!--                        <img src="img/01.jpg"style="height: 151px;" class="img-responsive">-->
<!--                        <div class="propertyType house">House</div>-->
<!--                    </div>-->
<!--                    <div class="detail">-->
<!--                        <div class="info" style="padding:3px;">-->
<!--                            <p class="small upperc" style="text-overflow: ellipsis">CASTLE HILL</p>-->
<!--                            <p class="small upperc wb-red">30/1-7 Hume Ave</p>-->
<!--                            <span class="fa fa-bed pull-right"> <strong>4</strong> </span>-->
<!--                            <span class="fa fa-bath pull-right"> <strong>3</strong> </span>-->
<!--                            <p class="small hidden-xs">Impressively positioned-->
<!--                                overlooking 3.5 captivating acres, designated-->
<!--                                as "significant" by the chestnut hill-->
<!--                                historical s...</p>-->
<!--                        </div>-->
<!--                        <div class="stats wb-red-bg">-->
<!--                            <span class="fa fa-heart-o" rel="tooltip" title="Liked"> <strong>47</strong></span>-->
<!--                            <span class="fa fa-eye" rel="tooltip" title="Viewed"> <strong>137</strong></span>-->
                            
<!--                            <span class="fa fa-photo pull-right" rel="tooltip" title="Photos"> <strong>12</strong></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
			  
			
		
			
<!--			   <div class="col-md-6 padd-0 brdr bgc-fff btm-mrg-20 box-shad">-->
<!--                    <div class="view">-->
<!--                        <div class="caption">-->
<!--                            <h3>Services</h3>-->
<!--                            <a href="" rel="tooltip" title="Add to Favorites"><span class="fa fa-heart-o fa-2x"></span></a>-->
<!--                            <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>-->
<!--                        </div>-->
<!--                        <img src="img/02.jpg"style="height: 151px;" class="img-responsive">-->
<!--                        <div class="propertyType house">House</div>-->
<!--                    </div>-->
<!--                    <div class="detail">-->
<!--                        <div class="info">-->
<!--                            <p class="small upperc" style="text-overflow: ellipsis">CASTLE HILL</p>-->
<!--                            <p class="small upperc wb-red">30/1-7 Hume Ave</p>-->
<!--                            <span class="fa fa-bed pull-right"> <strong>4</strong> </span>-->
<!--                            <span class="fa fa-bath pull-right"> <strong>3</strong> </span>-->
<!--                            <p class="small hidden-xs">Impressively positioned-->
<!--                                overlooking 3.5 captivating acres, designated-->
<!--                                as "significant" by the chestnut hill-->
<!--                                historical s...</p>-->
<!--                        </div>-->
<!--                        <div class="stats wb-red-bg">-->
<!--                            <span class="fa fa-heart-o" rel="tooltip" title="Liked"> <strong>47</strong></span>-->
<!--                            <span class="fa fa-eye" rel="tooltip" title="Viewed"> <strong>137</strong></span>-->
                            
<!--                            <span class="fa fa-photo pull-right" rel="tooltip" title="Photos"> <strong>12</strong></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
			  
			
<!--			</div>-->
<!--			<div class="row">-->
<!--			   <div class="col-md-6 padd-0 brdr bgc-fff btm-mrg-20 box-shad">-->
<!--                    <div class="view">-->
<!--                        <div class="caption">-->
<!--                            <h3>Services</h3>-->
<!--                            <a href="" rel="tooltip" title="Add to Favorites"><span class="fa fa-heart-o fa-2x"></span></a>-->
<!--                            <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>-->
<!--                        </div>-->
<!--                        <img src="img/04.jpg"style="height: 151px;" class="img-responsive">-->
<!--                        <div class="propertyType house">House</div>-->
<!--                    </div>-->
<!--                    <div class="detail">-->
<!--                        <div class="info">-->
<!--                            <p class="small upperc" style="text-overflow: ellipsis">CASTLE HILL</p>-->
<!--                            <p class="small upperc wb-red">30/1-7 Hume Ave</p>-->
<!--                            <span class="fa fa-bed pull-right"> <strong>4</strong> </span>-->
<!--                            <span class="fa fa-bath pull-right"> <strong>3</strong> </span>-->
<!--                            <p class="small hidden-xs">Impressively positioned-->
<!--                                overlooking 3.5 captivating acres, designated-->
<!--                                as "significant" by the chestnut hill-->
<!--                                historical s...</p>-->
<!--                        </div>-->
<!--                        <div class="stats wb-red-bg">-->
<!--                            <span class="fa fa-heart-o" rel="tooltip" title="Liked"> <strong>47</strong></span>-->
<!--                            <span class="fa fa-eye" rel="tooltip" title="Viewed"> <strong>137</strong></span>-->
                            
<!--                            <span class="fa fa-photo pull-right" rel="tooltip" title="Photos"> <strong>12</strong></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
			  
			
		
			
<!--			   <div class="col-md-6 padd-0 brdr bgc-fff btm-mrg-20 box-shad">-->
<!--                    <div class="view">-->
<!--                        <div class="caption">-->
<!--                            <h3>Services</h3>-->
<!--                            <a href="" rel="tooltip" title="Add to Favorites"><span class="fa fa-heart-o fa-2x"></span></a>-->
<!--                            <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>-->
<!--                        </div>-->
<!--                        <img src="img/03.jpg" style="height: 151px;"class="img-responsive">-->
<!--                        <div class="propertyType house">House</div>-->
<!--                    </div>-->
<!--                    <div class="detail">-->
<!--                        <div class="info">-->
<!--                            <p class="small upperc" style="text-overflow: ellipsis">CASTLE HILL</p>-->
<!--                            <p class="small upperc wb-red">30/1-7 Hume Ave</p>-->
<!--                            <span class="fa fa-bed pull-right"> <strong>4</strong> </span>-->
<!--                            <span class="fa fa-bath pull-right"> <strong>3</strong> </span>-->
<!--                            <p class="small hidden-xs">Impressively positioned-->
<!--                                overlooking 3.5 captivating acres, designated-->
<!--                                as "significant" by the chestnut hill-->
<!--                                historical s...</p>-->
<!--                        </div>-->
<!--                        <div class="stats wb-red-bg">-->
<!--                            <span class="fa fa-heart-o" rel="tooltip" title="Liked"> <strong>47</strong></span>-->
<!--                            <span class="fa fa-eye" rel="tooltip" title="Viewed"> <strong>137</strong></span>-->
                            
<!--                            <span class="fa fa-photo pull-right" rel="tooltip" title="Photos"> <strong>12</strong></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
			  
			
<!--			</div>-->
			
			
			
			
			
			
			
			
			
			
<!--			<div class="row">-->
				
<!--				</div>-->
				
<!--				</div>-->
				
				
				
				
				
			
				
<!--			</div>-->
<!--			<div class="container">-->
<!--  <div class="row">-->
<!--    <div class="col text-center">-->
<!--      <button class="btn btn-default" style="background: #30caa0;  margin-top: 89px;color:white;">Load More</button>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--		</div>-->
		
		
		
<!--	</section>-->


	
	<!--premium service-->

<br><br>

<div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2> premium services</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center" style="margin-top:50px">


                       <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty" >
                                <!--<span class="flaticon-program (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/program (1).svg" alt="" style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="{{url('/')}}/services-details">Electricals</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-design (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/design (1).svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_525">Furniture
</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-devops.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/devops.svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                   
                                <h5><a href="#load-data_538">Plumbing</a></h5>
                                                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-technical (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/technical (1).svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_530">Interior design</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-digital.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/digital.svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_531">Facilities</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-recruit (1).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/recruit (1).svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_532">Sanitry/Tiles
</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-conten.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/conten.svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_533">ManPower
</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-sysadmin.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/sysadmin.svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_534">PestControl</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-qa-automation.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/qa-automation.svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_535">Water Proof
</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6" >

                        <div class="single-services text-center mb-30"style="height: 188px;">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-copywriting (2).svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/copywriting (2).svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_536">Construction Chemicals
</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">

                        <div class="single-services text-center mb-30"style="height: 188px;">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-online (2).png"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/online (2).png" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_537">CompoundWall Mesh
                                                               <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6" >

                        <div class="single-services text-center mb-30"style="height: 188px;">
                            <div class="services-ion" id="createproperty">
                                <!--<span class="flaticon-others.svg"></span>-->
                                <img src="https://itremotejob.com/job_assets/img/icon/others.svg" alt=""style="height:100px;">
                               
                            </div>
                            <div class="services-cap">
                                                               <h5><a href="#load-data_539">Window& Door Mesh</a></h5>
                                                               <span></span>
                            </div>
                        </div>
                    </div>
 

                </div>
                <!-- More Btn -->
                <!-- Section Button -->

            </div>
<!--<div class="container">-->
<!--  <div class="row">-->
<!--    <div class="col text-center">-->
<!--      <button class="btn btn-default" style="background: #30caa0;  margin-top: 89px;color:white;">Load More</button>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
        </div>
<!-- premium services--->
	
	
	
	
	<!-- Builder Section Begin -->
	
	<section class="agent-section spad" style="margin: -130px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" style="text-align:center;">
                       
                        <h2>Our Builders</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="agent-carousel owl-carousel">
                    @foreach($users as $form)
                     @if($form->role == "Builder")
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <a href="{{url('/')}}/builder-details/{{$form->id}}"><img src="{{url('/public')}}/{{$form->profile_pic}}" alt="image"></a>
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <a href="{{url('/')}}/builder-details"><h5>{{$form->first}}</a> <span>{{$form->role}}</span></h5>
                        </div>
                    </div>
                     @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>

<!--<section class="team">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="section-title" style="text-align:center;">-->
                       
            <!--            <h2>Our Builders</h2>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
<!--                <div class="row team-all">-->
<!--                    @foreach($users as $form)-->
<!--                     @if($form->role == "Builder")-->
<!--                    <div class="col-lg-3 col-md-6 team-pro">-->
                       
<!--                        <div class="team-wrap">-->
<!--                            <div class="team-img">-->
<!--                                <img src="{{url('/public')}}/{{$form->profile_pic}}" alt="">-->
<!--                            </div>-->
<!--                            <div class="team-content">-->
                                
<!--                                <div class="team-info">-->
<!--                                    <h3>{{$form->first}}</h3>-->
<!--                                    <p>{{$form->email}}</p>-->
<!--                                    <div class="team-socials">-->
<!--                                        <ul>-->
<!--                                            <li>-->
<!--                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
<!--                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
<!--                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <span><a href="{{url('/')}}/builder-details">View Profile</a></span>-->
<!--                                </div>-->
                                
<!--                            </div>-->
                            
                            
<!--                        </div>-->
                        
<!--                    </div>-->
<!--                    @endif-->
<!--                    @endforeach-->
                    
                   
<!--                </div>-->
            <!--</div>-->
       
<!--  <div class="container">-->
<!--  <div class="row">-->
<!--    <div class="col text-center">-->
<!--      <button class="btn btn-default" style="background: #30caa0;  margin-top: 89px;color:white;">Load More</button>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--</section>-->




<!-- Builder Section end -->
	
	
	
	
	
	<!-- Builder Section Begin -->
    <!--<section class="agent-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" style="text-align:center;">
                       
                        <h2>Our Builders</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="agent-carousel owl-carousel">
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="{{url('/')}}/img5/agent/agent-5.jpg" alt="image">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Matthew Robbins <span>Founder & Ceo</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="{{url('/')}}/img5/agent/agent-4.jpg" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Tillie Burns <span>Marketing Manager</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="{{url('/')}}/img5/agent/agent-3.jpg" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Derrick Lawson <span>Company Agents</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="{{url('/')}}/img5/agent/agent-2.jpg" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Clifford Colon <span>Saler Manager</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="{{url('/')}}/img5/agent/agent-1" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Clifford Colon <span>Saler Manager</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Builder Section End -->
	
	
	
	
	
	<!-- Agent Section Begin -->
    <section class="agent-section spad" style="margin: -163px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" style="text-align:center;">
                       
                        <h2>Our Agents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="agent-carousel owl-carousel">
                    @foreach($users as $form)
                     @if($form->role == "Agent")
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="{{url('/public')}}/{{$form->profile_pic}}" alt="image">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>{{$form->first}} <span>{{$form->role}}</span></h5>
                        </div>
                    </div>
                     @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Agents Section End -->
	
	<!-- feature category section -->
	<section class="feature-category-section spad" >
		<div class="container" >
			<div class="section-title text-center">
				<h3>LOOKING PROPERTY</h3>
				<p>What kind of property are you looking for? We will help you</p>
			</div>
			<div class="row">
			    <div class="col-lg-3 col-md-6 f-cata">
					<a href="#VILLA_PROPERTIES"><img src="img/feature-cate/1.jpg" alt=""></a>
					<a href="#VILLA_PROPERTIES"><h5>VILLA PROPERTIES</h5></a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/1.jpg" alt="">
					<a href="#FARM"><h5 >FARM PROPERTIES</h5></a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/2.jpg" alt="">
					<a href="#INDEPENDENT"><h5 >INDEPENDENT HOUSE PROPERTIES</h5></a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5>Resort Villas</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5>Office Building</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->


	<!-- Gallery section -->

	<!-- Gallery section end -->
    <div class="container">
	     <div class="row">
		 <div class="col-md-4 col-sm-4 col-xs-4 News_col">
		 <div class="News_section_info">
		 <h2 class="text-center TabRENews MobTrendTabs" id="TabRENews" style="border: 1px solid #0c4161;
    background: #0c4161;    font-size: 29px;
    color: white;">Real Estate News</h2>
		 <img src="img/gallery/4.jpg">
		 <figcaption>
<h6>HUDA Advises Not to Buy Land or Property in Unauthorized Layouts<span style="color: tomato;
    padding: 10px;">Latest</span></h6>
</figcaption>
		 </div>
		

<li><a href="{{url('/')}}/Realestate_news" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>


		 </div>
	 <div class="col-md-4 col-sm-4 col-xs-4 News_col">
		 <div class="News_section_info">
		 <h2 class="text-center TabRENews MobTrendTabs" id="TabRENews" style="border: 1px solid #0c4161;
    background: #0c4161;    font-size: 29px;
    color: white;">Project News</h2>
		 <img src="img/gallery/4.jpg">
		 <figcaption>
<h6>Risinia Trendilla - Set a New Trend for Homes on the Peripherals!<span style="color: tomato;
    padding: 10px;">Latest</span></h6>
</figcaption>
		 </div>
		

<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>


		 </div>
	 <div class="col-md-4 col-sm-4 col-xs-4 News_col">
		 <div class="News_section_info">
		 <h2 class="text-center TabRENews MobTrendTabs" id="TabRENews" style="border: 1px solid #0c4161;
    background: #0c4161;    font-size: 29px;
    color: white;">Locality News</h2>
		 <img src="img/gallery/4.jpg">
		 <figcaption>
<h6>TS TRANSCO 132 KV  Underground Cable work is in progress at Hitech City<span style="color: tomato;
    padding: 10px;">Latest</span></h6>
</figcaption>
		 </div>
		

<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>
<li><a href="#" title="Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration">Flyover from Jubilee Hills to Durgam Cheruvu Ready For Inauguration</a></li>
</ul>


		 </div>
	 
	 </div>
</div
	<!-- Review section -->
	<section class="review-section set-bg" data-setbg="img/review-bg.jpg">
		<div class="container">
			<div class="review-slider owl-carousel">
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end-->


     
	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LATEST NEWS</h3>
				<p>Real estate news headlines around the world.</p>
			</div>
			<div class="row">
			    @foreach($blog as $bl)
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="{{$bl->logo}}" alt="" style="height:216px; width:360px;">
					<h5><a href="single-blog.html">{{$bl->title}}</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>{{$bl->name}}</span>
						<span><i class="fa fa-clock-o"></i>{{$bl->created_at}}</span>
					</div>
					<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
				</div>
				
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- Blog section end -->
     
	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="{{url('/')}}/img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="{{url('/')}}/img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="{{url('/')}}/img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="{{url('/')}}/img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="{{url('/')}}/img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->
	  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>

$(document).ready(function(){
var _token = $('input[name="_token"]').val();


load_data('', _token);
load_data11('', _token);
load_data12('', _token);
load_data13('', _token);
load_data19('', _token);
load_data20('', _token);





        
  function load_data(id="", _token)
 {

  $.ajax({
   url:'{{url("home-properties")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row').remove();
    $('#load-data').append(data);
	 $('#load-data2').append(data);
   }
  })
 }
 
  function load_data11(id="", _token)
 {

  $.ajax({
   url:'{{url("villa_properties")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row11').remove();
    $('#load-data11').append(data);
	
   }
  })
 }
 
 
  function load_data12(id="", _token)
 {

  $.ajax({
   url:'{{url("independent_properties")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row12').remove();
    $('#load-data12').append(data);
	
   }
  })
 }
 
 
  function load_data13(id="", _token)
 {

  $.ajax({
   url:'{{url("apartment_properties")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row13').remove();
    $('#load-data13').append(data);
	
   }
  })
 }
    
    function load_data19(id="", _token)
 {

  $.ajax({
   url:'{{url("newlisted_properties")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#remove-row19').remove();
    $('#load-data19').append(data);
	
   }
  })
 }
 
     function load_data20(id="", _token)
 {

  $.ajax({
   url:'{{url("banner_properties")}}',
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    
    $('#load-data20').append(data);
	
   }
  })
 }
    
     $(document).on('click', '#btn-more', function(){
  var id = $(this).data('id');

  
  $('#btn-more').html('<b>Loading...</b>');
  load_data(id, _token);
 });
 
 
    $(document).on('click', '#btn-more11', function(){
  var id = $(this).data('id');

  
  $('#btn-more11').html('<b>Loading...</b>');
  load_data11(id, _token);
 });
 
  $(document).on('click', '#btn-more12', function(){
  var id = $(this).data('id');

  
  $('#btn-more12').html('<b>Loading...</b>');
  load_data12(id, _token);
 });
 
$(document).on('click', '#btn-more13', function(){
  var id = $(this).data('id');

  
  $('#btn-more13').html('<b>Loading...</b>');
  load_data13(id, _token);
 });
 
 
 $(document).on('click', '#btn-more19', function(){
  var id = $(this).data('id');

  
  $('#btn-more19').html('<b>Loading...</b>');
  load_data19(id, _token);
 });
 
 
 $(document).on('click', '#btn-more20', function(){
  var id = $(this).data('id');

  
  $('#btn-more20').html('<b>Loading...</b>');
  load_data20(id, _token);
 });


});
function search_properties(){
	var search=$('#search').val();
	var property_type=$('#property_type').val();
	
	if(property_type == ''){
		$('#property_type-error').text('property type Required');
	}else{
		$('#property_type-error').text('');
	}
	if(search == ''){
		$('#search').attr("placeholder", "Search Required");
	}else{
		$('#search').attr("placeholder", "");
	}
	if (property_type !== '' && search !== ''){
		$('#search-data').html('');
		simple_data('', _token, property_type, search);

 
  
			$('#search_results').css('display','block');
			
			
			
			
	}

	
	
	
//window.location.href="{{url('search-simple')}}/"+property_type+'/'+search;
}  
 	   function advance_search_new(){

var pfor = $("input[name='pfor']:checked").val();
var search_location_value = $("#search_location_value").val();
var search_property_value = $("#search_property_value").val();
var search_bedrooms_value = $("#search_bedrooms_value").val();

var search_guest_value = $("#search_guest_value").val();
var search_year_value = $("#search_year_value").val();
var search_size_value = $("#search_size_value").val();
var search_price_value = $("#search_price_value").val();
	var _token = $('input[name="_token"]').val();
	$('#search-data').html('');
advance_data('', _token, pfor, search_location_value, search_property_value, search_bedrooms_value, search_guest_value, search_year_value, search_size_value, search_price_value);
}  


$("#search_location").on("click",'li', function(e){
    e.preventDefault();
	$("#search_location_value").val($(this).attr("data-value"));
})

$("#search_property").on("click",'li', function(e){
    e.preventDefault();
	$("#search_property_value").val($(this).attr("data-value"));
})
$("#search_bedrooms").on("click",'li', function(e){
    e.preventDefault();
	$("#search_bedrooms_value").val($(this).attr("data-value"));
})
$("#search_bathrooms").on("click",'li', function(e){
    e.preventDefault();
	$("#search_bathrooms_value").val($(this).attr("data-value"));
})
$("#search_guest").on("click",'li', function(e){
    e.preventDefault();
	$("#search_guest_value").val($(this).attr("data-value"));
})
$("#search_year").on("click",'li', function(e){
    e.preventDefault();
	$("#search_year_value").val($(this).attr("data-value"));
})
$("#search_size").on("click",'li', function(e){
    e.preventDefault();
	$("#search_size_value").val($(this).attr("data-value"));
})
$("#search_price").on("click",'li', function(e){
    e.preventDefault();
	$("#search_price_value").val($(this).attr("data-value"));
})


var _token = $('input[name="_token"]').val();
		  function simple_data(id="", _token, property_type, search)
 {
  $.ajax({
   url:'{{url("home-properties1")}}/'+property_type+'/'+search,
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#search-simple-remove').remove();
    $('#search-data').append(data);
	

	
   }
  })
    $.ajax({
   url:'{{url("home-properties1_count")}}/'+property_type+'/'+search,
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#count').text(data);


   }
  })
   } 
   $(document).ready(function(){
	       
     $(document).on('click', '#simple-btn-more', function(){
  var id = $(this).data('id');
var search=$('#search').val();
	var property_type=$('#property_type').val();
  
  $('#simple-btn-more').html('<b>Loading...</b>');
simple_data(id, _token, property_type, search);
 });
 
 

	   });
	   
	   
	   
	   
	var _token = $('input[name="_token"]').val();
		  function advance_data(id="", _token, pfor, search_location_value, search_property_value, search_bedrooms_value, search_guest_value, search_year_value, search_size_value, search_price_value)
 {
  $.ajax({
   url:'{{url("search-advance")}}',
   method:"POST",
   data:{id:id, _token:_token, pfor:pfor, search_location_value:search_location_value, search_property_value:search_property_value, search_bedrooms_value:search_bedrooms_value, search_guest_value:search_guest_value, search_year_value:search_year_value, search_size_value:search_size_value, search_price_value:search_price_value},
   success:function(data)
   {
    $('#search-advance-remove').remove();
    $('#search-data').append(data);
	

	
   }
  })
    $.ajax({
   url:'{{url("home-advance-count")}}',
   method:"POST",
   data:{id:id, _token:_token, pfor:pfor, search_location_value:search_location_value, search_property_value:search_property_value, search_bedrooms_value:search_bedrooms_value, search_guest_value:search_guest_value, search_year_value:search_year_value, search_size_value:search_size_value, search_price_value:search_price_value},
   success:function(data)
   {
    $('#count').text(data);


   }
  })
   } 
   $(document).ready(function(){
	       
     $(document).on('click', '#advance-btn-more', function(){
  var id = $(this).data('id');
var pfor = $("input[name='pfor']:checked").val();
var search_location_value = $("#search_location_value").val();
var search_property_value = $("#search_property_value").val();
var search_bedrooms_value = $("#search_bedrooms_value").val();

var search_guest_value = $("#search_guest_value").val();
var search_year_value = $("#search_year_value").val();
var search_size_value = $("#search_size_value").val();
var search_price_value = $("#search_price_value").val();
  
  $('#advance-btn-more').html('<b>Loading...</b>');

advance_data(id, _token, pfor, search_location_value, search_property_value, search_bedrooms_value, search_guest_value, search_year_value, search_size_value, search_price_value);
 });
 
 

	   });   
	   

function redirect(id)
	   {
	       
	       var _token = $('input[name="_token"]').val();
	         $.ajax({
   url:'{{url("getproperty-type")}}',
   method:"POST",
   dataType:'json',
   data:{id:id, _token:_token},
   success:function(data)
   {
   
	
 window.location.href="{{url('/')}}/single-list/"+id+'/'+data.response['property_type'];
	
   }
  })
	       
	       
	      

	   }
	   
	   
	   
</script>  
	   <script src="{{url('/')}}/js3/jquery-3.3.1.min.js"></script>
    <script src="{{url('/')}}/js3/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js3/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/js3/jquery.nice-select.min.js"></script>
    <script src="{{url('/')}}/js3/jquery.slicknav.js"></script>
    <script src="{{url('/')}}/js3/jquery-ui.min.js"></script>
    <script src="{{url('/')}}/js3/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/js3/main.js"></script>
@include('footer')

	