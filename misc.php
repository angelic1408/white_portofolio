<?php
	session_start();
    if (is_null($_SESSION["misc_login"])) {
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
    <title>Portfolio Details | Misc Project</title>
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
    <meta name="twitter:image" content="/images/portfolio/misc/misc_hero.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Portfolio – SOLID Portal Page Redesign">
    <meta property="og:url" content="http://portfolio.angelahwang.com/misc">
    <meta property="og:description" content="Beside landing page, these are samples of my other web-based designs.  ">
    <meta property="og:site_name" content="Angelia Stefanie Portfolio">
    <meta property="og:image" content="/images/portfolio/misc/misc_hero.jpg">

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
                        <li><a href="alice-sims.html ">Previous Case Study</a></li>
                        <li><a href="tumblr-blog.html ">Next Case Study</a></li>    
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
                        <h2 class="bold">Designing Various Features</h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>Web Design</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>Interaction</a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Project Info</h3>
                        <p>Working in payment group makes me able to take some other projects. It does not necessarily be a website or landing page design. Sometimes I need to design or improve the Merchant's Dashboard page or improve the design of the current feature, or even designing new feature. In this page, I'm putting sample of my works, some are released and some are not.
                        </p>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Status : Various</li>
                            <li><i class="fa fa-angle-right"></i> Project Member: 1 Project Manager, 1 Designer, usually 2-3 Engineers.</li>
                        </ul>
                    </div>
                    <div class="skills overflow">
                        <h3>Skills:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Design</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>HTML/CSS</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>JavaScript/Jquery</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Sketch/Photoshop</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Thymeleaf/JSP</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>JSON, PHP</a></li>
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
                <h2>Creating Various Features for Payment</h2>
                <h3>Problem</h3>
                <p>
                    The features I design can be a request from our customer (through our business people) or the initiative taken from development side to improve the system. <br>

                    The design process usually is not started with research. Normally, I develop the mock-up and I give it to business people to be reviewed. The process will take so much time because if they don't like it I have to revise and send it for review again and so on...  <br><br>
                </p>

                <h3>Designing for User</h3>
                <p>
                    I design for user, therefore I have to think like user. However, I can not do in-depth user research because of the limited time and resource, so I looked for another way to solve this problem.  <br>

                    I learnt from another design from inside the company, develop 2 or more designs and ask the developers outside my team for opinion. <br> <br>

                    For example, in this feature, we want to show data on sandbox. However, some data on sandbox need to be masked because sandbox is testing environment. So I develop 2 mock-ups and I ask some people if they can understand the information displayed on the screen.
                </p>
            </div>
        </div>
        <div class="row full-width">
            <div class="image-notes">
                <img class="image img-responsive" src="images/portfolio/misc/misc_iteration.jpg" alt="Iteration Process" width="1450" />
                 <ol class="notes">
                    <li class="note-top" style="top: -50px; left: 300px; width:350px">On first iteration, I developed 2 mock-up, the left and middle images. Then I asked people, if they can get the information they need quickly.</li>

                    <li class="note-bottom" style="top: 350px; left: 800px; width: 350px"> On second iteration, I create the final mock-up (right) based on the first iteration.</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Power of Working Prototype</h3>
                <p>
                    Sometimes when the feature is too complicated, I created a working prototype to show how it's going to work. 
                    <br>
                    This is one of sample features. I need to create download CSV file interface based on the number of orders a merchant get. However, if the number of orders is too many, the system only show first 10 orders.So when user click the "download all" button, they don't know how many files are downloaded. <br><br>

                    My idea is to put numbers next to the button and I create a working prototype to explain it.
                </p>

                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/misc/misc_download.gif" alt="Comparison Table with Competitors" width="480" />
                    <ol class="notes">
                        <li class="note-left" style="top: 5px; left: 0px; width: 230px"> I demonstrate how I put number next to the button to show how many data user actually download.</li>
                    </ol>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Result</h3>
                <p>
                    As a result, the design review process that usually takes more than 2 weeks can be shortened into a week without sacrificing the quality. (50% reduction) <br> 
                    By creating working prototype, it's easier for me to observing the user behaviour, thus proposing a better design. 
                    <br>
                    Here are some of the features that I designed.
                </p>
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
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
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
