<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "bookings");
define("DB_USER", "root");
define("DB_PASS", "rooxoumulence234%");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

print_r($conn);

?>