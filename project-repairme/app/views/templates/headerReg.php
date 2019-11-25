<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Registrasi Mitra</title>
		<!-- untuk form regitrasi -->
		<!-- Bootstrap CSS File -->
		<link href="<?= BASEURL; ?>/homes/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?= BASEURL; ?>/css/reset-min.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/css/mstepper.css">
		<link rel="stylesheet" href="<?= BASEURL; ?>/mstepper.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="<?= BASEURL; ?>/js/mstepper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script src="<?= BASEURL; ?>/js/jquery-3.4.1.js"></script>
		<!-- untuk leafletjs -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
			integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
			crossorigin=""/>
			<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
			integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
			crossorigin=""></script>
			<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
			<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
			<link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
			<script src="<?= BASEURL; ?>/js/Control.Coordinates.js"></script>
			<link rel="stylesheet" href="<?= BASEURL; ?>/css/petaLokasi.css">
			
			
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