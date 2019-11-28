<!DOCTYPE html>
<html>
<head>
	<title>Vehicles</title>
	<style>
	</style>
</head>
<body style="background-image: url(bmw.png);">
<p style="font-family: sans-serif; size: 25px;">
<?php
	class Vehicle{
		var $vehicle;
		var $fuel;
		var $passenger;
		var $speed;

		function setVehicleType($vech){
			$this->vehicle = $vech;
		}
		function getVehicleType(){
			echo $this->vehicle."<br/>";
		}

		function setVehicleFuel($fu){
			$this->fuel = $fu;
		}
		function getVehicleFuel(){
			echo $this->fuel."<br/>";
		}

		function setVehiclePassenger($pass){
			$this->passenger = $pass;
		}
		function getVehiclePassenger(){
			echo $this->passenger."<br/>";
		}

		function setVehicleSpeed($spd){
			$this->speed = $spd;
		}
		function getVehicleSpeed(){
			echo $this->speed."<br/>";
		}
	}
//--------------------------------------------------------------
	

	$bmw = new Vehicle();
	$bmw->setVehicleType("Vehicle Type: BMW");
	$bmw->getVehicleType();

	$bmw->setVehicleFuel("Diesel");
	$bmw->getVehicleFuel();

	$bmw->setVehiclePassenger(4);
	$bmw->getVehiclePassenger();

	$bmw->setVehicleSpeed("300ms<br/>");
	$bmw->getVehicleSpeed();
//--------------------------------------------------

	$motor = new Vehicle();
	$motor->setVehicleType("Vehicle Type: Yamaha Aerox");
	$motor->getVehicleType();

	$motor->setVehicleFuel("Diesel");
	$motor->getVehicleFuel();

	$motor->setVehiclePassenger(2);
	$motor->getVehiclePassenger();

	$motor->setVehicleSpeed("129ms");
	$motor->getVehicleSpeed();
?>
</p>
</body>
</html>