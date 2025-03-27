<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'a1024444_fotostore');
define('DB_PASSWORD', 'Ms89267930570');
define('DB_NAME', 'fotostore');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
