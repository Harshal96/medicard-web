<?php
$cluster = Cassandra::cluster()
		->withContactPoints('192.168.43.38')
		->withPort(9042)
		->withCredentials("medicard", "medicard")
		->build();
?>
