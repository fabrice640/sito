<?php


  
  $nome=$_POST['nome'];
  $cognome=$_POST['cognome'];
  $email=$_POST['email'];
  $anni=$_POST['anni'];
  
  
  include_once("connessione.php");


  
$sql="CREATE TABLE utenti (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    cognome varchar(255),
    anni int,
    PRIMARY KEY (id)
);";

if($connessione->query($sql===true){

echo "Tabella utenti creata con successo";

}else{

die("Errore nella creazione della tabella del database: " . $connessione->error);


}


$connessione->close();



}









?>



