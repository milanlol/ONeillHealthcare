<!DOCTYPE html>
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="author"      content="Milan (perceptionmm.com)">
	<meta name="description" content="At O'Neill Healthcare we provide the highest quality of life to each resident by utilizing a holistic approach that involves family and community. We encourage active participation in a progressive rehabilitation plan. All of this takes place in a caring, supportive, and homelike atmosphere.">
	<meta name="keywords" content="O'Neill Healthcare, O'Neill Managment, O'Neill Nursing Home, Bradley Bay, Center Ridge, Lakewood, Wellington, Assisted Living, Dialysis, Hospice, Independent Living, Memory Support, Rehab and Therapy, Skilled Nursing, Alzheimer's, Cleveland, Cleveland Nursing Homes, Cleveland Healthcare" />

	<title>Contact Us - O'Neill Healthcare &amp; Managment</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="favicon/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="favicon/browserconfig.xml">
	
	<!-- FancyBox -->
    <link rel="stylesheet" href="assets/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lte IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<link rel="stylesheet" href="assets/css/ie.css">
	<![endif]-->

	<?php $page = "contact"; ?>
</head>

<body>

	<?php include 'inc/nav.php'; ?>

	<!-- Header -->
	<header id="head" class="contact"></header>

	<!-- Container -->
	<div class="container">
		<!-- Breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact</li>
		</ol>
		<div class="row">
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>
				<p>
					We would like to hear from you. Fill out the form below with some info about yourself and we will get back to you as soon as we can. 
				</p>
				<br>
				<!-- Form -->
				<fieldset id="contact_form">
					<div class="row">
						<div class="col-sm-4 form-short">
							<input class="form-control" type="text" name="name" id="name" placeholder="Name">
						</div>
						<div class="col-sm-4 form-short">
							<input class="form-control" type="text" name="email" id="email" placeholder="Email">
						</div>
						<div class="col-sm-4 form-short">
							<input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12 form-short">
							<textarea name="message" id="message" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<div id="result"></div>
						</div>
						<div class="col-sm-6 text-right">
							<button class="btn btn-action no-cssgradients" type="button" id="submit_btn">Send message</button>
						</div>
					</div>
				</fieldset> <!-- /Form -->
			</article> <!-- /Article -->
		</div> <!-- /Row -->
	</div> <!-- /Container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>
	
	<footer id="footer">

		<?php include 'inc/footer.php'; ?>

	</footer>	
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/jquery.placeholder.js"></script>
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>

	<script>
        jQuery('document').ready(function(){

        	$('input, textarea').placeholder();
           
            (function ($) {
                "use strict";

                // Detecting IE
                var oldIE;
                if ($('html').is('.ie6, .ie7, .ie8')) {
                    oldIE = true;
                }

                if (oldIE) {
                    jQuery('label').show();
                } else {
                    jQuery('label').hide();
                }

            }(jQuery));

            /* Form Submition Script */

            $("#submit_btn").click(function() { 

                $('#result')[0].scrollIntoView(true);

                //get input field values
                var user_name      	= $('input[name=name]').val(); 
                var user_email      = $('input[name=email]').val();
                var user_phone      = $('input[name=phone]').val();
                var user_message    = $('textarea[name=message]').val();
                
                //simple validation at client's end
                //we simply change border color to red if empty field using .css()
                var proceed = true;
                if(user_name==""){ 
                    $('input[name=name]').css('border-color','red'); 
                    proceed = false;
                }
                if(user_email==""){ 
                    $('input[name=email]').css('border-color','red'); 
                    proceed = false;
                }
                if(user_phone=="") {    
                    $('input[name=phone]').css('border-color','red'); 
                    proceed = false;
                }
                if(user_message=="") {  
                    $('textarea[name=message]').css('border-color','red'); 
                    proceed = false;
                }
                
                //everything looks good! proceed...
                if(proceed) 
                {
                    //data to be sent to server
                    post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
                    
                    //Ajax post data to server
                    $.post('contact_me.php', post_data, function(data){  
                        
                        //load success massage in #result div element, with slide effect.       
                        $("#result").hide().html('<div class="success">'+data+'</div>').slideDown();
                        
                        //reset values in all input fields
                        $('#contact_form input').val(''); 
                        $('#contact_form textarea').val(''); 
                        
                    }).fail(function(err) {  //load any error data
                        $("#result").hide().html('<div class="error">'+err.statusText+'</div>').slideDown();
                    });
                }
                        
            });
            
            //reset previously set border colors and hide all message on .keyup()
            $("#contact_form input, #contact_form textarea").keyup(function() { 
                $("#contact_form input, #contact_form textarea").css('border-color',''); 
                $("#result").slideUp();
            });
        });
    </script>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-55359204-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>