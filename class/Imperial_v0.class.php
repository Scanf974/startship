<?php
require_once 'Vaisseau.class.php';

class Vaisseau_Imperiale extends Vaisseau
{
	function __construct($name)
	{
		if ($name == 'Fregate_Imperiale')
			$this->ship  = array( 'name' => 'Fregate_Imperiale', 'size_x' => 1, 'size_y' => 4, 'armor' => 5, 'PP' => 10, 'vitesse' => 15, 'direction' => 180, 'mobility' => 4, 'shield' => 0, 'position_x' => 2, 'position_y' => 1, 'weapon0' => 'Lance_navale');
		else if ($name == 'Destroyer_Imperial')
			$this->ship  = array( 'name' => 'Destroyer_Imperial', 'size_x' => 1, 'size_y' => 3, 'armor' => 4, 'PP' => 10, 'vitesse' => 18, 'direction' => 180, 'mobility' => 3, 'shield' => 0, 'position_x' => 2, 'position_y' => 1, 'weapon0' => 'Batteries_laser_flancs');
		else
			$this->ship  = array( 'name' => 'Cuirasse_Imperial', 'size_x' => 2, 'size_y' => 7, 'armor' => 8, 'PP' => 12, 'vitesse' => 10, 'direction' => 180, 'mobility' => 5, 'shield' => 2, 'position_x' => 2, 'position_y' => 1, 'weapon0' => 'Lance_navale');
		parent::__construct($this->ship);
//		print('creat ship' . PHP_EOL);
		return ;
	}

	function __destruct()
	{
		return ;
	}

	static function doc()
	{
	}
}


/*
$Fregate_Imperiale0 = new Fregate_Imperiale();
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_direction('droite', $Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
$Fregate_Imperiale0->mov_emplacement($Fregate_Imperiale0);
print_r($Fregate_Imperiale0);
echo "======================\n";
*/
?>