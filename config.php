<?php
$db_name = 'market';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';

$sql = new PDO("sqlsrv:Database=".$db_name.";server=".$db_host."\SQLEXPRESS", $db_user, $db_pass);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>