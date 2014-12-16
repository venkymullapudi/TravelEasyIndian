<?php
ob_start();
	session_start();
	require_once "include.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Easy Indian</title>
<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="CSS/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

<script>
$(function() {
$( "#datepicker" ).datepicker();
});

 $(function() {
var fromTags = [
"Hyderabad",
"Bangalore",
"Chennai",
];
var toTags = [
"Bangalore",
"Chennai",
"Hyderabad",
];
$( "#fromtags" ).autocomplete({
source: fromTags
});
$( "#totags" ).autocomplete({
source: toTags
});
});
</script>


</head>
<body>
<div id="transy">
</div>

<div id="wrapper">

	<div class="logo">
	  <h1>Travel Easy Indian</h1>
	  <h2>Train, Bus, Cab, Flight or Own-Vehicle.</h2>
	</div>
	<div class="content">
	<form action="search.php" method="get" class="form" >
		<center>
		<a>From</a>&nbsp;&nbsp;
		<input type="text" id="fromtags" name="from" placeholder="Bangalore" ></input>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a>To</a>&nbsp;&nbsp;
		<input type="text" id="totags" name="to" placeholder="Hyderabad" >
		</br></br>
		<a>On</a>&nbsp;&nbsp;
		<input type="text" name="date" id="datepicker" size="9" placeholder="Pick a Date" >
		
		</br>
		<input type="submit" id="search_submit" class="search_submit" value="Check"></input>
		</center>
	</form>

	<a class="about" href="about.php" >About</a>&nbsp;&nbsp;&nbsp;&nbsp;

	<a class="about" href="suggestion.php" >Suggestion</a>
	  <h2>
	  <a href="#" style="font-size:14px;background:yellow;color:black;">
	  We are a novice ! and we will continue this project based on your support.
	  </a></br></br>
	  <a href="https://www.facebook.com/pages/Travel-Easy-Indian/1490338817906713?" target="_blank" style="font-size:14px;background:#3B5999;color:#ffffff;">Like our Facebook Page !
	  </a>
	  </h2>
	</div>


</div>

</body>
</html>
<?php

	ob_end_flush(); 
?>
