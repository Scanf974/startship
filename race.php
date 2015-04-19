<?php
include("header.php");
?>

<form class="form_race" action="create_player.php">
   My name is <input id="pseudo" type="text" name="pseudo" />, I borned with my fraction: 
    <select name="racial" id="racial">
        <option value="Ork">Orks</option>
        <option value="Imperial">Imperials</option>
        <option value="Space Marine">Spaces Marines</option>
    </select> <br />
        I will start with 
    <input name="points" type="range" min="500" max="3000" value="500" step="5" onchange="showValue(this.value)" />
    <span id="range">500</span>
    <script type="text/javascript">
    function showValue(newValue)
    {
        document.getElementById("range").innerHTML=newValue;
    }
    </script>
    points.
    <input type="submit" id="valider" value="Valider" />
</form>