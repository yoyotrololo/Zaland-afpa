<?php
	session_start();

	if (isset($_SESSION['connexion'])) {
		session_unset();
		session_destroy();
	}
?>