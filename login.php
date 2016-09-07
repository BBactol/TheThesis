<?php
session_start();
$_SESSION["authorized"]="false";
function loginsys()
{
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	if ($username =="finsterkrieger" && $pass == 123)
	{
		$_SESSION["authorized"]="true";
	}
	else
	{
		$_SESSION["authorized"]="false";
	}
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
function prompt()
{
		if ($_SESSION["authorized"] == "true")
		{
			echo '
			<table class="login">
				<tr>
					<td>
						You have logged in.
					</td>
				</tr>
			</table>
			';
		}
		else 
		{
			echo
			'
				<table class="login">
				<tr>
					<td>
						Username
					</td>
					<td>
						<input type="text" name="username" size="20" maxlength="20"/>
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="password" name="pass" size="20" maxlength="15"/>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input id="login" type="submit" value="Login" name="login" style="text-align:center;"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="color:red;background-color:white;border-radius:5px;">
						Invalid Username or Password.
					</td>
				</tr>
				</table>
				';
		}
}
loginsys();
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
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<div>
		<form action="login.php" method="post">';
			<?php
				prompt();
			?>
		</form>
	</div>
	<!--</div>-->
</body>
</html>