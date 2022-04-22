<?php
session_start();

echo 'Before unsetting<br><pre>';
print_r ($_SESSION);
echo '</pre>';

unset($_SESSION);

echo 'After unsetting<br><pre>';
print_r ($_SESSION);
echo '</pre>';

$_SESSION['apple'] = "this is apple";

echo 'After apple<br><pre>';
print_r ($_SESSION);
echo '</pre>';


?>