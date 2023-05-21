<?php
$con = mysql_connect("localhost","root","");

if (!$con) 
{
    die('Connection failed:'.mysql_error());
} 
mysql_select_db("roomrent",$con);
?>