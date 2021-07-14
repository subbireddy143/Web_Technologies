<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="1"/>
    <link rel="stylesheet" href="DigitalClock.css">
    <title>Digital Clock</title>
</head>
<body style="background-color:cornsilk;">
    <div class="header">
        <h1>Digital Clock- 1CR18CS083</h1>
    </div>
	<p style="background-color:aliceblue;color:black;padding:10px 40px 10px 40px;border:10px solid skyblue;border-radius:5%;"> 
		<?php 
			// Asia/Kolkata is for INDIA
			date_default_timezone_set('Asia/Kolkata');
			// showing current date and time of INDIA;
			echo date( 'h:i:s A', time ());
		?> 
	</p>
</body>
</html>