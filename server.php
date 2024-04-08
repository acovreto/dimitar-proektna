<?php
session_start();
// initializing variables

$username = "";

$errors = array();
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dimitarDB";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
