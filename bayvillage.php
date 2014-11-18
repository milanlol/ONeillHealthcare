<!DOCTYPE html>
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="author"      content="Milan (perceptionmm.com)">
	<meta name="description" content="At Bay Village O'Neill Healthcare we work to promote a healthy and active lifestyle for each and every resident. ">
	<meta name="keywords" content="O'Neill Healthcare, O'Neill Managment, O'Neill Nursing Home, Bradley Bay, Assisted Living, Dialysis, Hospice, Independent Living, Memory Support, Rehab and Therapy, Skilled Nursing, Alzheimer's, Cleveland, Cleveland Nursing Homes, Cleveland Healthcare" />

	<title>Bay Village - O'Neill Healthcare &amp; Managment</title>

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

	<?php $page = "bb"; ?>

</head>


<body onload="initialize()">


	<!-- Fixed navbar -->
	<?php include 'inc/nav.php'; ?>
	<!-- /.navbar -->


	<header id="head" class="bradleybay"></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li class="active">Bay Village</li>
		</ol>

		<div class="row">
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">



				<div class="row widget">
					<div class="col-xs-12">
						<p><img src="assets/images/logos/bay_village_logo.png" alt="Bay Village Bradley Bay Logo" class="img-responsive full-img"></p>
						
					</div>
				</div>

				<div class="row widget">
					<div class="col-xs-12">
						<ul class="mini-nav row">
							
							<li class="call col-md-12">
								<a href="tel:+4408713474">
									<div class="btn btn-default btn-block">
										<div class="phonehide">
											<i class="fa fa-phone fa-2"></i>    Call 
										</div>
										<div class="phone-num">440-871-3474</div>
									</div> 
								</a>
								
							</li>

							<li class="visit col-md-12" >
								<a href="#map_canvas">
								<div class="btn btn-default btn-block">
										<i class="fa fa-location-arrow fa-2"></i>    Visit
								</div>
								</a>
							</li>

							<li class="write col-md-12">
								<div class="btn btn-default btn-block">
									<i class="fa fa-pencil fa-2"></i>     Write
								</div>
							</li>

							<li class="col-md-12">
								<a href="assets/newsletter/bayvillage/newsletter.pdf" target="blank">
									<div class="btn btn-default btn-block">
										<i class="fa fa-envelope fa-2"></i>    Newsletter
									</div>
								</a>
							</li>
					
						</ul>

						<div class="bbform form row">

		                  	<div class="form-group">

			                  	
			                    <input class="form-control" type="text" name="name" id="name" placeholder="Name">
			                   	
			                    <input class="form-control" type="text" name="email" id="email" placeholder="Email">

			                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
			                    
			                    <textarea name="message" id="message" rows="7" class="form-control" placeholder="Comments / Questions"></textarea>
			                  	<div id="result"></div>

		                	</div>

		                   	<button id="submit_btn" type="submit" class="btn btn-default btn-block">Submit</button>



						</div>
						
						
					</div>
				</div>
				<div class="row">
				<div class="widget col-sm-6 col-md-12 col-lg-12">

					<img src="assets/images/rooms/bay_village_room_1.jpg" alt="Bradley Bay - Bay Village Room" class="img-responsive full-img"/>
				</div>
				
				<div class="widget col-sm-6 col-md-12 col-lg-12">

					<img src="assets/images/rooms/bay_village_room_3.jpg" alt="Bradley Bay - Bay Village Room" class="img-responsive full-img"/>
					

				</div>
				<div class="widget col-sm-6 col-md-12 col-lg-12">

					<img src="assets/images/rooms/bay_village_room_4.jpg" alt="Bradley Bay - Bay Village Room" class="img-responsive full-img"/>
					

				</div>

				<div class="widget col-sm-6 col-md-12 col-lg-12">

					<a href="assets/images/rooms/BV.pdf" target="top">
						<img src="assets/images/rooms/floor_plans_onhc.jpg" alt="Bradley Bay - Bay Village Floor Plan" class="img-responsive full-img"/>
					</a>
					

				</div>

			


				</div>
				
				

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent locmaincontent">
				<header class="page-header">
					<h1 class="page-title centered">Welcome to O'Neill Healthcare <br> Bay Village </h1>
				</header>


				
				<p>
					Recognized as one of the finest health care centers in Northeastern Ohio, O'Neill Healthcare Bay Village believes in providing the highest quality of life to its residents in a caring, supportive, and homelike environment. We encourage the involvement of family and community, and active participation in a progressive rehabilitation plan.
				</p>

				

				<h2 class="centered">History</h2>
				<p>
					In 1962, John and Alva O'Neill constructed a twenty-five bed nursing home on a quiet wooded site off Bradley Road in Bay Village. Since then, they have nurtured their clientele and expanded the facility and the services offered in order to meet the challenging, growing needs of the residents and their families in today's society. The results of their efforts are evident, as the outstanding reputation and numerous awards achieved by the center are a direct result of the O'Neill family's personal commitment to maintain a sincere respect for each resident and to provide the finest health care services.
				</p>
				<p>
					The second generation of O'Neill's, headed by John T. O'Neill, now operates a 138 room nursing facility and 33 assisted living suites on six acres. More importantly, the facility is recognized as one of the finest health care centers in Northeastern Ohio, ranking in the top 10% of all nursing homes in the State for Resident Satisfaction. As the needs of residents and their families have changed through the years, so have the services at O'Neill Healthcare Bay Village.
				</p>


				<h2 class="centered">Services</h2>
				<h3>Skilled Nursing Care</h3>
				<p>
					O'Neill Healthcare Bay Village provides skilled nursing services 24-hours a day to meet many diverse diagnoses. A special medical unit has also been designated where residents will receive the nursing care and rehabilitation services needed to maximize their strength and mobility.
				</p>
				<p>
					In addition, patients who are discharged from the hospital before they are confident enough to return to their previous residence will benefit from O'Neill Healthcare Bay Village's skilled unit. 
				</p>

				<h3>Assisted Living</h3>
				<p>
					The 33 assisted living suites at O'Neill Healthcare Bay Village offer complete independence and the security of knowing a competent medical team is close at hand when needed. All residents enjoy the privacy of their own apartment, in a beautifully appointed setting, designed to meet the needs of older individuals. Accommodations in the assisted living suites include many amenities and services. Meals, housekeeping, and linens are included with the suite. Transportation services provide access to surrounding communities. All utilities, including local telephone and cable connections, are provided for each suite.
				</p>
				<p>
					The Center's nursing staff responds when one of the three emergency buttons located in each suite is pressed. Staff also provides light medical attention, such as supervision when taking medication. Plus, all of the health care services offered at the nursing facility are available as outpatient services for the assisted living residents. 
				</p>
				<h3>Rehabilitative Therapies</h3>
				<p>
					O'Neill Healthcare Bay Village and Orthopaedics Associates came together several years ago to form the Orthopaedic Clinic at O'Neill Healthcare Bay Village. The center offers physician consultation, evaluation, and post surgical follow-ups within our facility. The center offers treatments and services that are covered by most insurance plans and Medicare. 
				</p>
				<h3>Hospice Care</h3>
				<p>
					Your doctor and the hospice team will work with you and your family to set up a plan of care that meets your needs. Your plan of care includes hospice services that Medicare covers.  Once you qualify for hospice care, you’ll have a specially trained team and support staff available to help you and your family cope with your illness. 
				</p>

				<div class="row quickinfo">
					
					<div class="col-sm-6">
						<p>
							O'Neill Healthcare Bay Village<br>
							605 Bradley Road<br>
							Bay Village, OH 44140
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							P 440.871.3474<br>
							F 440.871.4743<br>
							<a href="mailto:info@oneillhc.com">info@oneillhc.com</a>
						</p>
					</div>

				</div>
				
				
			</article>
			<!-- /Article -->
			

		</div>

		
			
					
				
				
			</div>
	</div>	<!-- /container -->


	
	<div id="map_canvas"></div>
    <div id="directionsPanel"></div>

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
	
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
		var geocoder;
		var directionsService;
		var directionsDisplay;

		function initialize() {
		    var latlng = new google.maps.LatLng(41.479921, -81.958793);
		    var myOptions = {
		        zoom: 13,
		        center: latlng,
		        mapTypeId: google.maps.MapTypeId.ROADMAP,
		        styles: [
				{
					featureType: "landscape",
					stylers: [
					{ saturation: -100 },
					{ lightness: 65 },
					{ visibility: "on" }
					]
				},{
					featureType: "poi",
					stylers: [
					{ saturation: -100 },
					{ lightness: 51 },
					{ visibility: "simplified" }
					]
				},{
					featureType: "road.highway",
					stylers: [
					{ saturation: -100 },
					{ visibility: "simplified" }
					]
				},{
					featureType: "road.arterial",
					stylers: [
					{ saturation: -100 },
					{ lightness: 30 },
					{ visibility: "on" }
					]
				},{
					featureType: "road.local",
					stylers: [
					{ saturation: -100 },
					{ lightness: 40 },
					{ visibility: "on" }
					]
				},{
					featureType: "transit",
					stylers: [
					{ saturation: -100 },
					{ visibility: "simplified" }
					]
				},{
					featureType: "administrative.province",
					stylers: [
					{ visibility: "off" }
					]
			/** /
				},{
					featureType: "administrative.locality",
					stylers: [
						{ visibility: "off" }
					]
				},{
					featureType: "administrative.neighborhood",
					stylers: [
						{ visibility: "on" }
					]
					/**/
				},{
					featureType: "water",
					elementType: "labels",
					stylers: [
					{ visibility: "on" },
					{ lightness: -25 },
					{ saturation: -100 }
					]
				},{
					featureType: "water",
					elementType: "geometry",
					stylers: [
					{ hue: "#ffff00" },
					{ lightness: -25 },
					{ saturation: -97 }
					]
				}
				],
		    };

		    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		    var marker = new google.maps.Marker({
		        position: new google.maps.LatLng(41.479921, -81.958793),
		        map: map,
		        title: 'Bradley bay',
		        clickable: true
		    });

		    var infowindow = new google.maps.InfoWindow({
		        content: "Your address: <input id='clientAddress' type='text'>"+
		                "<input type='button' onClick=getDir() value='Go!'>"
		    });

		    google.maps.event.addListener(marker, 'click', function () {
		        infowindow.open(map, marker);
		    });
		    geocoder = new google.maps.Geocoder();
		    directionsService = new google.maps.DirectionsService();
		    directionsDisplay = new google.maps.DirectionsRenderer({
		        suppressMarkers: false
		    });
		    directionsDisplay.setMap(map);
		    
		    directionsDisplay.setPanel(document.getElementById("directionsPanel"));
		   	
		}

		function getDir() {
		    geocoder.geocode({
		        'address': document.getElementById('clientAddress').value
		    },

		    function (results, status) {
		        if (status == google.maps.GeocoderStatus.OK) {
		            var origin = results[0].geometry.location;
		            var destination = new google.maps.LatLng(41.479921, -81.958793);

		            var request = {
		                origin: origin,
		                destination: destination,
		                travelMode: google.maps.DirectionsTravelMode.DRIVING
		            };

		            directionsService.route(request, function (response, status) {
		                if (status == google.maps.DirectionsStatus.OK) {
		                    directionsDisplay.setDirections(response);
		                }
		            });

		        } else {
		            document.getElementById('clientAddress').value =
		                "Directions cannot be computed at this time.";
		        }
		    });
		}
    </script>

    <script>

	
		$(".phone-num").hide();
		$(".call").click(function(){
			$(".phone-num").show();
			$(".phonehide").hide();
		});

		$(".bbform").hide();
		$(".write").click(function(){
			$(".mini-nav").css("border-bottom" , "none");
			$(".bbform").slideDown(1000);

		});


		// placeholder ie fix
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

		// smooth scroll
		 $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });

	</script>

	<!-- Google Maps 
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	-->
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