<?php
$dbl = new PDO('mysql:host=localhost;dbname=php_bootcamp;charset=utf8', 'root', 'life70think30');
$stmt = $dbl->prepare('SELECT * FROM `posted`');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$user = $dbl->prepare('SELECT * FROM `user` WHERE id = :urid');
$user->bindParam(':urid', $urid);

$comm = $dbl->prepare('SELECT * FROM `comm_:commid`');
$comm->bindParam(':commid', $commid);
?>