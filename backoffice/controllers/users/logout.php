<?php

	//destroy all session and redirect


if(isset($_GET["q"]) && strtolower($_GET["q"]) =="logout") {
	session_start();
    session_destroy();
    header("Location:" . $_GET["req"]);
}