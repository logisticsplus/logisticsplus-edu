<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>logistics Plus-edu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="img/logisticsplus_logo.svg" type="img/logisticsplus_logo.svg" />

    <link rel="stylesheet" href="css/vendor/ionicons.min.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/mislider.css">
    <link rel="stylesheet" href="css/vendor/mislider-skin-cameo.css">
    <link rel="stylesheet" href="css/vendor/owl.transitions.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.css">
    <link rel="stylesheet" href="css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/tab-logo.png" type="img/prof1.jpg" />
    <link rel="shortcut icon" href="img/tab-logo.png" type="img/prof1.jpg" />
    <script src="js/vendor/modernizr.js"></script>
</head>

<body>
    <!-- 	<div class="loading">
		<div class="wrapper">
			<img src="img/logisticsplus_logo1.png">
			<div class="cssload-loader"></div>
		</div>
	</div> -->

    <!-- Login Option 
	=================-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginLabel">
        <div class="modal-dialog popup-content-LI" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <div class="logo_login-popup col-md-12">
                        <img class="img-responsive" src="img/Logistics_Plus_Logo-t.png" alt="">
                    </div>
                </div>
                <div class="modal-body">
                    <form id="login" method="post" action="#" class="input_login-forms row">

                        <div class="col-md-12">
                            <input class="login-input" type="text" autocapitalize="off" autocorrect="off" / placeholder="USERNAME">
                        </div>
                        <div class="col-md-12">
                            <input class="login-input" required name="login[password]" type="password" placeholder="PASSWORD" />
                            <!--                            <div class="hide-show">
								<span><i class="fa fa-eye fa-2x" aria-hidden="true"></i></span>
							</div> -->
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="rex-bottom-medium rex-btn-icon">
                        <span class="rex-btn-text">Login</span>
                        <span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <main class="rex-main-content">

        <!-- Navigation Html
		=================== -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top top-navigationbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navigationbar-logo">
                        <a href="index.html">
                            <img class="img-responsive" src="img/Logistics_Plus_Logo-t.png" alt="">
                        </a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->            
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right navigation_height">
                        <li>
                            <a href="#top">HOME</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COURSES</a>
                            <ul class="dropdown-menu">
                                <li><a href="embedded-details.html">Embedded Systems</a>
                                </li>
                                <li><a href="backend-details.html">Back-End</a>
                                </li>
                                <li><a href="frontend-details.html">Front-End</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#teamid">TEAM</a>
                        </li>
                        <li>
                            <a href="#contact">CONTACT</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo"><i class="fa fa-lock"></i> LOG IN </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <!-- Slider Html 
		====================-->
        <div class="silder">
            <div class="rex-slider">

                <!-- slider 1 -->
                <div class="slide-list" data-lazy-background="img/embedded-systems-laboratory-systems.jpg">
                    <h1 data-pos="['0', '0']" data-duration="1000" data-effect="fadein">
					<span class="highlight-text">LEARN FROM THE BEST. </span>
					ANYTIME & ANYWHERE
				</h1>
                    <div class="slider-text" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
                        <p>Advance and build on existing skills with our
                            <br> Professional Development programs</p>
                    </div>
                    <!-- <div class="slider-btn" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
						<a href="#" target="_self" class="rex-bottom-medium rex-btn-icon">
							<span class="rex-btn-text">learn more</span>
							<span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
						</a>
					</div> -->
                </div>

                <!-- slider 2 -->
                <div class="slide-list slide-center" data-lazy-background="img/startup-photos12.jpg">
                    <h1 data-pos="['0', '0']" data-duration="1000" data-effect="fadein">
					<span class="highlight-text">getting started </span><br>
					improve your skills
				</h1>
                    <!-- <div class="slider-btn" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
						<a href="#" target="_self" class="rex-bottom-medium rex-btn-icon">
							<span class="rex-btn-text">Check out</span>
							<span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
						</a>
					</div> -->
                </div>

                <!-- slider 3 -->
                <div class="slide-list slider-last-child" data-lazy-background="img/shutterstock_3365600152.jpg">
                     <h1 data-pos="['0', '0']" data-duration="1000" data-effect="fadein">
                    <span class="highlight-text"> </span>
                    Start creative & exciting career <br> With our programs
                </h1>
                    <div class="slider-text" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
                        <p></p>
                    </div>
                    <!-- <div class="slider-btn" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
						<a href="#" target="_self" class="rex-bottom-medium rex-btn-icon">
							<span class="rex-btn-text">learn more</span>
							<span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
						</a>
					</div> -->
                </div>
            </div>
        </div>



        <!-- popular_courses html 
		====================-->
        <section class="popular_courses">
            <div class="container">
                <div class="row">
                    <div class="title-section col-md-12">
                        <h2>Popular Courses</h2>
                        <p>Starting Soon</p>
                    </div>
                    <div class="col-md-12">
                        <div id="popular_courses" class="owl-carousel">
                            <div>
                                <div class="col-md-12">
                                    <div class="block-content">
                                        <div class="courses-img">
                                            <img class="img-responsive" src="img/polarion-embedded-systems-overview.jpg" alt="">
                                            <div class="courses-overlay">
                                                <a href="embedded-details.html"><h6>MORE</h6></a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <a href="single-courses.html"><h6>Embedded Systems</h6></a>
                                            <div class="entry-meta">
                                                <div class="author">
                                                    <p>By <a href="#">Logistics Plus</a>
                                                    </p>
                                                </div>
                                                <div class="date">
                                                    <p>Starts: Oct 03, 2016</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-md-12">
                                    <div class="block-content">
                                        <div class="courses-img">
                                            <img class="img-responsive" src="img/man-people-space-desk.jpg" alt="">
                                            <div class="courses-overlay">
                                                <a href="backend-details.html"><h6>MORE</h6></a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <a href="single-courses.html"><h6>BackEnd Development<span class="label label-primary">NEW</span></h6></a>
                                            <div class="entry-meta">
                                                <div class="author">
                                                    <p>By <a href="#">John Guttag</a>
                                                    </p>
                                                </div>
                                                <div class="date">
                                                    <p>Coming Soon.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-md-12">
                                    <div class="block-content">
                                        <div class="courses-img">
                                            <img class="img-responsive" src="img/responsive.png" alt="">
                                            <div class="courses-overlay">
                                                <a href="frontend-details.html"><h6>MORE</h6></a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <a href="single-courses.html"><h6>FrontEnd Development <span class="label label-primary">NEW</span></h6></a>
                                            <div class="entry-meta">
                                                <div class="author">
                                                    <p>By <a href="#">Logistics Plus</a>
                                                    </p>
                                                </div>
                                                <div class="date">
                                                    <p>Coming Soon.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="teamid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Insturctors and Team 
		===================-->
        <div class="container">
            <div class="title-section col-md-12">
                <h2>Our Team</h2>
                <p>Who we are</p>
            </div>
        </div>

        <section class="president">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 president-content president-lp__content">
                        <div class="col-md-3">
                            <img class="img-responsive" src="img/edi1.png" alt="">
                        </div>
                        <div class="col-md-9 content-text team-president__textContent">
                            <div class="president-title team-presindet__text">
                                <h3>Edi Bunjaku</h3>
                                <span>CEO</span>
                                <p>Graduated from University of Phoenix with a information technology
								degree and has nearly completed an MBA from the University of
								Sheffield. After returning to Kosovo, he founded Logistics Plus, a
								software company and electronic systems integrator. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Instructors Instructors-page">
            <div class="container">
                <!-- <div class="row"> -->
                <div class="small-4 columns col-md-2 col-xs-6">
                    <div class="image-wrapper overlay-slide-in-left">
                        <img src="img/glenn1.png" />
                        <div class="image-overlay-content">
                            <h4>Glenn Noble</h4>
                            <p class="price">Engineer</p>
                            <a class="button" data-toggle="modal" data-target="#dialog-box1">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="small-4 columns col-md-2 col-xs-6">
                    <div class="image-wrapper overlay-slide-in-left">
                        <img src="img/prof4.jpg" />
                        <div class="image-overlay-content">
                            <h4>Enkele Rama</h4>
                            <p class="price">Engineer</p>
                            <a class="button" data-toggle="modal" data-target="#dialog-box2">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="small-4 columns col-md-2 col-xs-6">
                    <div class="image-wrapper overlay-slide-in-left">
                        <img src="img/prof4.jpg" />
                        <div class="image-overlay-content">
                            <h4>Arbnor Zeqiri</h4>
                            <p class="price">Engineer</p>
                            <a class="button" data-toggle="modal" data-target="#dialog-box3">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="small-4 columns col-md-2 col-xs-6">
                    <div class="image-wrapper overlay-slide-in-left">
                        <img src="img/prof2.jpg" />
                        <div class="image-overlay-content">
                            <h4>Havushe Bytyqi</h4>
                            <p class="price">accountant</p>
                            <a class="button" data-toggle="modal" data-target="#dialog-box4">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="small-4 columns col-md-2 col-xs-6">
                    <div class="image-wrapper overlay-slide-in-left">
                        <img src="img/prof4.jpg" />
                        <div class="image-overlay-content">
                            <h4>Rilind Pozhegu</h4>
                            <p class="price">Front End Developer</p>
                            <a class="button" data-toggle="modal" data-target="#dialog-box5">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="small-4 columns col-md-2 col-xs-6">
                    <div class="image-wrapper overlay-slide-in-left">
                        <img src="img/donjeta.png" />
                        <div class="image-overlay-content">
                            <h4>Donjeta Muçaj</h4>
                            <p class="price">Training Coordinator</p>
                            <a class="button" data-toggle="modal" data-target="#dialog-box6">MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>




        <!-- Testimonials html 
====================-->
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section">
                            <h2>Testimonials</h2>
                            <p>What Our Students Say About us</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="testimonials" class="owl-carousel">
                            <div>
                                <div class="media row">
                                    <div class="media-left testimonials-img col-md-2 col-xs-12">
                                        <img src="img/rp.jpg">
                                    </div>                                   

                                    <div class="media-body  testimonials-body">
                                        <div class="testimonials-title">
                                            <h5>Rilind Pozhegu</h5>
                                            <span>Front End Developer</span>
                                        </div>
                                        <p>"I went to Logistics Plus with very little knowledge of programming. After finishing 3 months training, I started to work in Logistics Plus and skills you learn will help you to grow and develop academically and personally. Therefore, I do consider myself lucky to be part of Logistics Plus and I would recommend this training to all those who want to be good programmers and are are interested to increase their skills and knowledge, because there will be lots of work opportunities after you finish this training both in private and public sector"</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="media row">
                                    <div class="media-left testimonials-img col-md-2">
                                        <img src="img/vc.jpg">
                                    </div>                                   

                                    <div class="media-body  testimonials-body">
                                        <div class="testimonials-title">
                                            <h5>Vlera Curri</h5>
                                            <span>Software Developer</span>
                                        </div>
                                        <p>"Being part of Logistics Plus training programm was one of the right choices that I have made for my career. For three months, I was learning with
                                        Java language especially with Spring Framework. As a result of passing all the tests that I went through and being succsessful in this 
                                        field, I started to work for this company and serving my knowledge as a software developer. Meanwhile, I am applying all the stuff that I have learned during the training
                                        and challenging myself while creating real web apllications. If you want to be a successful software developer I would recommand to you Logistics Plus training program
                                        where you will be trained from the experts of the IT field, also the success is guarenteed"</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="media row">
                                    <div class="media-left testimonials-img col-md-2">
                                        <img src="img/erjona.jpg">
                                    </div>                                   

                                    <div class="media-body  testimonials-body">
                                        <div class="testimonials-title">
                                            <h5>Eriona Osmani</h5>
                                            <span>Software Developer</span>
                                        </div>
                                        <p>"I am a student, I started internship for 3 months with very little knowledge of programming, for these 3 months i started to get familiar with my job, the success I got is from the colleagues in the office by helping and motivating me to not quit for what I am good at. After 3 months of internship I started to work as a regular worker, after I worked hard and let them know that I really can succeed as a Software Developer. I consider my self lucky that I finished internship at Logistics Plus and now I am lucky that I work for them. I recommend this training, to all those who want to succeed as programmers and to increase their skills and knowledge, because it is worth it. And I am telling you this from deep inside me, because now I know my self for what I am able to do in my life."</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="media row">
                                    <div class="media-left testimonials-img col-md-2">
                                        <img src="img/msh.jpg">
                                    </div>                                   

                                    <div class="media-body  testimonials-body">
                                        <div class="testimonials-title">
                                            <h5>Milot Shillova</h5>
                                            <span>Software Developer</span>
                                        </div>
                                        <p>"I have been doing my internship at Logistics Plus for the last 2 months and so far i have been learning a lot about back-end programming, to be more specific with Java and Spring Boot framework. At the moment we are working on adding a new module to the Logistics Plus' website. Logistics Plus have supervisors who also act as both mentors and teachers to help us with what we need to learn or to teach us how to work on certain things which we still have not learned how to. I would recommend anyone who likes to learn any kind of programming, to head at Logistics Plus as they will learn different things and of course new thing too."</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team More information POPUP -->
        <!-- Modal1 -->
        <div class="modal fade" id="dialog-box1" tabindex="-1" role="dialog" aria-labelledby="dialog-box1">
            <div class="modal-dialog" role="document">
                <div class="modal-content row">
                    <div class="modal-body">
                        <div class="popup-div__team col-md-4">
                            <img src="img/prof4.jpg" />
                        </div>
                        <div class="col-md-8 popup__body-text">
                            <h5> Glenn Noble </h5>
                            <span>Engineer</span>
                            <p>"Graduated from Northwest Nazarene University with a B.S. in
							Engineering Physics, and has more than 20 years of experience with
							companies including Micron Technology, Zilog, Plexus, and several
							smaller companies. Glenn is also the founder of Genesis Technology Center, an applied engineering training center in Kosovo which provides practical training in electronics design and development to young engineers."</p>
                            <p type="button" data-dismiss="modal"><a href="#"> Close </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal2 -->
        <div class="modal fade" id="dialog-box2" tabindex="-1" role="dialog" aria-labelledby="dialog-box1">
            <div class="modal-dialog" role="document">
                <div class="modal-content row">
                    <div class="modal-body">
                        <div class="popup-div__team col-md-4">
                            <img src="img/prof4.jpg" />
                        </div>
                        <div class="col-md-8 popup__body-text">
                            <h5>Enkele Rama</h5>
                            <span>Engineer</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem </p>
                            <p type="button" data-dismiss="modal"><a href="#"> Close </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal3 -->
        <div class="modal fade" id="dialog-box3" tabindex="-1" role="dialog" aria-labelledby="dialog-box1">
            <div class="modal-dialog" role="document">
                <div class="modal-content row">
                    <div class="modal-body">
                        <div class="popup-div__team col-md-4">
                            <img src="img/prof4.jpg" />
                        </div>
                        <div class="col-md-8 popup__body-text">
                            <h5>Arbnor Zeqiri</h5>
                            <span>Engineer</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem </p>
                            <p type="button" data-dismiss="modal"><a href="#"> Close </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal4 -->
        <div class="modal fade" id="dialog-box4" tabindex="-1" role="dialog" aria-labelledby="dialog-box1">
            <div class="modal-dialog" role="document">
                <div class="modal-content row">
                    <div class="modal-body">
                        <div class="popup-div__team col-md-4">
                            <img src="img/prof4.jpg" />
                        </div>
                        <div class="col-md-8 popup__body-text">
                            <h5> Havushe Bytyqi</h5>
                            <span>Accountant</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem </p>
                            <p type="button" data-dismiss="modal"><a href="#"> Close </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal5 -->
        <div class="modal fade" id="dialog-box5" tabindex="-1" role="dialog" aria-labelledby="dialog-box1">
            <div class="modal-dialog" role="document">
                <div class="modal-content row">
                    <div class="modal-body">
                        <div class="popup-div__team col-md-4">
                            <img src="img/prof4.jpg" />
                        </div>
                        <div class="col-md-8 popup__body-text">
                            <h5> Name Surname </h5>
                            <span>Front End Developer</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem </p>
                            <p type="button" data-dismiss="modal"><a href="#"> Close </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Moda6 -->
        <div class="modal fade" id="dialog-box6" tabindex="-1" role="dialog" aria-labelledby="dialog-box1">
            <div class="modal-dialog" role="document">
                <div class="modal-content row">
                    <div class="modal-body">
                        <div class="popup-div__team col-md-4">
                            <img src="img/prof4.jpg" />
                        </div>
                        <div class="col-md-8 popup__body-text">
                            <h5>Donjeta Muçaj</h5>
                            <span>Training Coordinator</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem </p>
                            <p type="button" data-dismiss="modal"><a href="#"> Close </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="dialog-box2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- The END... -->


        <!-- Contacts
		===================-->
        <div class="container" id="teamid">
            <div class="title-section col-md-12">
                <h2>Contacts</h2>
                <p>Where you can find us</p>
            </div>
        </div>

        <div class="map-container">
            <div style="overflow:hidden;width:100%;height:350px;resize:none;max-width:100%;">
                <div id="google-maps-display" style="height:100%; width:100%;max-width:100%;">
                    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Logistics+PLUS,+Rexhep+Krasniqi,+Prishtina&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                </div>
            </div>
        </div>

        <!-- footer section
==================== -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-section">
                        <div class="footer-description">
                            <img src="img/logo e bardh logistics.png" alt="">
                            <p>It is a long established fact that a
                                <br> reader will be distracted by the readable content of a page when looking at its.</p>
                            <div class="instructors-media-link">
                                <a data-toggle="tooltip" data-placement="top" title="" href="https://www.facebook.com/" data-original-title="Go facebook Profile"><i class="fa fa-facebook"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="" href="https://twitter.com/" data-original-title="Go twitter Profile"><i class="fa fa-twitter"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="" href="https://plus.google.com/" data-original-title="Go Google plus Profile"><i class="fa fa-google-plus"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="" href="https://www.linkedin.com/" data-original-title="Go linkedin Profile"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-section" id="contact">
                        <h3>Contact</h3>
                        <div class="address">
                            <div class="office">
                                <h6>office</h6>
                                <p>St, Rexhep Krasniqi
                                    <br> Prishtine
                                </p>
                            </div>
                            <div class="phone">
                                <h6>phone</h6>
                                <div class="phone-number">
                                    <a href="tel:00123456789">+377 44 798 626</a>
                                </div>
                            </div>
                            <h6>email</h6>
                            <a class="email-add" href="mailto:info@logisticsplus-ks.com">training@logisticsplus-ks.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 footer-section">
                        <h3>About Us</h3>
                        <ul class="usefull-link">
                            <li><a href="#">Latest Courses</a>
                            </li>
                            <li><a href="#">Courses Categories</a>
                            </li>
                            <li><a href="#">Teachers &#38; Staff</a>
                            </li>
                            <li><a href="#">Who We Are</a>
                            </li>
                            <li><a href="#">Get In Touch</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-md-12">
                        <p>Copyright &copy; 2016 Edurex | All Right Reserved | <a href="#">Privacy Policy</a> | <a href="#"> Terms of Use</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </footer>

        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.counterup.min.js"></script>
        <script src="js/vendor/parallax.js"></script>
        <script src="js/vendor/waypoints.min.js"></script>
        <script src="js/vendor/mislider.js"></script>
        <script src="js/vendor/owl.carousel.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM"></script>
        <script src="js/vendor/jquery.devrama.slider.js"></script>
        <script src="js/vendor/jquery.mobile.custom.min.js"></script>
        <script src="js/vendor/wow.min.js"></script>
        <script src="js/vendor/jquery.scrollUp.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/vendor/main.js"></script>
        <script src="https://www.hostingreviews.website/google-maps-authorization.js?id=9fd62c78-e3aa-1347-991e-07f45b742f5e&c=embedded-map-html&u=1469457472" defer="defer" async="async"></script>
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//cdn.jsdelivr.net/velocity/1.1.0/velocity.min.js"></script>
        <script src="script.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/modalEffects.js"></script>
</body>

</html>