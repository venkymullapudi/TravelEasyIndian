<?php
$from=$_GET['from'];
$to=$_GET['to'];
$date=$_GET['date'];
//$time=$_GET['time'];
?>

<style>
#body_wrap {
    padding-left: 20px;
	padding-right: 20px;
	padding-bottom: 20px;
	padding-top: 20px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
	text-align: center;
}

.tabs input[type=radio] {
          position: absolute;
          top: -9999px;
          left: -9999px;
      }
.tabs {
        width: 100%;
        float: none;
        list-style: none;
        position: relative;
        padding: 0;
        margin: 10px auto;
      }
.tabs li{
        /* float: left; */
		display:inline-table;
      }
.tabs label {
          display: block;
          padding: 10px 20px;
          border-radius: 2px 2px 0 0;
          color: #08C;
          font-size: 24px;
          font-weight: normal;
          font-family: 'Lily Script One', helveti;
          background: rgba(255,255,255,0.2);
          cursor: pointer;
          position: relative;
          top: 3px;
          -webkit-transition: all 0.2s ease-in-out;
          -moz-transition: all 0.2s ease-in-out;
          -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
      }
.tabs label:hover {
        background: rgba(255,255,255,0.5);
        top: 0;
      }
       
[id^=tab]:checked + label {
        background: #08C;
        color: white;
        top: 0;
      }
       
[id^=tab]:checked ~ [id^=tab-content] {
          display: block;
      }
.tab-content{
        z-index: 0;
        display: none;
        text-align: center;
        width: 100%;
        font-size: 20px;
        line-height: 140%;
        padding-top: 10px;
       /* background: #08C; */
	   background: #3e9cbf;
        padding: 15px;
		padding-bottom: 30px;
        color: white;
        position: absolute;
        top: 46px;
        left: 0;
        box-sizing: border-box;
        -webkit-animation-duration: 0.5s;
        -o-animation-duration: 0.5s;
        -moz-animation-duration: 0.5s;
        animation-duration: 0.5s;

      }
	 
input#search_inside {
margin-left: 10px;
width:auto;
background: #3e9cbf;	
padding: 2px 14px 2px; 
border:1px solid #3e9cbf;
cursor:pointer;
font-size: 14px;
font-family:Oswald, sans-serif;
letter-spacing:.1em;
text-shadow: 0 -1px 0px rgba(0, 0, 0, 0.3);
color: #fff;
-webkit-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
-moz-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
}

input#search_inside:hover, input#search_inside:focus {
color:#dfe7ea;
-webkit-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 2px 0px 0px #205c73, 0px 2px 5px #999;
-moz-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 2px 0px 0px #205c73, 0px 2px 5px #999;
box-shadow: inset 0px 1px 0px #3e9cbf, 0px 2px 0px 0px #205c73, 0px 2px 5px #999;
}

input[type="text"] {
  padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;
}
input[type="text"]:focus,
input[type="text"].focus {
  border: solid 5px #3e9cbf;
}
  
</style>
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
<script>
function target_popup(form) {
	alert('The cost you incur is... ');
}
</script>

<div id="body_wrap">
<h2><a style="color:black;font-family: Helvetica Neue, Helvetica, Arial;">
<?php echo "<form action='search.php' method='get' class='form' >From <input type='text' placeholder='Bangalore' id='fromtags' name='from' value='$from' onClick='this.select();' /> To <input type='text' placeholder='Hyderabad' id='totags' name='to' value='$to' onClick='this.select();' /> On <input type='text' name='date' id='datepicker' value='$date' /><input type='submit' value='Go' id='search_inside' /></form>"; ?>
</a></h2>
<ul class="tabs">
        <li>
          <input type="radio" checked name="tabs" id="tab1">
          <label for="tab1">Train</label>
          <div id="tab-content1" class="tab-content animated fadeIn">
			<p>Trains available for your request</p>

          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2">
          <label for="tab2">Bus</label>
          <div id="tab-content2" class="tab-content animated fadeIn">
            <p>Buses available for your request</p>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab3">
          <label for="tab3">Cab</label>
          <div id="tab-content3" class="tab-content animated fadeIn">
            <p>Cabs available for your request</p>
          </div>
        </li>
		<li>
          <input type="radio" name="tabs" id="tab4">
          <label for="tab4">Flight</label>
          <div id="tab-content4" class="tab-content animated fadeIn">
            <p>Flights available for your request</p>
          </div>
        </li>
		<li>
          <input type="radio" name="tabs" id="tab5">
          <label for="tab5">Own-Vehicle</label>
          <div id="tab-content5" class="tab-content animated fadeIn">
            <p>Calculate your cost (Apart from the tiredness)</p>
			<form action="" method="post" onsubmit="target_popup(this)">
			State <select name="state"><option>Telangana</option><option>Andhra Pradesh</option></select></br>
			Fuel used &nbsp;&nbsp;<select name="fuel"><option>Petrol</option><option>Diesel</option><option>CNG</option><option>LPG</option></select> </br>
			Mileage of your vehicle &nbsp;&nbsp;<input type="number" name="mileage" min="1" max="99" size="4" style="width:50px;"></br></br>
			<p>Formula = total-distance/mileage * fuel-price</p>
			<input type="submit" value="Calculate-Cost" name="ownvehicle">
			</form>
          </div>
        </li>
</ul>
</div>
