<?php
$DBSERVERNAME = "localhost";
$DBUSERNAME = "root";
$DBUSERPASSWORD = "";
$DBNAME = "baas";
$THEME = "DefaultTheme";
$conn = mysql_connect($DBSERVERNAME, $DBUSERNAME, $DBUSERPASSWORD) or die  (mysql_error());
$db=mysql_select_db($DBNAME);
?>
