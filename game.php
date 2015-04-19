<?php
//require_once "class/Player.class.php";
    session_start();
    $_SESSION['invit'] = "invit";
    $array['admin'] = 1;
$s = 0;
if ($_POST['point'] < 250)
{
    $s = 1;
    echo '<form method="post" action="game.php"><input type="submit" name="submit" value="validé"></form>';
}
?>
<style type="text/css">
    body {background-color: #F3E2A9;}
    .Table
    {
        display: table;
    }
    .Row
    {
       border:1px solid black;
        background-color: blue;
        width:11px;
        height: 11px;
        display: table-row;
    }
    .Ship_Ork
    {
       border:1px solid black;
       background-color: red;
       width:11px;
       height: 11px;
       display: table-row;
    }
    .Ship_Imperial
    {
       border:1px solid black;
       background-color: green;
       width:11px;
       height: 11px;
       display: table-row;
    }
    .Cell
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
<html>
    <head lang="fr">
      
         <title>Warhammer 40 000 Armageddon battle</title>
      </head>

<form method="post" action="index.php">
<input type="submit" name="attack" value="attack"/>
<input type="submit" name="deplace" value="deplace"/>
<input type="submit" name="rotation_left" value="rotation_left"/>
<input type="submit" name="rotation_right" value="rotation_right"/>
<input type="checkbox" name="PP" value="PP"/><input type="submit" value="Submit">
<input type="submit" name="PP for speed" value="PP for speed"/>
<input type="submit" name="PP for weapon" value="PP for weapon"/>
<input type="submit" name="PP for shield" value="PP for shield"/>
</form>

<?php
  include('map.php');
?>
</BODY>
</html>
