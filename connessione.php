<?php

$servername = "localhost";
  $username = "username";
  $password = "password";

  $connessione = new mysqli($servername, $username, $password);

if ($connessione->connect_error) {
  die("Connesione fallita: " . $connessione->connect_error);
}


$sql = "CREATE DATABASE myDB";
if ($connessione->query($sql) === TRUE) {
  echo "Database creato!";
} else {
  echo "Errore nella creazione del database: " . $connessione->error;
}


?>
