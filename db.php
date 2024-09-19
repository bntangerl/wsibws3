<?php
$host = 'localhost';
$db = 'akun'; // Ganti dengan nama database kamu
$user = 'root'; // Ganti dengan username database kamu
$pass = ''; // Ganti dengan password database kamu

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
