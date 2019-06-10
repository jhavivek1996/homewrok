<?php

session_start();

$_SESSION['name']="Vivek Jha";
$_SESSION['username']="jhavivek260";


unset($_SESSION['username']);
print_r($_SESSION);

session_destroy();















?>