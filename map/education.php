<?php

	class education	{
		private $id_doc;
		private $f_name;
		private $l_name;
		private $specialty;
		private $address;
		private $pic;
		private $lat;
		private $lng;
		private $conn;
		private $tableName = "info_doc";

		function setId($id_doc) { $this->id_doc = $id_doc; }
		function getId() { return $this->id_doc; }
		function setF_Name($f_name) { $this->f_name = $f_name; }
		function getF_Name() { return $this->f_name; }
		function setL_Name($l_name) { $this->l_name = $l_name; }
		function getL_Name() { return $this->l_name; }
		function setSpecialty($specialty) { $this->specialty = $specialty; }
		function getType() { return $this->specialty; }
		function setAddress($address) { $this->address = $address; }
		function getAddress() { return $this->address; }
		function setLat($lat) { $this->lat = $lat; }
		function getLat() { return $this->lat; }
		function setLng($lng) { $this->lng = $lng; }
		function getLng() { return $this->lng; }

		public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getDoctorsBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE lat IS NULL AND lng IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllDoctors() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateDoctorsWithLatLng() {
			$sql = "UPDATE $this->tableName SET lat = :lat, lng = :lng WHERE id = :id";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':lat', $this->lat);
			$stmt->bindParam(':lng', $this->lng);
			$stmt->bindParam(':id', $this->id);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>
