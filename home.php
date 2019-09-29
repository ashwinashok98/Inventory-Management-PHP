<?php

session_start();
// Redirect if not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>