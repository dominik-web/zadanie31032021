<?php
$mysql_host = 'localhost'; //lub jakiś adres: np sql.nazwa_bazy.nazwa.pl
$port = '3307'; //domyślnie jest to port 3306
$username = 'login';
$password = 'hasło';
$database = 'nazwa_bazy'; //'produkty'
try{
	$pdo = new PDO('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
    echo 'Połączenie nawiązane!';
}catch(PDOException $e){
    echo 'Połączenie nie mogło zostać utworzone.<br />';
}
?>