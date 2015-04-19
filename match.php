<?php
include("header.php");
require_once "class/Player.class.php";
    $_SESSION['invit'] = "invit";
    $array['admin'] = 1;
?>

<form method="post" action="race.php">
    <input type="submit" name="point" value="500"/>
    <input type="submit" name="point" value="1000"/>
    <input type="submit" name="point" value="1500"/>
</form>
</div>
</body>
</html>