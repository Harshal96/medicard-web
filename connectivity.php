<?php
$cluster = Cassandra::cluster()
		->withContactPoints('192.168.43.219')
		->withPort(9042)
		->withCredentials("ria", "medicard")
		->build();
?>
