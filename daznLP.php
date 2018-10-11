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
<html lang="en" class="daznlp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio Details | DAZN Landing Page Improvement</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <meta name="author" content="Angelia Stefanie">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio – DAZN LP Improvement">
    <meta name="twitter:description" content="DAZN LP Improvement - Improving the look and feel of Japan DAZN landing page to provide relevant information for local users.">
    <meta name="twitter:image" content="/images/portfolio/dazn/daznlp_hero.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Portfolio – DAZN TV Applications">
    <meta property="og:url" content="http://portfolio.angelahwang.com/daznLP">
    <meta property="og:description" content="DAZN LP Improvement - Improving the look and feel of Japan DAZN landing page to provide relevant information for local users.">
    <meta property="og:site_name" content="Angelia Stefanie Portfolio">
    <meta property="og:image" content="/images/portfolio/dazn/daznlp_hero.jpg">

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
                        <li><a href="daznTV.php">Previous Case Study</a></li>
                        <li><a href="tumblr-blog.html">Next Case Study</a></li>    
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
                        <h2 class="bold">Improving DAZN Japan Landing Page</h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>Web</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-tag"></i>Interaction</a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Project Info</h3>
                        <p>Landing page is one of the important element of a business because it's where usually user get the first impression about a business or a service. For a OTT service model like DAZN, the landing page also serve as the page where normally the conversion comes from. Thus, the landing page should provide as much information as needed to gain user's trust and drive them to register to the service. <br> <br>
                        As DAZN is a global service, there's a need to make a uniform design system to ensure the brand identity. However, this might cause problem because Japanese way of design and thinking is not similar to those from the Western. This project aims to understands what information do Japanese user needs in order for them to register and provide all of those informations in the landing page with a local look and feel without removing DAZN brand identity.
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
                            <li><a href="javascript:void(0)"><i class="fa fa-check-square"></i>Invision</a></li>
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
                <h2>DAZN Landing Page</h2>
                <h3>Problem</h3>
                <p>
                    This year, DAZN released their products on 2 new market, Italy and US in addition to their currect market (DACH, Japan, and Canada). As a global service, DAZN Design team provide a design system to protect the brand identity across all markets. As for Japan, there's a pro and cons of this design system because Japan's design and thinking is quite different with those from Japanese.<br> <br>

                    In Aprol 2018 DAZN conducted a research on landing page in Japan and most users could not relate DAZN Japan landing page to the word "local". "The website looks like it was made by the Chinese and translated to Japanese using Google Translate" - one of the user stated during the user interview. <br><br>

                    There's no one-for-all solution when talking about designing for global and Japanese. This project aims to address what user need in the landing page in order to convince them to registed to the service, improving the looks and feels of Japan landing page without throwing away DAZN brand identity. 
                </p>

                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/daznlp_current.png" alt="Current Webpage" width="720" />
                    <ol class="notes">
                        <li class="note-left" style="top: 70px; left: 80px; width: 230px"> The current website that need to be improved (look and feel, wording, etc) </li>
                    </ol>
                </div>

                <h3>Desk Research </h3>
                <p>
                    I did a simple research on why Japanese design is so different compared to the rest of the world(please email me if you want to see the presentation). In short, the reasons can be summarized in these points: <br> <br>
                    <ul>
                        <li>- Linguistic difference: not so many Japanese-based font so that most designers will opt for low to mid quality images so the web will load faster.</li>
                        <li>- Cultural difference: Japanese users prefers everything to be put upfront. They'll need to trust a service before the sign-up thus, most company tends to put a lot of text in their landing page</li>
                        <li>- Technology differences: Some poeple still using flip-phone. There is an increase in senior users buying pattern in Japan, and these users are not very tech-savy.</li>
                    </ul>
                </p>

                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/factors.png" alt="Why Japanese Design is so Different" width="480" />
                    <ol class="notes">
                        <li class="note-top" style="top: 0px; left: 300px; width: 230px"> Factors that affect Japanese design</li>
                        <li class="note-left" style="top: 100px; left: 0px; width: 230px">Japanese users basically need trust before commiting to a service. A lot of company tends to put a lot of informations.</li>
                    </ol>
                </div>

                <p>
                    On April 2018, UK team conducted a research on the current landing page and they found out some key findings: <br>
                    <ul>
                        <li>- User needs to know what contents DAZN offering</li>
                        <li>- The payment method, pricing fee, and billing cycle was not clear enough for user</li>
                        <li>- User felt that the supported device list is not clear enough</li>
                        <li>- User found it difficult to navigate across the website</li>
                    </ul>
                    <br> <br>
                    Based on the desk research and the key findings, I created some prototypes to adjust to Japanese users' needs. 
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Prototyping</h3>
                <p>I want to address these following problems with the prototype: </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Problem</th>
                          <th scope="col">Potential Solution</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Unclear pricing</th>
                          <td>- Bring the pricing to above fold section <br>
                            - Changing the pricing box design <br>
                          - Illustrate the billing cycle (prototype 2)</td>
                        </tr>
                        <tr>
                          <th scope="row">User does not understand about the service</th>
                          <td>- Add some video and sports icons<br>
                          - Add illustrations "why you should register to DAZN" (prototype 2)</td>
                        </tr> 
                        <tr>
                          <th scope="row">Supported device is not clear enough</th>
                          <td>- Add some device logo and link to help page</td>
                        </tr> 
                        <tr>
                          <th scope="row">Usability</th>
                          <td>- Change from dark theme to lighter theme<br>
                            - Change some wordings on the prototype <br>
                            - Adding a global navigation</td>
                        </tr>     
                    </table>
                </div>

                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/daznlp_prototype.gif" alt="Sample Prototype" width="720" />
                </div>

            </div>
        </div>


         <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Testing the Prototype</h3>
                <p>After creating the prototype, I worked together with the user testing company to test the prototype. The test methodology is a remote testing using online tools provided by the company. We gave user series of tasks they have to perform and then we record the whole activities. Users have to voicing their opinion during the test. <br><br>                  
                </p>

                <p>The users have to perform the same task on prototype 1, prototype 2, and the current website. User has to perform tasks and answer some questions per site. Here are some example of the task and questions:               
                </p>

                <ul>
                    <li>- Go to the given link and take a look, please describe what service does DAZN offers?</li>
                    <li>- Imagine you are about to signing to DAZN, how much do you have to pay? Mention all the pricing offered by DAZN. </li>
                    <li>- Find out if DAZN offered your favourite sports/teams/league</li>
                    <li>- How likely are you going to trust this service? Why or why not?</li>
                    <li>- And many more</li>
                </ul>
                
                <div class = "image-notes">
                    <img class="image img-responsive" src="images/portfolio/dazn/daznlp_testresult.png" alt="Usability Test Result" width="480" />
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Iteration</h3>
                <p>Based on the user research, we found out that most users favors prototype 2 compared to prototype 1 because prototype 2 contains a lot of visual that can help them to understand DAZN better. However, there are also some improvement that can be made on the prototype <br>
                Here are the most common findings: <br> 
                </p>
                <blockquote>
                    "D-Account, what does it means? Am I docomo user if I have d-account" - user expressing confussion related with Docomo conversion button <br>
                    "Putting docomo price upfront makes the normal price seems so expensive" - user, about putting both price at the very top <br>
                    "I don't see my team logo, does it mean DAZN does not have it?" <br>
                </blockquote>
                <p>The most common reason participants were dissatisfied with the prototype is that they cannot find their favourite sports team logo and they think DAZN does not offer it. The second reason is that they thin DAZN is part of Docomo and unless they use Docomo as their carier, they cannot register to DAZN <br><br></p>

                <p>So based on that finding, I create an improvement by modifying Docomo pricing box and improved the Docomo conversion button. I also delete the dual-pricing on top of the page to remove the impression that DAZN is expensive.</p>
            </div>
        </div>

        <div class="row post content">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 single-blog overflow">
                <h3>Learned Lesson</h3>
                <p>
                    Here at DAZN, we can create a landing page with our internal CMS called the landing page builder. This landing page builder works across all market, and if we want to add a new element to the landing page, we need to raise a request to the development team in London HQ. The development team has a lot of tickets in their backlog, therefore, building a prototype early and testing it early really help the landing-page builder project manager to manage the priority. We, designers and developers do not want to spend 6-months developing and releasing something which at the end user does not want. <br><br>

                    I also learned about how to create a task and question during the user testing. I also learned how to structure the flow for user testing. Instead of asking "Would you register to this service", the question "From scale 1 to 10, how would you rate the trustworthyness of this service" might work better. A good question is not a yes or no questions, If the respondent can give the answer, “It depends,” then it’s probably a bad question.
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
