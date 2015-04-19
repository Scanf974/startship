<?php
require_once "class/Player.class.php";
function ft_pos_player($t, $x, $y, $i)
{

    if ($t->position_x === $x)
    {
        if ($t->position_y === $y && $t->size_y > 0)
        {
            if ($i === 1)
                echo '<div class="Ship_Imperial" style="float:left"></div>';
            else if ($i === 0)
                echo '<div class="Ship_Ork" style="float:left"></div>';
            $t->size_y--;
            $t->position_y++;
            return true;
        }
    }
    return false;
}
   $x = 0;
   while ($x < 150)
   {
       echo '<div class="Table">';
       $y = 0;
       while ($y < 100)
       {
           if (ft_pos_player($Player_1->ship, $x, $y, 1) !== true)
           {
                if (ft_pos_player($Player_2->ship, $x, $y, 0) !== true)
                   echo '<div class="Row" style="float:left"></div>';
           }
            $y++;
       }
       $x++;
      echo "</div>";
    }

?>