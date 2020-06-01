<?php



include_once('connessione.php');

  $nome=$_POST['nome'];
  $cognome=$_POST['cognome'];
  $email=$_POST['email'];
  $anni=$_POST['anni'];

sql="INSERT INTO mydb (nome,cognome,email,anni)VALUES('$nome','$cognome','$email','$anni')";

if($connessione->query($sql===true){

header('admin.php');

}else{

die("Errore nell'inserimento nella tabella del database: " . $connessione->error);


}





}


$connessione->close();


?>
