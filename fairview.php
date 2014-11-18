<!DOCTYPE html>
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="author"      content="Milan (perceptionmm.com)">
	<meta name="description" content="At Bay Village O'Neill Healthcare we work to promote a healthy and active lifestyle for each and every resident. ">
	<meta name="keywords" content="O'Neill Healthcare, O'Neill Managment, O'Neill Nursing Home, Bradley Bay, Assisted Living, Dialysis, Hospice, Independent Living, Memory Support, Rehab and Therapy, Skilled Nursing, Alzheimer's, Cleveland, Cleveland Nursing Homes, Cleveland Healthcare" />

	<title>Fairview Park - O'Neill Healthcare &amp; Managment</title>

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

	<?php $page = "fp"; ?>

</head>

<body onload="initialize()">

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
	  		var js, fjs = d.getElementsByTagName(s)[0];
	  		if (d.getElementById(id)) return;
	  		js = d.createElement(s); js.id = id;
	  		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=557918634301713&version=v2.0";
	  		fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

		
	</script>


	<!-- Fixed navbar -->
	<?php include 'inc/nav.php'; ?>
	<!-- /.navbar -->


	<!-- Header -->
	<header id="head" class="fairview">
		<div class="container">
			<div class="row">
				<div class="titles">
					<h1 class="lead">Fairview Park</h1>
					<p class="tagline">Coming Fall 2014</p>
					
				</div>
				
			</div>

		</div>

	</header>
	<!-- /Header -->

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li class="active">Fairview Park</li>
		</ol>

		<div class="row">
			
			
			<br>
			<br>
			<br>


			

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
	
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
		var geocoder;
		var directionsService;
		var directionsDisplay;

		function initialize() {
		    var latlng = new google.maps.LatLng(41.449277, -81.849708);
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
		        position: new google.maps.LatLng(41.449277, -81.849708),
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
		            var destination = new google.maps.LatLng(41.449277, -81.849708);

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