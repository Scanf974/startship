<?php
include("header.php");
require_once "class/Player.class.php";
    $_SESSION['invit'] = "invit";
    $array['admin'] = 1;
$Player_1 = new Player(array('Space' => 'Space', 'name' => 'Wolf_Spirit'));
$Player_2 = new Player(array('Imperial' => 'Imperial', 'name' => 'Fregate_Imperiale'));
?>
   

<div class="match">
    <a href="#match.php"><div class="m">Find a Match</div></a>
    <a href="race.php"><div class="m">Create new Match</div></a>
</div>
<?php include("footer.php"); ?>