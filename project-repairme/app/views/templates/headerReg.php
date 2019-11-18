<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>headerREG</title>
		<!-- untuk form regitrasi -->
		<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/css/reset-min.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/css/mstepper.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/mstepper.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="<?= BASEURL; ?>/js/mstepper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script src="<?= BASEURL; ?>/js/jquery-3.4.1.js"></script>


		<!-- untuk leafletjs -->
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/leaflet.css" />
        <script src="<?= BASEURL; ?>/js/leaflet.js"></script>
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/petaLokasi.css">
        <script src="<?= BASEURL; ?>/js/Control.Coordinates.js"></script>
		<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
		
		<style>
		
		}
		

		.btn,
		.btn-large,
		.btn-small,
		.btn-flat {
		border-radius: 4px;
		font-weight: 500;
		}
		.card:hover {
		box-shadow: 0px 10px 35px 0px rgba(0, 0, 0, 0.18);
		}
		
		.kelassemu{
			padding-right: 25%;
			
			width: 100%;
		}
		.card {
			/*background-color: black;*/
		width: 100%;
		border-radius: 15px;
		box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.15);
		}
		
		#map{
			width: 100%;
			height: 400px;
			display: inline-block;
		}
		</style>

	</head>
	<body>