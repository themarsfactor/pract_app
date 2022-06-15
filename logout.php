<?php

//start sessiion
//empty the session array
//destroy the session
//redirect the user

session_start();
$_SESSION = [];
session_destroy();
header("location:login.php");