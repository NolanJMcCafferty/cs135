(function() {
	window.onload = function() {
		alert("got here");
		var map = createmap();
		var bounds = new google.maps.LatLngBounds();
		
		// Creating an array that will contain the coordinates 
		// for places
		var places = [];
		var titles = [];
		var info = [];
		
		// Adding a LatLng object for each city
		places.push(new google.maps.LatLng(42.332221, -71.176220));
		titles.push('Tudor and Beacon');
		info.push('Tudor and Beacon');
		places.push(new google.maps.LatLng(42.330933, -71.169691));
		titles.push('Hammond and Lawrence');
		info.push('Hammond and Lawrence');
		places.push(new google.maps.LatLng(42.335108,-71.166478));
		titles.push('Alumni Stadium');
		info.push('<a href="http://bceagles.cstv.com/sports/m-footbl/bc-m-footbl-body.html" target="_blank">BC Football Page</a>');
		places.push(new google.maps.LatLng(42.33626, -71.16863));
		titles.push('Maloney Hall');
		info.push(''Maloney Hall');
		places.push(new google.maps.LatLng(42.33558, -71.17052));
		titles.push('Gasson Hall');
		info.push('Gasson Hall');
		places.push(new google.maps.LatLng(42.344161, -71.155969));
		titles.push('Weston Jesuits');
		info.push('Weston Jesuits');
		places.push(new google.maps.LatLng(42.33329, -71.17209));
		titles.push('McElroy Commons');
		info.push('You can get a <a href="http://www.nytimes.com/2011/03/27/magazine/mag-27Eat-t-000.html" target="_blank">screaming eagle</a> here ');
		
		// Looping through the names and places arrays
		for (var i = 0; i < places.length; i++) {
		
			// Adding the marker as usual
			var marker = new google.maps.Marker({
				position: places[i], 
				map: map,
				title: titles[i]
			});
			
			// Wrapping the event listener inside an anonymous function 
			// that we immediately invoke and passes the variable i to.
			(function(i, marker) {
				// Creating the event listener. It now has access to the values of
				// i and marker as they were during its creation
				google.maps.event.addListener(marker, 'click', function() {
				
					var infowindow = new google.maps.InfoWindow({
						content: info[i]
					});
					
					infowindow.open(map, marker);
				
				});
				
			})(i, marker);
			bounds.extend(places[i]);
		}
		map.fitBounds(bounds);
	}
	
	function createmap(){
		// Creating an object literal containing the properties 
		// we want to pass to the map  
		var options = {
			zoom: 3,
			center: new google.maps.LatLng(42.33626, -71.16863),
			mapTypeId: google.maps.MapTypeId.SATELLITE
		};
		
		// Creating the map  
		var map = new google.maps.Map(document.getElementById('map-canvas'), options); 
		return map;
	}

})();