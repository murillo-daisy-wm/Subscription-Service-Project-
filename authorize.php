<?php
$dbh = new PDO('mysql:host=localhost;dbname=Subscription_Project','root','root');
$username= 'Daisy';
$password= 'Murillo';

if(!isset($_SERVER['PHP_AUTH_USER'] ) ||
    !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER'] !=$username) || ($_SERVER['PHP_AUTH_PW'] !=$password)){
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate:Basic realm= GuitarWars');
    exit('<h2> GuitarWars</h2>Sorry, you must enter a valid user name and password to' .'access this page.' );
}

?>