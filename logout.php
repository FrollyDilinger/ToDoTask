<?php
session_start();
$_SESSION = [];

header("Location: login_form.php");