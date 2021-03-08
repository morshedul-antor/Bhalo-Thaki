<!DOCTYPE html>
<html>
<head>
	<title>Online Telemedicine</title>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 600px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid black;
		}
		#data, #allData {
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>Online Telemedicine Doctors Map</h1></center>
		<?php
			require 'education.php';
			$edu = new education;
			$coll = $edu->getDoctorsBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllDoctors();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';
		 ?>
		<div id="map"></div>
	</div>
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhaFE4SPubLOfH3eFKwUU0LwLh7KV7bhw&callback=loadMap">
</script>
</html>
