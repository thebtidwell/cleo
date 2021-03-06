<?php
	session_name("cleo_usr");
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style-main.css">
		<script type="text/javascript" src="jquery-1.11.1.js"></script>
		<script type="text/javascript" src="script-main.js"></script>

		<!-- Google Maps API -->
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk5rlWDqO-Aj1hA6WakGpx9zVIRkLVY18&sensor=true&libraries=places"></script>
		<script type="text/javascript" src="script-map.js"></script>
	</head>

	<body>
		<!-- Wrapper for the top bar and sidebar -->
		<div id="ui-wrapper">

			<!-- Topbar -->
			<div id="topbar">
				<div id="topbar-left-actions" class="topbar-component">
					<a href="#" class="topbar-action" id="toggle-sidebar">Show List</a>
				</div>
				<!--<div id="pushpin-container" /><a href="#" class="" id="drop-pin-button"><img src="img/pin_verticle.png" /></a></div>-->
				<div id="topbar-middle-actions" class="topbar-component">
					<a href="index.php" class="topbar-action">Map</a>
					<a href="#" class="topbar-action" id="notifications-button">Adv. Search</a>
					<div id="pushpin-placeholder" class="topbar-action"></div>
					<a href="#" class="topbar-action">F.A.Q.</a>
					<a href="#" class="topbar-action">About Cleo</a>
					<span class="stretch"></span>
				</div>
				<div id="pushpin-container"><a href="#"><img src="img/pins/pin.png" id="pin-button" /></a></div>
				<div class="topbar-component" id="topbar-right-actions">
					<div class="topbar-action" id="notifications-button"><a href="#">(notifs)</a></div>
					<div class="topbar-action" id="account-actions">
						<?php
							// Redirect to the home page if the user is logged in.
							if(isset($_SESSION["cleo_usr"])){
								echo("<a href='#' id=\"account-options\">+ " . $_SESSION["cleo_usr"]["fst"] . " " . $_SESSION["cleo_usr"]["lst"] . "</a>");
							}
							else{
								echo "<a href=\"register.php\">sign up</a> | <a href=\"login.php\">log in</a>";
							}
						?>
					</div>
					<div id="acct-menu">
						<div class="acct-menu-item"><a href="#">account settings</a></div>
						<div class="acct-menu-item"><a href="../model/accounts/pcs_logout.php">log out</a></div>
					</div>
					<span class="stretch"></span>
				</div>
			</div>

			<!-- Sidebar -->
			<div id="sidebar">

			</div>
		</div>

		<!-- Wrapper for the map components -->
		<div id="map-wrapper">

			<!-- Map -->
			<div id="map-canvas" />
		</div>

		<!-- Login and Register forms -->
		<?php
			//echo( file_get_contents("form-login.php") );
		?>

	</body>
</html>