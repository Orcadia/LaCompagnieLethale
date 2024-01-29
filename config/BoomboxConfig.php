<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$db = new PDO('mysql:host=mysql;dbname=database', 'admin', 'admin');

// Query the database
$stmt = $db->query('SELECT * FROM boombox');
$songs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output the songs in JSON format
echo json_encode($songs);