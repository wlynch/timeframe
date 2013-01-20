<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="stylesheets/main.css">
		<link rel="stylesheet" href="stylesheets/foundation.min.css">
		<script src="javascripts/foundation.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
			    <div class="three columns">
			      <h1><img src="Logo.png" /></h1>
			    </div>
			    <div class="nine columns">
			      <ul class="nav-bar right">
			        <li><a href="#">Your Name</a></li>
			        <li><a href="#">Scheduler</a></li>
			        <li><a href="#">Logout</a></li>
			      </ul>
			    </div>
			</div>


			<div class="row">

				<div class="five columns">
					<div row>
						<h3>Groups</h3>
						<!--Group Search Box!-->
						<input type="text" placeholder="Search for a group"/>					</div>
				</div>
				<div class="seven columns">

					<h3>Your Calendars</h3>

					<input type="text" placeholder="Search for calendar"/>
					<div class=row>
						<div class="four columns">
							<?php 
							//foreach ($calList->items as $key => $value) {
							//	echo "<label for=\"checkbox1\"><input type=\"checkbox\" id=\"checkbox".$i.">".$value."</label>"
							//}
							?>
    					</div>
					</div>
				</div>
			</div>
		</div> 
		<div id="check" align="right" style="padding:20px">
			<h3><u>Possible Schedules</h3></u>
			<a href="www.google.com">Add to calendar here</a>
		</div>

	</body>
</html>