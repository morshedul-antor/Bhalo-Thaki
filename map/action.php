<?php
	require 'education.php';
	$edu = new education;
	$edu->setId($_REQUEST['id_doc']);
	$edu->setLat($_REQUEST['lat']);
	$edu->setLng($_REQUEST['lng']);
	$status = $edu->updateDoctorsWithLatLng();
	if($status == true) {
		echo "Updated...";
	} else {
		echo "Failed...";
	}
 ?>
