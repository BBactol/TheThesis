<?php
session_start();
if(isset($_GET['authorized'])){
    $_SESSION["authorized"] = $_GET['authorized'];
}
function headtab()
	{
	if ($_SESSION["authorized"]=="true")
		{
		echo '
		<span class="tab" style="float:right;"><a href="logout.php">Logout</a></span>
		<span class="tab" style="float:right;"><a href="#">Account</a></span>
		';
		}
		else
		{
		echo'
		<span class="tab" style="float:right;"><a href="register.html">Register</a></span>
		<span class="tab" style="float:right;"><a href="login.html">Login</a></span>
		';		
		}		
	}
?>
<html>
	<head>
		<title>Online GPS Tracker-Map</title>
		<script type="text/javascript" 
		src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.1.min.js">
		</script>
		<link rel="stylesheet" type="text/css" href="main.css">
		<!-- Leaflet sources -->
		<link rel="stylesheet" href="lib/leaflet.css" />
		<script src="lib/leaflet.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="lib/Google.js"></script>
	</head>
<body>
	<div id="head">
	<label class="unselectable">&nbsp </label>
	</div>
	<div id="menu">
	<!--	<span class="tab" style="float:left;"><a href="main.html">Home</a></span> -->
		<span class="tab" style="float:left;"><a href="map.php">Map</a></span>
	<!--	<span class="tab" style="float:left;"><a href="#">About Us</a></span> -->
	<?php
		headtab();
	?>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {
	$(".tab").hover(
	//Hover over
	function() {
	$(this).addClass("mouseonit");
	},
	//Hover out
	function() {
	$(this).removeClass("mouseonit");
	});
	});
	</script>
	<table cellpadding=5px>
		<tr>
			<td>
			<div id="map"></div>
			<!-- <script>
			//initMap callsback the 
			function initMap() {
				var mapDiv = document.getElementById('map');
				var map = new google.maps.Map(mapDiv, {
					center: {lat: 10.316, lng: 123.891},
					zoom: 11,
					mapTypeId: google.maps.MapTypeId.HYBRID });
				marker = new google.maps.Marker({
					map: map,
					draggable: false,
					position: {lat: 10.316, lng: 123.891}
				});
				}
			</script>
			<script async defer
				src="https://maps.googleapis.com/maps/api/js?&callback=initMap">
			</script>
			//async is used for realtime rendering of the map-->
			<script>
				var map = L.map('map').setView([10.2873173, 123.9564715], 9);
				var googleLayer = new L.Google('HYBRID');
				map.addLayer(googleLayer);
				var googleRdmapLay = new L.Google('ROADMAP');
				map.addLayer(googleRdmapLay);
				//var baseMaps = {'Satellite Map':googleLayer,'Roadmap':googleRdmapLay};
				//L.control.layers(baseMaps).addTo(map);
			</script>
			</td>
			<td>
				<fieldset>
				<form>
				<p><input type="date" name="date"</p>
				</form>
				</fieldset>
			</td>
		</tr>
	</table>
</body>
</html>