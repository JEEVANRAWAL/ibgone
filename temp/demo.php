<?php

session_start();

$_SESSION['hello'] = array();
$_SESSION['hello'] += ['apple' => 'this is an apple'];
$_SESSION['hello'] += ['ball' => 'this is a ball'];
print_r( $_SESSION['hello']);
