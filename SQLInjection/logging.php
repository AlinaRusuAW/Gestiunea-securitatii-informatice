<?php

error_reporting(0);

$mysqli = new mysqli('localhost', 'root', 'root', 'exempluSQLInjection');

if ($mysqli->connect_error) {
    die('Connection Error');
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` where users.email = '{$email}' and users.password = '{$password}' ;";

//$rawQuery = "SELECT * FROM `users` where users.email = '%s' and users.password = '%s' ;";                                 //Protectie
//$query = sprintf($rawQuery, mysqli_real_escape_string($mysqli, $email), mysqli_real_escape_string($mysqli, $password));   //Protectie

//var_dump($query);

$result = mysqli_query($mysqli, $query);         //afiseaza datele utilizator

$result = mysqli_multi_query($mysqli, $query);    //stergerea unui tabel din BD

//$data = mysqli_fetch_all($result);

//$data = mysqli_fetch_array($result);

var_dump($data);
