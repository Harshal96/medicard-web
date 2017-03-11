<?php
$cluster = Cassandra::cluster()
<<<<<<< Updated upstream
		->withContactPoints('192.168.43.194')
=======
		->withContactPoints('192.168.43.219')
>>>>>>> Stashed changes
		->withPort(9042)
		->withCredentials("ria", "medicard")
		->build();
?>
