<?php
$cluster = Cassandra::cluster()
		->withContactPoints('192.168.43.194')
		->withPort(9042)
		->withCredentials("medicard", "medicard")
		->build();
?>
