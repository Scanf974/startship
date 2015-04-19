<?php
require_once "class/Player.class.php";
    session_start();
    $_SESSION['invit'] = "invit";
    $array['admin'] = 1;
if (isset($_POST['Explozeur_Ork']))
{
    $ar  = array('name' => "Explozeur_Ork", 'Ork' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);

}
else if (isset($_POST['Orktobre_Roug']))
{
    $ar  = array('name' => "Orktobre_Roug", 'Ork' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);
}
else if (isset($_POST['Vesso_Kikass']))
{
    $ar  = array('name' => "Vesso_Kikass", 'Ork' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);
}
$s = 0;
if ($_POST['point'] < 100)
{
    $s = 1;
    echo ' <form method="post" action="game.php"><input type="submit" name="submit" value="validé"></form>';
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
        <div class="type_two">
       <div class="col-sm-offset-1 col-sm-3">
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/thumb/1/12/Kroiseur_Kitu.jpg/350px-Kroiseur_Kitu.jpg" class="img-responsive" alt="Responsive image">
       </div>
        <h4>Explozeur_Ork</h4>
        <div>
Jusqu'à la découverte des cuirassés Orks lors de la Troisième Guerre d'Armageddon 2, les Kroiseurs Kitu furent le principal vaisseau des flottes peaux-vertes, menaçant notamment les Flottes Marchandes des tous les secteurs de l'Imperium.
Comme tous les vaisseaux Orks, le kroiseur Kitu ne correspond pas en fait à un seul schéma de construction mais regroupe en fait des vaisseaux différents partageant des caractéristiques majeurs (tel que l'armement) et le même emploi tactique, à savoir foncer droit sur l'adversaire, sans soucis de manœuvre d'approche, pour les éperonner avec leurs proues blindées à l'image d'un visage ork.
Construit à partir d'épaves de vaisseaux d'autres races et subissant des "améliorations" continues par les Mékanos Ork, le kroiseur Kitu est extrêmement résistant et présente de nombreux blindages additionnels, à l'exception notable de la poupe illustrant ainsi toute la tactique de combat spatial ork… 
A cela s'ajoute un armement largement supérieur aux vaisseaux de même classe des autres races, avec de puissantes Batt'ries d'fling' pour le combat à distance, et de redoutables Grokanons pour les affrontements à courtes distances, le tout principalement regroupés à la proue. 1
Au cours de la Guerre Gothique, les flottes de Pirates Orks, présentes notamment dans le sous-secteur de l'Amas du Cyclope, profitèrent des combats entre la Flotte Impériale et les forces d'Abaddon pour récupérer un grand nombre d'épaves, augmentant ainsi leurs flottes de kroiseurs Kitu.
Lors de la deuxième invasion d'Armageddon par Ghazghkull Mag Uruk Thraka, les kroiseurs Kitu constituèrent la base des flottes orks, leurs immenses soutes transportant des hordes d'Orks avec leurs véhicules. 
         </center>
 <div>
                            Cout :300 points.
                        </div>
                         <div class="input_boxes">
                            <form method="post" action="">
                            <?php  if (intval($_POST['point']) >= 300) echo '
                                <input type="checkbox" name="Explozeur_Ork" value="Explozeur_Ork"/><input type="submit" name="Explozeur_Ork" value="add">'?>
                                 <input type="hidden" name="point" value=<?php 
                                 $_POST['point'] -= 300;
                                echo ''. intval($_POST['point']).''?>/>
                          </form>
                       </div>
                   </div>
              </div>
       <div class="col-sm-offset-1 col-sm-3">
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/2/2f/Canonni%C3%A8r%27_Sovaj%27.jpg" class="img-responsive" alt="Responsive image">
       </div>
        <div class="type_two">
        <h4>Orktobre_Roug</h4>
        <div>
Proche du Vésso Massakreur, bien que les liens de filiation exacte entre ces deux classes d'escorteurs restent sujets à discussions, variante de la fameuse Canonnièr' Sovaj', c'est le fruit de la stratégie Ork du combat spatial poussée à l'extrême.
Tout aussi lent et peu protégé que les autres escorteurs orks, l'Orktobre_Roug n'est destinée qu'au combat rapproché, fonçant vers l'ennemi sous la protection de sa Proue blindée avant de délivrer des tirs dévastateurs à courte portée avec ses Grokanons.
La courte portée de son armement et sa faible manœuvrabilité font de l'Orktobre_Roug un adversaire peu dangereux lors des affrontements ouverts. Par contre, elle prouve toute sa valeur et sa dangerosité lors des attaques surprises et des embuscades où elle peut rester tapie dans les champs d'astéroïdes avant d'engager les vaisseaux ennemis à courte distance.
Enfin, comme tous les escorteurs orks, les Orktobre_Roug sont capables d'atterrir et de décoller directement à la surface d'une planète et peuvent donc également servir de transports à des Bandes de Guerre orks lors des attaques planétaires.
         </center>
 <div>
                            Cout :100 points.
                        </div>
                         <div class="input_boxes">
                            <form method="post" action="">
                            <?php  if ($s == 0) echo '
                                <input type="checkbox" name="Orktobre_Roug" value="Orktobre_Roug"/><input type="submit" name="Orktobre_Roug" value="add">'?>
                                 <input type="hidden" name="point" value=<?php 
                                 $_POST['point'] += 100;
                                echo ''. intval($_POST['point']).''?>/>
                            </form>
                          </form>
                       </div>
                   </div>
              </div>
       <div class="col-sm-offset-1 col-sm-3">
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/2/27/V%C3%A9sso_Kikass%27.jpg" class="img-responsive" alt="Responsive image">
       </div>
        <div class="type_two">
        <h4>Vesso_Kikass</h4>
        <div>
Le Vésso Kikass' est un vaisseau de conception typiquement Ork n'ayant aucun équivalent dans les flottes des autres races.
Extrêmement rapide pour un vaisseau ork grâce à une multitude de turbines directionnelles et de puissants moteurs, le vésso Kikass' n'est néanmoins pas destiné à manœuvrer pour pouvoir tirer sur l'adversaire de flanc ou par l'arrière. En fait, le vésso Kikass' ne cherche qu'à éperonner les vaisseaux adverses le plus rapidement possible et selon le meilleur angle, les Batt'ries d'fling' n'étant là qu'en complément.
Le vésso Kikass' est entièrement tourné vers sa tâche principale, sa proue étant constituée d'impressionnants éperons blindés équipés de foreuses, lames et autres moyens permettant de percer le blindage adverse.
Ajouter à sa masse hors norme pour un escorteur, le Kikass' est un adversaire redoutable à même d'infliger des dégâts majeurs, y compris aux plus gros vaisseaux de ligne. </center>
 <div>
                            Cout :75 points.
                        </div>
                         <div class="input_boxes">
                            <form method="post" action="">
                            <?php  if ($s == 0) echo '
                                <input type="checkbox" name="Vesso_Kikass" value="Vesso_Kikass"/><input type="submit" name="Vesso_Kikass" value="add">'?>
                                 <input type="hidden" name="point" value=<?php 
                                 $_POST['point'] += 125;
                                echo ''. intval($_POST['point']).''?>/>
                            </form>
                          </form>
                       </div>
                   </div>
              </div>
</BODY>
</html>