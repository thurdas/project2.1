<?php
if(isset($_POST['email'])) {
 
    $to = "mail@fit256.com";
    $subject = "Website form question";
 
    function died($error) {
        echo $error;
        die();
    }
    
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $message = $_POST['message']; 
 
    $email_message .= "Name: ".$name."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Comments: ".$message."\n";
 

$headers = 'From: '.$email_from."\r\n";

    mail($to, $subject, $message, $headers);  

}
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Fit 256 - Aarhus </title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="=css/font-awesome.css" rel="stylesheet">


    </head>

    <body>

        <div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="#">Brand</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">HOME</a>
                        </li>
                        <li><a href="offer.html">OFFER</a>
                        </li>
                        <li><a href="about.html">ABOUT US</a>
                        </li>

                        <li><a href="contact.html" class="active">CONTACT US</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>



        <div class=" move">
            <div class="row">
                <div class="header_banner_other">
                    <div class="container-sm content-lg"></div>
                </div>
            </div>
        </div>


        <h1>Thank you for contacting us ! We will get in touch with you as soon as possible :)</h1>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 footerleft ">
                        <div class="logofooter">LOGO</div>

                        <p><i class="fa fa-map-pin"></i> Address: 210, DK</p>
                        <p><i class="fa fa-phone"></i> Phone (Denmark) : +45 92 38 40 59</p>
                        <p><i class="fa fa-envelope"></i> E-mail : info@fit256.com</p>

                    </div>
                    <div class="col-md-4 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7">GENERAL LINKS</h6>
                        <ul class="footer-ul">
                            <li><a href="#"> Career</a></li>
                            <li><a href="#"> Client Reviews</a></li>
                            <li><a href="#"> Terms & Conditions</a></li>
                            <li><a href="#"> Frequently Ask Questions</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 paddingtop-bottom">
                        <h6 class="heading7">FOLLOW US</h6>
                        <ul class="footer-ul">
                            <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright">
            <div class="container">
                <div class="col-md-4 col-md-offset-4 ">
                    <p class="center">© 2017 - All Rights reserved by FIT256</p>
                </div>

            </div>
        </div>







        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>



    </body>

    </html>
