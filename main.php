<?php
require 'php/dbmodel.php';
require 'conf/db.php';
$dbConn = new dbConnection($dbconfig['dbname'], $dbconfig['user'], $dbconfig['pw']);
$dbProc = $dbConn->dbLogin();
$post = $dbConn->get_Post();
require 'php/add_on.php';
$addOn = new Add_on();
include 'views/inpage.php';
?>
