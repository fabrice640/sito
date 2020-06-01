<?php



include_once('connessione.php');


$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$email=$_POST['email'];
$anni=$_POST['anni'];


$sql="SELECT *FROM utenti";

if($connessione->query($sql===true){


$result=mysqli_fetch_array();

echo $row['nome'].$row['cognome'].$row['email'].$row['anni'];

}else{

die('Errore nella stampa dei dati immagazzinati nel database');

}



$connessione->close();

}

?>
