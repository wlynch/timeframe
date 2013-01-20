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
						<input type="text" placeholder="Search for a group"/>
					</div>
					<div row>
					<h3>Your Calendars</h3>
					<input type="text" placeholder="Search for calendar"/>
					<div class=row>
						<div class="four columns">
							<h3>Calendars</h3>
							<?php 
							//foreach ($calList->items as $key => $value) {
							//	echo "<label for=\"checkbox1\"><input type=\"checkbox\" id=\"checkbox".$i.">".$value."</label>"
							//}
							?>
					        	<h3><u>Best Time to Meet</u></h3>
		<a target="_blank" href="https://www.google.com/calendar/event?action=TEMPLATE&tmeid=N2R1aTdzZmd0ZGw2b3JpY3MzN29iZXBtOGdfMjAxMzAxMTRUMTkwMDAwWiBza3Vsa2luZ2NyYXp5QG0&tmsrc=skulkingcrazy%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif"></a>	
					<h3>Options</h3>
					Days - 		<label for="checkbox1"><input type="checkbox" id="checkbox1">Monday</label>
					<label for="checkbox1"><input type="checkbox" id="checkbox1">Tuesday</label>
					<label for="checkbox1"><input type="checkbox" id="checkbox1">Wednesday</label>
					<label for="checkbox1"><input type="checkbox" id="checkbox1">Thursday</label>
					<label for="checkbox1"><input type="checkbox" id="checkbox1">Friday</label>
					<label for="checkbox1"><input type="checkbox" id="checkbox1">Saturday</label>
					<label for="checkbox1"><input type="checkbox" id="checkbox1">Sunday</label>
					<form method="post" action ="">
					<textarea name="comments cols="1" rows="5"					
					enter start time"
					</textarea><br>
					<input type="submit" value="Submit" />
					</form>
    					</div>
					</div>
				
				</div>
			</div>
		</div>
	</body>
</html>
