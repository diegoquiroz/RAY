<?php

if(isset($_POST['email'])) {

    $email_to = "hellobotgard@gmail.com";

    $email_subject = "Website Contact";


    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['message'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $email_message = "Form details below.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";


	// create email headers

	$headers = 'From: '.$email."\r\n".

	'Reply-To: '.$email."\r\n" .

	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);


?>



<!-- include your own success html here -->



<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Contacto Botgard</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link href="../../css/style.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css" media="all" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="apple-touch-icon" href="../../img/app_icon.png">
</head>
<body id="top" class="scrollspy pages pages-blue">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!--Navigation-->
<div class="navbar-fixed">
   <nav id="nav_f" class="default_color" role="navigation">
       <div class="container">
           <div class="nav-wrapper"><a id="logo-container" href="#top" class="brand-logo">Botgard</a>
           <ul class="right" style="font-size:14px;line-height:64px">
               <li><a href="http://botgard.com">Inicio</a></li>
               <li><a href="http://blog.botgard.com">Blog</a></li>
               <li><a href="p/dev">Dev</a></li>
               <li><a href="p/contact">Contacto</a></li>
           </ul>
           <ul id="nav-mobile" class="side-nav" style="font-size:14px;line-height:64px">
               <li><a href="http://botgard.com">Inicio</a></li>
               <li><a href="http://blog.botgard.com">Blog</a></li>
               <li><a href="p/dev">Dev</a></li>
               <li><a href="p/contact">Contacto</a></li>
           </ul>
           <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
       </div>
   </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h3 class="text_h center header cd-headline letters type">
            <span>Gracias por contactarnos, en breve responderemos al mensaje</span>
        </h3>
    </div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">
        <div class="row">
<!--             <div class="col l3 s12">
                <h5 class="white-text">joashpereira.com</h5>
                <ul>
                    <li><a class="white-text" href="http://www.joashpereira.com/">Home</a></li>
                    <li><a class="white-text" href="http://www.joashpereira.com/blog">Blog</a></li>
                </ul>
            </div> -->
            <ul style="display:flex;flex-direction:row;display:-webkit-flex;-webkit-flex-direction:row;justify-content:center">
                    <li><a href="https://github.com/botgard" class="btn-social btn-outline" data-toggle="tooltip" data-placement="top" title="Github"><i class="fa fa-fw fa-github fa-2x" style="color:white;margin:0 5px;"></i></a>
                    </li>
                    <li><a href="http://twitter.com/botgards" class="btn-social btn-outline" title="Twitter"><i class="fa fa-fw fa-twitter fa-2x" style="color:white;margin:0 5px;"></i></a>
                    </li>
                    <li><a href="mailto:HelloBotgard@gmail.com" class="btn-social btn-outline" title="Email"><i class="fa fa-fw fa-envelope fa-2x" style="color:white;margin:0 5px;"></i></a>
                    </li>

            </ul>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
             <a class="white-text" href="http://botgard.com">© Botgard</a>. 2015 Todos los derechos reservados.
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>

    </body>
</html>




<?php

}

?>
