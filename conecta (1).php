<?php
		$servername = "mysql.hostinger.com.br";
		$username = "u110441720_tnr";
		$password = "Tuner158";
		$dbname = "u110441720_appdb";

		$conexao = @mysql_connect($servername, $username, $password) or die (mysql_error());
		mysql_select_db($dbname) or die (mysql_error());
?>
