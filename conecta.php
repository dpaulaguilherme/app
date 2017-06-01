<?php
		$servername = "cpmy0022.servidorwebfacil.com";
		$username = "cormaya_tuner";
		$password = "Tuner158";
		$dbname = "cormaya_u110441720_appdb";

		$conexao = @mysql_connect($servername, $username, $password) or die (mysql_error());
		mysql_select_db($dbname) or die (mysql_error());
?>
