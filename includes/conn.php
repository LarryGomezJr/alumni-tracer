<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'alumnidb';


$db = new mysqli($servername, $username, $password, $dbname) or die($db->error);
