<?php
$MyUsername = "u562093690_root";  // enter your username for mysql
$MyPassword = "hack123";  // enter your password for mysql
$MyHostname = "mysql.hostinger.com.br";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("u562093690_hack",$dbh);
?>