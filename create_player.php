<?php
include("header.php");

$myPlayer->setLogin($_GET['pseudo']);
$myPlayer->setFraction($_GET['racial']);
$myPlayer->setPoints($_GET['points']);