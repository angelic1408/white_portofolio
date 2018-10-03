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
<html lang="en" class="daznspot">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio Details | DAZN x Spotify Collaboration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <meta name="author" content="Angelia Stefanie">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio - DAZN x Spotify Collaboration">
    <meta name="twitter:description" content="Designing customer experience, from registration to changing account setting for DAZN x Spotify Premium Collaboration project. ">
    <meta name="twitter:image" content="/images/portfolio/dazn/daznspot_hero.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Portfolio - DAZN x Spotify Collaboration">
    <meta property="og:url" content="http://portfolio.angelahwang.com/daznTV">
    <meta property="og:description" content="Designing customer experience, from registration to changing account setting for DAZN x Spotify Premium Collaboration project. ">
    <meta property="og:site_name" content="Angelia Stefanie Portfolio">
    <meta property="og:image" content="/images/portfolio/dazn/daznspot_hero.jpg">

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
                        <li><a href="misc.php">Previous Case Study</a></li>
                        <li><a href="daznTV.php">Next Case Study</a></li>    
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
                        <h2 class="bold">Designing Customer Experience for DAZN x Spotify Collaboration</h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>Service Design</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>Interaction</a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Project Info</h3>
                        <p>DAZN x Spotify Collaboration is a collaboration project where users who sign-up to DAZN from September to October 22nd, can enjoy both DAZN and Spotify Premium with single price, for 12 months. After the 12 months period ends, user still can enjoy both services, with a difference price. <br> <br>
                        As a service designer, my role is to ensure the user experience went smoothly from the registration flow, activating account, and changing account status on My Account page. I have to be responsible with the edge cases too such as when user does not activate their spotify premium account or what if user does not want to participate in this campaign.

                        </p>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Status : Released</li>
                            <li><i class="fa fa-angle-right"></i> Role: Service Designer + Researcher </li>
                        </ul>
                    </div>
                    <div class="skills overflow">
                        <h3>Skills:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Design Thinking</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Qualitative Research</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Sketch/Photoshop</a></li>
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
                <h2>DAZN x Spotify Collaboration</h2>
                <h3>Background</h3>
                <p>
                    DAZN x Spotify Collaboration project allows user to enjoy both DAZN and Spotify with one price; 1750¥. Normally user has to pay 1750¥ for Dazn and 980¥ for Spotify.  This campaign only valid for new user who sign-up to the campaign from September to October 22nd. During this period, all promotional landing page will display a DAZN x Spotify campaign sign-up button, but user can also opt for not joining the campaign.<br><br>

                    The limitation of this project mainly comes from the various user type we have in DAZN and various type of payment method DAZN offer. At DAZN, they have Docomo-carrier user who pays DAZN at different type, thus they're not valid for this offer. Also, we have a partial (user who does not completed the payment method) and frozen (inactive user) who we are trying to reach and convert to active-paid user through this campaign. Each type of user will have a different on-boarding journey and makes the project challenging.  <br><br>
                </p>

                <h3>On-board the user </h3>
                <p>
                    The positive journey starts when a completely new user sign-up to the campaign and finish the registration process (filling personal data and payment method by credit card). Then, user will receive an email with a link from DAZN. User then click the link to follow the registration to Spotify Premium and activate their Spotify Premium account. <br>
                    However there are so many edge cases depends on the user type: <br>
                    <ul>
                        <li>- Docomo user who's not eligible, how to onboard them?</li>
                        <li>- Partial user: User who registered personal data, but did not input the payment method</li> 
                        <li>- Frozen user: inactive user who did not pay for the past 12 months. How to onboard them back with this campaign?</li>
                    </ul>

                    In order to understand the onboarding journey, I created this user flow
                </p>>
            </div>
        </div>

        <div class="row full-width">
            <img class="image img-responsive" src="images/portfolio/dazn/spotifyflow.png" alt="User Journey on TV App" width="1450" />
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Limiting My Account Setting</h3>
                <p>
                    Ideally, user who receives the email should click the link immediatelly so their Spotify account will be activated at the same day as their DAZN account. User might forget about this email and so "My Account" needs to be modified to cater this need. Also, the payment method at "My Account" page needs to be modified too. <br><br>

                    Normally DAZN offers different payment method such as credit card, debit card, and gift card. However this may raise another issue. The payment for DAZN x Spotify campaign is 1,750¥ for 12 month. And after the 12th Month, user will pay 2,567¥. We sell the gift card in 3 patterns, 1-month, 3-month, 6-month. So if user redeem a gift card on the 12-month of campaign, it will cause some error at the system. 
                    <br><br>                    
                </p>
                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/dazn_myaccount.png" alt="Setting My Account" width="410" />
                    <ol class="notes">
                        <li class="note-left" style="top: 70px; left: 80px; width: 230px"> Adding a link to activate Spotify Premium Access </li>
                        <li class="note-right" style="top: 120px; left: 575px; width: 195px">Removing gift-card payment option on My Account</li>
                    </ol>
                </div>
                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/dazn_redeemerror.png" alt="Redeem Error" width="410" />
                    <ol class="notes">
                        <li class="note-left" style="top: 5px; left: 650px; width: 230px">User will receive an error if they're trying to redeem a gift card.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>User Research</h3>
                <p>
                    A week after the project released, the conversion is not that high. I was not the one designing the landing page, but I helped the team with the user research. The method I used for the user research was an online-based user research, where user has to do several tasks while talking / voicing what they think about the site. After user finished doing the task, they have to answer follow-up questionnaire about the task.<br>

                    Here's the key finding of the research
                    <ul>
                        <li> - Too many flow (redirection) on sign-up journey. Because we have to cater Docomo user and user who does not want to join the campaign, the team put a lot of link and redirection on the landing page, and this confuse the user.  </li>
                        <li>- User does not understand what DAZN x Spotify Campaign is. They think DAZN x Spotify is watching sports and listening to music at the same time.  </li>  
                        <li>- The copy on landing page can be misleading. Most user think that the campaign only valid until October, not for the whole 12-month.  </li>      
                    </ul> 
                </p>
                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/research.png" alt="Redeem Error" width="410" />
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Creating Key Visual</h3>
                <p>Based on the key findings on the user research, I work with the Marketing team to improve the visual and copy on the landing page. Instead of copy, we change into key visual and also we illustrated how to register to the campaign in 6-simple-step. <br> <br>

                Also I helped created the visual to illustrate how user are going to pay if they don't activate Spotify Premium account as soon as possible.    
                </p>
            </div>
        </div>

        <div class="row full-width">
            <img class="image img-responsive" src="images/portfolio/dazn/dazn_keyvisual.jpg" alt="Key Visual for DAZN x Spotify" width="1450" />
        </div>



        <div class="row post content">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Result and Lesson learned</h3>
                <p>
                    After we simplify the sign-up flows and improve the visual, the conversion raised by <br><br>

                    We never thought that the number is going to be that low when the project was released. It is what it is. Developing a new site will cause another cost and time, and yes we have to be creative in handling this kind of problem (eg: Changing copy to key visual). I also learnt that it's better to do user research as soon as the project is released so we can grasp the problem earlier. 
                </p>
            </div>
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
