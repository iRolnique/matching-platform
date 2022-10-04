<?php
session_start();
$_SESSION["angemeldet"] = false;
session_destroy();
header("Location: ../../index.php");