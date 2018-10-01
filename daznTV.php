<?php
	session_start();

    if (($_SERVER['REQUEST_URI'] != 'login.php') && ($_SERVER['REQUEST_URI'] != $_SESSION['oldURL'])) {
        $_SESSION['oldURL']     = $_SERVER['REQUEST_URI'];    
    }
    
    if (is_null($_SESSION["isLogin"])) {
        header('Location: /secure.php');
    }
?>

<!DOCTYPE html>
<html lang="en" class="misc">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio Details | DAZN TV Application</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <meta name="author" content="Angelia Stefanie">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Other Type of Design Task">
    <meta name="twitter:description" content="Beside landing page, these are samples of my other web-based designs. ">
    <meta name="twitter:image" content="/images/portfolio/dazn/dazntv_hero.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Portfolio – SOLID Portal Page Redesign">
    <meta property="og:url" content="http://portfolio.angelahwang.com/daznTV">
    <meta property="og:description" content="Beside landing page, these are samples of my other web-based designs.  ">
    <meta property="og:site_name" content="Angelia Stefanie Portfolio">
    <meta property="og:image" content="/images/portfolio/dazn/dazntv_hero.jpg">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico?v=2">
    <link rel="apple-touch-icon" sizes="58x58" href="images/ico/58.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/ico/76.png">
    <link rel="apple-touch-icon" sizes="80x80" href="images/ico/80.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/ico/152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/ico/180.png">
</head><!--/head-->

<body>
	<header id="header" class="navbar-fixed-top port-header">      
        <div class="navbar navbar-inverse port-nav" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1><img src="images/logo_new.png" width="208" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="">Previous Case Study</a></li>
                        <li><a href="">Next Case Study</a></li>    
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

<div class= "main">

    <!-- Hero Image -->
    <div class="jumbotron hero-unit">
        
    </div><!--/#Hero Image-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <div class="project-name overflow">
                        <h2 class="bold">Designing Login and Sign-Up Journey on TV</h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>TV</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>Interaction</a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Project Info</h3>
                        <p>DAZN is a on-demand sports broadcasting service. With DAZN users can watch sport matches on various devices anytime, anywhere. Currenly DAZN are available on Japan, US, Canada, Italy, and DACH (Germany, Austria, Switzerland). Most people in Japan still prefers TV to watch OTT content. However, users find the login or sign-up process are still difficult and troublesome to use. User finds that inputting email address and password using on-screen keyboards and TV remote control is not as comfortable and natural than using the smartphone/laptop keyboard. <br> <br>
                            This project aims to dig deeper about various login and sign-up method that can improve user's experience when watching sports programme on DAZN TV application.
                        </p>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Status : On-going</li>
                            <li><i class="fa fa-angle-right"></i> Role: Service Designer + Researcher </li>
                        </ul>
                    </div>
                    <div class="skills overflow">
                        <h3>Skills:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Design Thinking</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Qualitative Research</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Sketch/Photoshop</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Marvel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->

     <section id="blog-details" class="padding-top">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h2>DAZN TV Application</h2>
                <h3>Problem</h3>
                <p>
                    Most Japanese sport fans stills prefers to watch the sports match on the TV. They use smartphone to watch a catch-up or international matches that usually happen past midnight in Japan Standart Time (JST). <br>

                    The user journey on TV app starts when user launch the DAZN application on their TV. Then, they have to login or register from their TV to enjoy the content. The conventional login and register user on TV requires users to input their data using on-screen keyboard and TV remote control. For most users, this process is time-consuming and difficult. Therefore, with this project, we aim to improve the user experience when they are logging-in or signing-up on TV.  <br><br>
                </p>

                <h3>Competitor Desk Research </h3>
                <p>
                    On DACH region, most of the competitors are dropping the registration on TV because the conversion is not that good. However, that's not the case in Japan. We still have a large number of users who register through the TV application. Therefore we conducted reserach on our competitors about the sign-up method they use on their TV applications. <br> </p>


                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/dazn_tvc.png" alt="Comparison Table with Competitors" width="480" />
                </div>

                <p>
                    From the table above, we can see that most of the competitors are using QR code as a method to login or sign-up on TV. This is not uncommon in Japan. I did other research about Japanese design pattern and most of services are utilizing QR code because alphabet is not the default keyboard in Japan. Scanning a QR code provide a faster and user-friendly access to a website. <br> <br>

                    With that being said, I decide to play around with QR code.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Designing a user journey</h3>
                <p>
                    I took my time learning about our current user journey and study if there's any potential where we removes user pain point in the journey. It is true that QR code makes everything easier, but what if user does not bring their smartphone when they watch TV? Would they spend an effort taking their smartphone and go back to their living room and resume the journey? 
                    <br>
                    I also consider the ease-of-use vs security and trust. The QR code should work even when user are slouching on their sofa. The QR code is also should guarantee that it only connects to the targeted device.  <br><br>
                </p>

               
            </div>
        </div>

        <div class="row full-width">
            <img class="image img-responsive" src="images/portfolio/dazn/flow.png" alt="User Journey on TV App" width="1450" />
        </div>

         <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Design Pattern</h3>
                <p>
                    In order to provide ease-of-use, I propose solution where we use QR code for user to scan the webpage where they can pair the device. In addition to that, I propose that we use pin code that user need to input so it gives them sense of security that their TV is the exact device that they're going pair with their account.  <br>
                    <ul>
                        <li> - Pattern 1: design with QR code and pin-code embedded inside the QR code, so user does not have to input the pin code </li>
                        <li>- Pattern 2: design with QR code and pin-code separately. User scan the QR code and input the pin code manually  </li>  
                        <li>- Pattern 3: design with pin-code only. User type the URL and enter the pin code manually  </li>      
                    </ul> 
                    After creating mock-ups on Marvel, we conducted user test to see which proposal may drive the highest conversion for user. 
                </p>
                <iframe src="https://marvelapp.com/18745c8g?emb=1&iosapp=false&frameless=false" width="1920" height="1080" allowTransparency="true" frameborder="0"></iframe>
                <iframe src="https://marvelapp.com/183j7416?emb=1&iosapp=false&frameless=false" width="1920" height="1080" allowTransparency="true" frameborder="0"></iframe>
            </div>
        </div>
        <div class="row full-width">
            <img class="image img-responsive" src="images/portfolio/misc/misc_all.jpg" alt="Various Function" width="1450" />
        </div>


         <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Learned lesson</h3>
                <blockquote>
                    <p>I always did something I was a little not ready to do</p>
                    <footer>Marissa Mayer CEO of Yahoo!</footer>
                </blockquote>
                <p>Most of the design project I was involved require me skills that I'm not super good on it. Name it JSON, PHP, or even I do selenium coding (for Galen Framework). <br>
                Through all these project I learnt how to accept challenge and listen more to user. What we think is more likely to be different from what user think. <br> </p>
            </div>
        </div>
        <div class="row post content">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h2>Creating Various Features for Payment</h2>
                <h3>Problem</h3>
                <p>
                    We have this page containing all popular and big merchants that collaborating with us. The business side asked us to develop a content management so that they don't have to edit HTML everytime they collaborate with new merchant. Most of these business are not really comfortable with technical stuffs.
                    <br> <br>

                    I arranged a meeting diretly with the coordinator from business unit. Some engineers had completely given up because the requirement keeps changing. 
                </p> 
            </div>
        </div>

        <div class="row post content">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Understanding what User Want</h3>
                <p>
                    As designer, we need to listen to understand, not to reply. After the meeting I found out that their biggest problem is noone there can write JSON or XML. Eventhough we built the JSON or XML structure, it will be meaningless because noone comfortable editing JSON or XML program on text-editor. <br><br>

                    My suggested solution is creating a Excel Macro that can generate JSON data and what they have to do is just to fill the cell with necessary info. 
                </p>
                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/misc/misc_concept.jpg" alt="Categorizing the old sites" width="410" />
                    <ol class="notes">
                        <li class="note-left" style="top: 5px; left: 0px; width: 230px"> Problem is the user don't know how to create JSON file. </li>
                        <li class="note-right" style="top: 50px; left: 625px; width: 195px">So I create an excel function that can generate JSON syntax and they just need to copy and paste it.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row post content">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Result and Learned Lesson</h3>
                <p>
                    The project was done in 1 week and my manager was impressed on how I managed to tackle the problem. I managed to improve the efficiency because the resource for this task can be allocated for another project. <br><br>
                    Beside learning how to generate HTML content with JSON, I learnt to listen to user needs. Sometimes the written requirement do not reflect the user need. What we need is to communicate with them.
                </p>
            </div>
        </div>

        <div class="row full-width">
            <img class="image img-responsive" src="images/portfolio/misc/misc_final.jpg" alt="JSON final product" width="1450" />
        </div>
    </section>
</div>

    <footer id="footer" class="portfolio-footer">
        <div class="container">
            <div class="row max-width">
                <div class="col-sm-12" id="social-footer">
                    <div class="copyright-text text-center coming-content">
                        <p>Connect With me on Social Media</p>                   
                        <div class="social-link">
                            <span><a href="https://www.dribbble.com/angeliastefani"><i class="fa fa-dribbble"></i></a></span>
                            <span><a href="https://www.codepen.io/angeliastefani"><i class="fa fa-codepen"></i></a></span>
                            <span><a href="https://www.linkedin.com/in/stefanie-angelia-103b156b"><i class="fa fa-linkedin"></i></a></span>
                            <span><a href="http://www.instagram.com/angeliastefani"><i class="fa fa-instagram"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy;Angelahwang -  crafted with &hearts; in Yokohama</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script> 

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87685610-1', 'auto');
      ga('send', 'pageview');

    </script> 
</body>
</html>
