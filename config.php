<?php

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "isengaja";
$db_name = "tb2";

try {
    // create PDO connection
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Koneksi Database Gagal! " . $e->getMessage());
}