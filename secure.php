<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Protected Content | Angelia Portfolio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">                                
                                    <h2>Protected Content</h2>
                                    <p>This content is password protected. To view it, please enter the password below: </p>


                                    <?php
                                    require('auth.php');
                                    $auth = new HtpasswdAuth('/home/angeliastefani/www/.htpasswd');

                                    if (strtolower($_SERVER['REQUEST_METHOD']) == 'post')
                                    {
                                        $username = isset($_POST['username']) ? $_POST['username'] : null;
                                        $password = isset($_POST['password']) ? $_POST['password'] : null;
                                        if ($auth->matches($username, $password))
                                        {
                                            $_SESSION['user'] = $username;
                                        }
                                        else
                                        {
                                            die ('Incorrect username or password');
                                        }
                                    } 
                                    else if (isset($_REQUEST['logout']))
                                    {
                                        session_destroy();
                                    }
                                    if (! isset($_SESSION['user'])):
                                        endif;?>

                                     <form id="protected-content-form" name="protected-form" action="login.php" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="username" value="guest">
                                             <input type="password" name="password" class="form-control" required="required" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-submit" value="Enter">
                                        </div>
                                    </form>

                                   

                                </div>
                            </div>
                            <a href="index.html" class="btn btn-error">RETURN TO THE HOMEPAGE</a>
                            <div id="social-footer" class="social-link">
                                <span><a href="https://www.dribbble.com/angeliastefani"><i class="fa fa-dribbble"></i></a></span>
                                <span><a href="https://www.codepen.io/angeliastefani"><i class="fa fa-codepen"></i></a></span>
                                <span><a href="https://www.linkedin.com/in/stefanie-angelia-103b156b"><i class="fa fa-linkedin"></i></a></span>
                                <span><a href="http://www.instagram.com/angeliastefani"><i class="fa fa-instagram"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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