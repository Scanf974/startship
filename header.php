<?php
session_start();
require_once "class/Player.class.php";
    $myPlayer = new Player();
    $_SESSION['invit'] = "invit";
    $array['admin'] = 1;
?>
   

<html>
    <head>
       <meta charset="utf-8">
        <title>Starships Battles II</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <header>
            <div id="log"><h1>Starships Battles II</h1> <div class="logs"><a href="#">Login</a> <a href="#">Nouveau compte</a></div></div>
<!--
            <nav id="navbar-gen" role="navigation">
                <div><a id="gohome" href="index.php">Warhammer 40 000 Armageddon battle</a></div>
            </nav>
-->

        </header>
        
       <div class="container">
        <div class="s-container">