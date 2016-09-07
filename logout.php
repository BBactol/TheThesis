<?php
//session_start();
//session_destroy();
function logout()
{
	echo '
			<table class="login">
				<tr>
					<td>
						You have logged out.
					</td>
				</tr>
			</table>
	';
}
?>
<html>
	<head>
		<title>Online GPS Tracker-Login</title>
		<script type="text/javascript" 
		src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.1.min.js">
		</script>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
<body>
	<!--<div id="container">-->
	<div id="head">
	<label class="unselectable">&nbsp </label>
	</div>
	<div id="menu">
		<!--	<span class="tab" style="float:left;"><a href="main.html">Home</a></span> -->
		<span class="tab" style="float:left;"><a href="map.html">Map</a></span>
	<!--	<span class="tab" style="float:left;"><a href="#">About Us</a></span> -->
		<span class="tab" style="float:right;"><a href="register.html">Register</a></span>
		<span class="tab" style="float:right;"><a href="login.html">Login</a></span>
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
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<div>
		<form action="login.php" method="post">
			<?php
				logout();
			?>
		</form>
	</div>
	<!--</div>-->
</body>
</html>