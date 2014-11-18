/* ----------

This applies 
to contact 
page only

---------- */

google.maps.event.addDomListener(window, 'load', init);

var map;

function init() {
	var mapOptions = {
		center: new google.maps.LatLng(41.44230125, -81.92061475), // Average of 4 Locations
		zoom: 10,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
		},
		disableDoubleClickZoom: true,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
		},
		scaleControl: false,
		scrollwheel: true,
		streetViewControl: true,
		draggable : true,
		overviewMapControl: false,
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
		
	}

	var mapElement = document.getElementById('map');
	var map = new google.maps.Map(mapElement, mapOptions);

	/*
	var locations = [
	['Bradley Bay', 41.479933, -81.958766, 4],
	['Center Ridge', 41.383823, -82.055809, 5],
	['Lakewood Senior Health Campus', 41.486000, -81.788701, 3],
	['Wellington Place', 41.419449, -81.879183, 2]
	['Fariview Park', 41.449277, -81.849708]
	
	];
	*/


	// -------------- Locations
	// -------------- Bradley Bay

    var marker1 = new google.maps.Marker({
    position: new google.maps.LatLng(41.479933, -81.958766),
    map: map,
    icon: ''
    });

    // Bradley Bay INFO WINDOW
    var infowindow1 = new google.maps.InfoWindow({
    content: '<strong>Bradley Bay</strong><br />605 Bradley Road<br />Bay Village, Ohio 44140<br />440-871-3474<br /><br /><a href="bradleybay.php" target="_blank">Read more</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker1, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow1.open(map, marker1);
    });
    // -------- END OF Bradley Bay 


    // -------------- Center Ridge
    var marker2 = new google.maps.Marker({
    position: new google.maps.LatLng(41.383823, -82.055809),
    map: map,
    icon: ''
    });

    // Center Ridge INFO WINDOW
    var infowindow2 = new google.maps.InfoWindow({
    content: '<strong>Center Ridge</strong><br />38600 Center Ridge Road<br />North Ridgeville, Ohio 44039<br />440-327-1295<br /><br /><a href="centerridge.php" target="_blank">Read more</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker2, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow2.open(map, marker2);
    });
    // -------- END OF Center Ridge


    // -------------- Lakewood
    var marker3 = new google.maps.Marker({
    position: new google.maps.LatLng(41.486000, -81.788701),
    map: map,
    icon: ''
    });

    // Lakewood INFO WINDOW
    var infowindow3 = new google.maps.InfoWindow({
    content: '<strong>Lakewood</strong><br />13900 Detroit Avenue<br />Lakewood, OH 44107<br />216-228-7650 <br /><br /><a href="lakewood.php" target="_blank">Read more</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker3, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow3.open(map, marker3);
    });
    // -------- END OF Lakewood


    // --------------  Wellington Place
    var marker4 = new google.maps.Marker({
    position: new google.maps.LatLng(41.419478, -81.879263),
    map: map,
    icon: ''
    });

    // Wellington Place INFO WINDOW
    var infowindow4 = new google.maps.InfoWindow({
    content: '<strong>Wellington Place</strong><br />4800 Clague Road<br />North Olmsted, Ohio 44070<br />440-734-9933<br /><br /><a href="wellington.php" target="_blank">Read more</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker4, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow4.open(map, marker4);
    });
    // -------- END OF Wellington Place


    // --------------  Fariview Park
    var marker5 = new google.maps.Marker({
    position: new google.maps.LatLng(41.449277, -81.849708),
    map: map,
    icon: ''
    });

    // Fariview Park INFO WINDOW
    var infowindow5 = new google.maps.InfoWindow({
    content: '<strong>Fariview Park</strong><br />20770 Lorain Road<br />Fairview Park Ohio 44126<br />440-331-0300<br /><br /><a href="fairview.php" target="_blank">Read more</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker5, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow5.open(map, marker5);
    });
    // -------- END OF Wellington Place

}