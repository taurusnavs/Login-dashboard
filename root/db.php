<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';

try{
    $conn = new PDO("mysql:host=$servername;dbname=u_base;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
	{
        echo "Erreur : " . $e->getMessage();
    }