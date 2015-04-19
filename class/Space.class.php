<?php
require_once 'Vaisseau.class.php';
class Vaisseau_Space extends Vaisseau
{
	function __construct($name)
	{
		if ($name == 'Wolf_Spirit')
			$this->ship  = array( 'name' => 'Wolf_Spirit', 'size_x' => 2, 'size_y' => 7, 'armor' => 7, 'PP' => 12, 'vitesse' => 13, 'direction' => 0, 'mobility' => 2, 'shield' => 4, 'position_x' => 80, 'position_y' => 80, 'weapon0' => 'Lance_navale_lourde');
		if ($name == 'Barge_de_Bataille')
			$this->ship  = array( 'name' => 'Barge_de_Bataille', 'size_x' => 2, 'size_y' => 8, 'armor' => 10, 'PP' => 15, 'vitesse' => 12, 'direction' => 0, 'mobility' => 2, 'shield' => 5, 'position_x' => 80, 'position_y' => 80, 'weapon0' => 'Lance_navale_lourde');
		else
			$this->ship  = array( 'name' => 'Croiseur d\'Attaque', 'size_x' => 1, 'size_y' => 5, 'armor' => 5, 'PP' => 10, 'vitesse' => 15, 'direction' => 0, 'mobility' => 4, 'shield' => 0, 'position_x' => 80, 'position_y' => 80, 'weapon0' => 'Macro_canon');
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
?>