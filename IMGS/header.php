<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Vinod Gupta School of Management - IIT Kharagpur</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">

<!-- Bootstrap Core CSS end-->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/responsive-calendar.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Custom CSS -->
<link href="css/home_style.css" rel="stylesheet">
<link href="css/carousel_fade.css" rel="stylesheet">

<!-- OWL Slider CSS/JS -->
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/owl.carousel.js"></script>


<!-- Custom CSS end Grey - #6E706B, DarkGrey-#555758 - Topnav - #222423, Menu - #101010, #E97528 Brown - #AC782E -->
<style type="text/css">

.container { width: 100%;
}

.container .container-fluid {
width:70%;
margin: 0 auto;
}

.container .container-fluid .dropdown-menu a{
color:#fff;
}

/*#myCarousel{
min-height:450px;
}*/

.container .text-right{
background-color:#E97528;
padding:5px 250px;
text-align:right;
color:#ffffff;
}

.container .text-right a{
	color:#fff !important;
}

.text-right .bar-margin {margin:0 20px}
/*.dropdown:hover .dropdown-menu {
  display: block;
}

.nav > li.dropdown.open {
  position: static;
}
*/
.nav > li.dropdown:hover .dropdown-menu {
  display: table;
  width: 70%;
  margin-left:158px;
  text-align: left;
  left: 0;
  right: 0;
  background-color:#D07141;
  color:#fff;
}

/*.nav > li.dropdown .dropdown-menu {
  width: 70%;
  margin: 0 auto;
}
*/
.innermenu {padding-left:5px;}

.innermenu a {margin-left:3px;}

/*.col-lg-9 > ul.innermenu{
margin-left: -30px;
}

.col-lg-9 > ul.innermenu a{
margin-left: 10px;
}

.col-lg-8 > ul.innermenu{
margin-left: -30px;
}

.col-lg-8 > ul.innermenu a{
margin-left: 10px;
}
*/

.dropdown-menu > li {
  display: table-cell;
  height: 50px;
  line-height: 50px;
  vertical-align: middle;
}

.dropdown-menu .menuul > li {
  color:#fff;
}

.navbar-inverse .navbar-nav>li>a {
    color: #fff;
}

.navbar-inverse .navbar-nav dropdown-menu >li>a {color: #fff;}

.navbar-collapse {margin: 0 auto; }

.bottom-text { position: absolute; bottom: 0; text-align: center; color: white; opacity:0.6; padding:15px; background: rgb(0, 0, 0); width:100%; }

.home_block,
.home_block:hover {
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	-ms-transition: all .5s;
	-o-transition: all .5s
}
.ed_counter h4 {
	font-size: 24px;
	margin: 15px 0 5px;
	text-transform: capitalize
}
.home_block {
	float: left;
	width: 100%;
	height:auto;
	background-color: #fff;
	padding: 15px;
	margin-bottom:10px;
	transition: all .5s
}
.home_block:hover {
	transition: all .5s;
	-moz-box-shadow: 0 5px 20px -8px rgba(0, 0, 0, .5);
	-webkit-box-shadow: 0 5px 20px -8px rgba(0, 0, 0, .5);
	box-shadow: 0 5px 20px -8px rgba(0, 0, 0, .5)
}
.home_block .ed_most_recomended_data {
	padding: 0
}

.ed_latest_news_slider .ed_item_description p,
.ed_latestnews p {
	float: left;
	width: 100%;
	padding: 0 40px
}

.course_faculty img {
    width: 32px;
    height: 32px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
    border-radius: 100px;
}

.home_block .rs_nd_dev_text {
	width:65%;
	float:left;

}

.home_block .rs_nd_dev img {
    width: 33%;
	float:right;
	border-radius:50px;
}

.home_block .st_ach_left_text {
    width: 65%;
	float:left;
	radius:
}


.home_block .st_ach_left img {
    width: 28%;
	float:right;
	border-radius:50px;
}

.home_block .st_ach_right_text {
    width: 65%;
	float:right;
}


.home_block .st_ach_right img {
    width: 28%;
	float:left;
	border-radius:50px;
}

.news_ann_img img{
    width: 20%;
	float:left;

}

.news_ann_img_text{
    width: 75%;
	float:right;
}

.news_ann_img_text .heading{
	color:maroon;
	font-size:18px;
}

.gallery_img{
padding:0 5px;
}

.home_block .cinfo-border{
padding-bottom:7px;
border-bottom:1px solid #eee;
}


.footerclr {
background-color:#7b7a7a;
color:#fff;
margin-top:20px;
border-top: 10px solid #cdcdcd;
}

.footerclr p{
line-height:15px;
font-size:12px;
}

.footerclr p a{
color:#fff;
}

.footerclr p a:hover{
color:#fff;
text-decoration:underline;
}

.footerbtm {background-color:#E97528; 
height:35px; 
padding-top:8px; 
color:#fff; 
text-align:center;

}

@media screen and (max-width: 767px) {
  .dropdown-menu > li { display: block; }

#myCarousel { 
  width: 100%; 
  text-align:center;
 }

.container .container-fluid {
width:100%;
margin: 0 auto;
}
.container .text-right{
padding:5px;

.navbar-brand {height:125px;}

}

</style>
</head>
<body id="content_size">


<div class="container">
  <div class="row"> 

<div class="col-lg-12 text-right"><A HREF="https://erp.iitkgp.ac.in/FacultyCareer/advtFacultyRecruitment.jsp" target="blank">Join Us</A><spam class="bar-margin">|</spam><A HREF="http://www.iitkgp.ac.in" target="blank">IITKGP</A><spam class="bar-margin">|</spam><A HREF="http://www.iitkgp.ac.in/files/comdir.pdf" target="blank">Phone Directory</A><spam class="bar-margin">|</spam> <A HREF="http://www.tgh.iitkgp.ac.in/" target="blank">Guest House</A>  </div>

<div class="container-fluid"> 

  <div class="col-lg-5" style="margin-top:5px;"><A HREF="index.php"><img src="images/newlogo.png" class="img-responsive" /></A></div>

  <div class="col-lg-6" style="text-align:right; margin:7px 0;"><img src="images/nirf6.png" width="150" class="img-responsive"  align="right" /> </div><BR>
</div>
</nav>

 <nav class="navbar navbar-inverse" style="background-color:#555758 !important;">
  <div class="container-fluid"> 
	 <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

   <div class="collapse navbar-collapse" id="myNavbar"> 
     <ul class="nav navbar-nav" >
       <li ><a href="index.php">HOME</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="width:780px; margin:0 auto;">
            <div class="col-lg-5" style="border-right:1px solid #fff;">
			<li><P><H4>About VGSoM</H4>
				Vinod Gupta School of Management (VGSoM) was set up as the first school of management within the IIT system in 1993 at a time when India .. <BR>
				<A HREF="about-us.php">Read More >></A></P>
			</li></div>
			<div class="col-lg-3" style="color:#fff !important;">
			   <ul class="innermenu"><BR>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="director-dean-message.php">Director's Message</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="director-dean-message.php#dean">Dean's Message</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="about-us.php#vinodgupta">About Mr. Vinod Gupta</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="about-us.php#vision">Vision and Mission</a></li>
 <!--               <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="awards.php">Awards Honours</a></li>
                 <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="infrastructure.php">Infrastructure</a></li> -->
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="about-us.php#contact">Contact us</a></li>
				<BR>
              </ul>
			 </div>
			<div class="col-lg-4" style="color:#fff !important;">
			   <ul class="innermenu">
                <li><P><H4>Alumni</H4></li>
                <!-- <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="VGSoMSilverJubilee2018" target="blank">Silver Jubilee Endowment</a></li> -->
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="alumnispeak">Alumni Speak</a></li>
              </ul>
			 </div>

		  </ul>
	    </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROGRAMMES <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="width:950px; margin:0 auto;">
			<div class="col-sm-3" >
			   <ul class="innermenu">
                <li><H4>MBA</H4></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="/MBA"  target="blank">Admission</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="pdf/mba_curriculum.pdf" target="blank">Curriculum</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="pdf/mba2019fee_loan.pdf" target="blank">Fees and Financing</a></li> 
				<BR>
              </ul>
			 </div>

			 <div class="col-sm-2" >
			   <ul class="innermenu">
                <li><H4>Executive MBA</H4></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="executive-mba.php">Overview</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="executive-mba.php#admission">Admission</a></li>
                <!-- <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="files/emba2019brochure.pdf" target="blank">Brochure</a></li> -->
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="https://erp.iitkgp.ac.in/ERPWebServices/curricula/CurriculaSubjectsList.jsp?stuType=PG&splCode=BM1" target="blank">Curriculum</a></li>
              </ul>
			 </div>

			 <div class="col-sm-2" >
			   <ul class="innermenu">
                <li><H4>PhD</H4></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="vgsom-phd.php">Overview</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="vgsom-phd.php#admission">Admission</a></li>
              </ul>
			 </div>
			 <div class="col-sm-2" >
			   <ul class="innermenu">
                <li><H4>PGDBA</H4></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="pgdba.php">Overview</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="pgdba.php#dates">Important Dates</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="http://www.pgdba.iitkgp.ac.in" target=""blank>Website</a></li>
              </ul>
			 </div>

			 <div class="col-sm-3" >
			   <ul class="innermenu">
                <li><H4>MDP</H4></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="mdp.php">Upcoming Programs</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="mdp-brochure">MDP Brochure</a></li>
<!--                 <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="mdp.php">Testimonials</a></li><BR> -->
              </ul>
			 </div>


		  </ul>
	    </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">PLACEMENTS <span class="caret"></span></a>
          <ul class="dropdown-menu innermenu" role="menu" style="width:200px; margin:0 auto; padding:10px 0;">
            <div class="col-lg-12" >
				<li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="placement-dean-message.php">Dean's Message</a></li>
				 <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="pdf/VGSOM_Placement_Brochure.pdf" target="blank">Placement Brochure</a></li> 
                 <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="pdf/Summer_Placement_Report.pdf" target="blank">Summer Placement</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="pdf/VGSOM_Placement_Report.pdf" target="blank">Final Placement Report</a></li> 
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="recruiters.php">Our Recruiters</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="placement.php">Contact Placement Cell</a></li>
		  <p></p>
			</li></div>
		  </ul>
	    </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">FACULTY & RESEARCH <span class="caret"></span></a>
          <ul class="dropdown-menu innermenu" role="menu" style="width:205px; margin:0 auto;">
            <div class="col-lg-12" >
			<li><H4>Faculty</H4>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="faculty.php">Faculty Directory</a></li>
				<H4>Research</H4>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="publication.php">Publications</a></li>
			</li>	
			
			</DIV>

		  </ul>
	    </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDENTS <span class="caret"></span></a>
          <ul class="dropdown-menu innermenu" role="menu" style="width:240px; margin:0 auto; padding:10px 0;">
            <div class="col-lg-12" >
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="council.php">Council, Clubs & Committees</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="vgsom-magazines.php">Magazines</a></li>
                <li><i class="fa fa-chevron-right fa-1" aria-hidden="true"></i><a href="stu-facilities.php">Facilities</a></li>
				</li>
			 </div>
		    </ul>
	      </li>

         </ul>
       </div>

	  </div>

      </div>
    <!-- /.container-fluid --> 
    </nav>
   <!-- Navigation Section End--> 
   </div>
  </div>

<section id="slider">
  	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	  <div class="item active">
		  <img src="images/nirmala-slider.png" alt="International Conference on Financial Markets & Corporate Finance 2017">
		  <div class="bottom-text">International Conference on Financial Markets & Corporate Finance 2017</div>
		</div>
		
		<div class="item">
		  <img src="images/slider33.jpg" class="" alt="Nobel Laureate at VGSoM">
		  <div class="bottom-text">Prof. Muhammad Yunus, Nobel Laureate at VGSoM</div>
		</div>

		<div class="item">
		  <img src="images/slider11.jpg" alt="Induction program">
		  <div class="bottom-text">VGSoM welcomes 2019-21 Batch - Induction program</div>
		</div>

		<div class="item">
		  <img src="images/vinodgupta.jpg" class="" alt="Vinod Gupta">
		  <div class="bottom-text">Mr. Vinod Gupta interacts with Students </div>
		</div>

		<div class="item">
		  <img src="images/banner_01.jpg" class="" alt="NIRF Ranking">
		  <div class="bottom-text">VGSOM ranks 2nd in NIRF Ranking</div>
		</div>

	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
</section>


