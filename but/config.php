<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'elearn';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
<?php
   mysql_connect("localhost","root",""); // isi sesuai host anda
   mysql_select_db("elearn"); // nama database yang saya buat tadi
?>