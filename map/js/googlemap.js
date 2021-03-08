var map;
var geocoder;

function loadMap() {
	var dhaka = {lat: 23.8103, lng: 90.4125};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: dhaka
    });

    var marker = new google.maps.Marker({
      position: dhaka,
      map: map
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllDoctors(allData)
}

function showAllDoctors(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var strong = document.createElement('strong');

		strong.textContent = data.f_name + " " + data.l_name;
		content.appendChild(strong);

		var specialty = document.createElement('specialty');
		specialty.textContent ='  ' + data.specialty;
		content.appendChild(specialty);

		//var img = document.createElement('img');
		//img.src ='../img-doctor/img/testimonials-1.jpg';
		//img.style.width = '100px';
		//content.appendChild(img);

		var address = document.createElement('address');
		address.textContent = data.address;
		content.appendChild(address);

		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.lat, data.lng),
	      map: map
	    });

	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.name + ' ' + data.address;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateDoctorWithLatLng(points);
	      } //else {
	        //a('Geocode was not successful for the following reason: ' + status);
	      //}
	    });
	});
}

function updateDoctorWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})

}
