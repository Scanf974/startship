<?php
require_once "class/Player.class.php";
    session_start();
    $_SESSION['invit'] = "invit";
    $array['admin'] = 1;
if (isset($_POST['Cuirasse_Imperial']))
{
    echo "j'ai un Cuirasse_Imperial";
    $ar  = array('name' => "Cuirasse_Imperial", 'Imperial' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);

}
else if (isset($_POST['Fregate_Imperiale']))
{
    echo "j'ai un Fregate_Imperiale";
    $ar  = array('name' => "Fregate_Imperiale", 'Imperial' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);
}
else if (isset($_POST['Destroyer_Imperial']))
{
    echo "j'ai un Destroyer_Imperial";
    $ar  = array('name' => "Destroyer_Imperial", 'Imperial' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);
//    $Player1->add_ship($ar);
}
$s = 0;
if ($_POST['point'] < 100)
{
    $s = 1;
    echo '<form method="post" action="game.php"><input type="submit" name="submit" value="validé"></form>';
}
else
  echo "Points restant => ".$_POST['point'];
?>
<style type="text/css">
    body {background-color: #F3E2A9;}
</style>  
<html>
    <head lang="fr">
      
         <title>Warhammer 40 000 Armageddon battle</title>
      </head>
<BODY style="text-align:center">
     <?PHP include("header.php");?>
      <div class="col-sm-offset-1 col-sm-3">
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/thumb/3/33/Cuirasse_Emperor.JPG/400px-Cuirasse_Emperor.JPG" class="img-responsive" alt="Responsive image">
       </div>
        <div class="type_two">
        <h4>Cuirasse Imperial</h4>
        <div>
Le cuirassé de classe Emperor est l'un des plus anciens modèles de vaisseaux en service au sein de la Flotte Impériale.
A la fois vaisseau de ligne et véritable base de lancement pour des nuées d'appareils d'attaque, le cuirassé Emperor apportent la puissance de feu de ces nombreuses Batteries d'armes et le soutien de ses chasseurs Fury, de ses bombardiers Starhawk ou de ses appareils de débarquement Shark aux flottes impériales au sein desquelles il est intégré.
Bien que lent et manœuvrant difficilement, comme tous les vaisseaux de son tonnage, le cuirassé Emperor est une classe recherchée par les amiraux impériaux en raison du grand nombre de capteurs et de tourelles intégrés dans sa proue, facilitant ainsi la prise de décision pour ses officiers de bord, même si cela se fait au détriment de son blindage avant.
 <div>
                            Cout :450 points.
                        </div>
                         <div class="input_boxes">
                            <form method="post" action="">
                            <?php  if (intval($_POST['point']) >= 450) echo '
                                <input type="checkbox" name="Cuirasse_Imperial" value="Cuirasse_Imperial"/><input type="submit" name="Cuirasse_Imperial" value="add">'?>
                                 <input type="hidden" name="point" value=<?php 
                                 $_POST['point'] -= 450;
                                echo ''. intval($_POST['point']).''?>/>
                          </form>
                       </div>
                       </div>
                   </div>
              </div>
       <div class="col-sm-offset-1 col-sm-3">
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/8/81/Fr%C3%A9gate_Sword.jpg" class="img-responsive" alt="Responsive image">
       </div>
        <div class="type_two">
        <h4>Fregate Imperiale</h4>
        <div>
Les frégates de classe Sword sont des vaisseaux dont la conception remonte à des milliers d'année et qui servent la Flotte Impériale depuis lors sans faillir.
Les nombreux conflits auxquels les frégates Sword prirent part permirent de valider l'ensemble des composantes de ce type de vaisseau.
La frégate Sword est particulièrement reconnues pour ses Batteries d'armes, atteignant un niveau de précision impressionnant de 82%, et pour ses moteurs à plasma dont la technique simple est reprise par la plupart des navires impériaux.
Le rôle tactique privilégié pour les frégates Sword est l'escorte des imposants vaisseaux de lignes comme les cuirassés ou les croiseurs.
 <div>
                            Cout :250 points.
                        </div>
                         <div class="input_boxes">
                            <form method="post" action="">
                            <?php  if (intval($_POST['point']) >= -250) echo '
                                <input type="checkbox" name="Fregate_Imperiale" value="Fregate_Imperiale"/><input type="submit" name="Fregate_Imperiale" value="add">'?>
                                 <input type="hidden" name="point" value=<?php 
                                 $_POST['point'] += 200;
                                echo ''. intval($_POST['point']).''?>/>
                          </form>
                       </div>
                   </div>
              </div>
       <div class="col-sm-offset-1 col-sm-3">
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/5/5e/Destroyer_Cobra.jpg" class="img-responsive" alt="Responsive image">
       </div>
        <div class="type_two">
        <h4>Destroyer Imperial</h4>
        <div>
Les destroyers de classe Cobra composent la majeure partie de la flotte d'escorteurs de la Flotte de Guerre Obscuras notamment en raison de sa grande vitesse lui permettant de rivaliser avec la plupart des autres vaisseaux, y compris Eldar.
Les destroyers Cobra sont donc employés pour les missions de patrouilles ou d'attaques éclair, mais également comme appui lors des engagements à plus grande échelle, leurs torpilles pouvant inquiéter les vaisseaux de plus gros tonnage.
         
 <div>
                            Cout :100 points.
                        </div>
                         <div class="input_boxes">
                            <form method="post" action="">
                            <?php  if ( $s == 0) echo '
                                <input type="checkbox" name="Destroyer_Imperial" value="Destroyer_Imperial"/><input type="submit" name="Destroyer_Imperial" value="add">'?>
                                 <input type="hidden" name="point" value=<?php 
                                 $_POST['point'] -= 100;
                                echo ''. intval($_POST['point']).''?>/>
                          </form>
                       </div>
                   </div>
              </div>
</BODY>
</html>
