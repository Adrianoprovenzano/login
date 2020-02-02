


<?php 
session_start();

$utente= $_POST['username'];
$password= $_POST['password'];

/****** Utenti che hanno accesso al Login ******/
/***********************************************/

$nome_utente_1= 'Adriano';
$password_utente_1= 'anno.2019';

/***********************************************/
// Inizio IF statement
/***********************************************/


if($utente != $nome_utente_1 && $password != $password_utente_1 ) {
	header("Location: http://localhost:8888/form_exemple/index.html");
}elseif($utente == '' && $password == ''  ){
	header("Location: http://localhost:8888/form_exemple/index.html");
}elseif($utente == $nome_utente_1 && $password == $password_utente_1){
	// potrei reindirizzare l utente verso un altra pagina php
	header("Location: https://www.instagram.com/pro_dry_code/");

}elseif($utente != $nome_utente_1 || $password != $password_utente_1 ){
	
	$message = "Wrong username \or password! ";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo '<a href="http://localhost:8888/form_exemple/">Riprova</a>';
	
	
}else {
	echo 'you are a bad hacker';
}

?>