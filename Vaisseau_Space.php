<?php
require_once "class/Player.class.php";
    session_start();
    $_SESSION['invit'] = "invit";
    $array['admin'] = 1;
 if (isset($_POST['Wolf_Spirit']))
{
    echo "j'ai un Cuirasse_Imperial";
    $ar  = array('name' => "Wolf_Spirit", 'Space' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);

}
else if (isset($_POST['Croiseur d\'Attaque']))
{
    echo "j'ai un Fregate_Imperiale";
    $ar  = array('name' => "Croiseur d\'Attaque", 'Space' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);
}
else if (isset($_POST['Barge_de_Bataille']))
{
    echo "j'ai un Fregate_Imperiale";
    $ar  = array('name' => "Barge_de_Bataille", 'Space' => "Faction");
    /* A modifier ne permet pas de cree un mass ship */
    $Playert = new Player($ar);
}
  $s = 0;
  if ($_POST['point'] < 250)
  {
     $s = 1;
     echo '<form method="post" action="game.php"><input type="submit" name="submit" value="valide"></form>';
  } 
  else
  {
   echo "Points restant => ".$_POST['point'];
  }
 ?>

<html>
  <style type="text/css">
     body {background-color: #F3E2A9;}
  </style> 
    <head lang="fr">
      
         <title>Warhammer 40 000 Armageddon battle</title>
      </head>
  <BODY style="text-align:center">
     <?PHP include("header.php");?>
      </div>
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/thumb/e/ee/BargeBataille.jpg/400px-BargeBataille.jpg" class="img-responsive" alt="Responsive image">
       </div>
       <div class="col-sm-offset-1 col-sm-3">
        <div class="type_two">
        <h4>Barge de Bataille</h4>
                <div>Les Barges de Bataille sont parmi les plus anciens vaisseaux en activité dans les flottes de l'Imperium. Leur première mise en service remonte à l'époque de la Grande Croisade, conçues dans le but de transporter les légions Astartes de l'Empereur parmi les étoiles.
Son schéma de construction SCS du Mechanicum de Mars fut donc utilisé depuis le M31 sur des chantiers navals qui servent encore à la fois à leur production et à leur maintenance. Le Monde Forge d'Enigma VI figure encore au M41 parmi les principales de ces bases.
C'est le vaisseau de plus gros tonnage à disposition des chapitres de Space Marines de l'Imperium. Chaque Chapitre possède de un à trois de ces mastodontes, 4 véritables forteresses-volantes capables de transporter jusqu'à trois compagnies entières 7 incluant leur arsenal, leur parc de véhicules et leur personnel de maintenance.
Le but premier d'une Barge de Bataille est d'assurer le déploiement rapide des Space Marines lors des assauts planétaires. Pour cela, chaque barge abrite de nombreuses baies de lancement capables d'accueillir des flottilles d'intercepteurs et de transports comme des Thunderhawks, mais aussi des Téléporteurs, des Torpilles d'Abordage ou encore de Modules d'Atterrissage. 4 En outre, le bâtiment entier est construit sur des standards correspondant à la taille des combattants de l'Astartes. [Source?]
L'ensemble de ces facteurs en font peut-être le vaisseau de ligne le plus redouté des combats navals : capables même d'affronter des formations entières de la Flotte Impériale.  <div>
                            Cout :1550 points.
                        </div>
                         <div class="input_boxes">
                           <form method="post" action="">
                           <?php  if ($_POST['point'] > 1550) echo '
                            <input type="checkbox" name="Barge_de_Bataille" value="Barge_de_Bataille"/><input type="submit" name="Barge_de_Bataille" value="add">'?>
                           <input type="hidden" name="point" value=<?php 
                              $_POST['point'];echo ''. intval($_POST['point']).'';?>/>
                          </form>
                       </div>
                   </div>
      </div>
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/thumb/0/0b/Wolf_Spirit.jpg/250px-Wolf_Spirit.jpg" class="img-responsive" alt="Responsive image">
       </div>
        <div class="type_two">
        <h4>Le Wolf Spirit</h4>
         <div>
Le Wolf Spirit fut un vaisseau de l'antique VIème légion des Space Wolves. 
Le Wolf Spirit fut la Barge de Bataille de la Treizième Grande Compagnie des Space Wolves, et par là-même participa à la Grande Croisade ainsi qu'aux évènements de l'Hérésie d'Horus, notamment à la Bataille de Prospero contre les Thousand Sons. 
                      <div>
                           Cout :700 points.
                        </div>
                         <div class="input_boxes">
                            <form method="post" action="">
                            <?php  if (intval($_POST['point']) >= 700) echo '
                                <input type="checkbox" name="Wolf_Spirit" value="Wolf_Spirit"/><input type="submit" name="Wolf_Spirit" value="add">'?>
                                 <input type="hidden" name="point" value=<?php 
                                 $_POST['point'] -= 700;
                                echo ''. intval($_POST['point']).'';?>/>
                            </form>
                        </div>
        </div>
       <div class="col-sm-offset-1 col-sm-3">
         <img src="http://wh40k-fr.lexicanum.com/mediawiki/images/thumb/c/c1/BarbarosStingDGSCJustinNormanp35.jpg/250px-BarbarosStingDGSCJustinNormanp35.jpg" class="img-responsive" alt="Responsive image">
       </div>
        <div class="type_two">
        <h4>Croiseur d'Attaque</h4>
                <div>L'armement de l'Ajax est celui d'un Croiseur d'Attaque de l'Adeptus Astartes, spécialisé dans le transport d'une compagnie complète avec ses véhicules de soutien, capable de diriger des assauts planétaires ce qui ne retire en rien ses capacités en terme 
                  de combat spaciaux. <div>
                            Cout :250 points.
                        </div>
                         <div class="input_boxes">
                           <form method="post" action="">
                           <?php  if ($s == 0) echo '
                            <input type="checkbox" name="Croiseur d\'Attaque" value="Croiseur d\'Attaque"/><input type="submit" name="Croiseur d\'Attaque" value="add">'?>
                           <input type="hidden" name="point" value=<?php 
                              $_POST['point'] += 450;
                            echo ''. intval($_POST['point']).'';?>/>
                          </form>
                       </div>
                   </div>
      </div>
</BODY>
</html>