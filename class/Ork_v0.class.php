<?php
require_once 'Vaisseau.class.php';
class Vaisseau_Ork extends Vaisseau
{
	function __construct($name)
	{
		if ($name == 'Orktobre_Roug')
			$this->ship  = array( 'name' => 'Orktobre_Roug', 'size_x' => 1, 'size_y' => 2, 'armor' => 4, 'PP' => 10, 'vitesse' => 19, 'direction' => 0, 'mobility' => 3, 'shield' => 0, 'position_x' => 80, 'position_y' => 80, 'weapon0' => 'Lance_navale');
		if ($name == 'Vesso_Kikass')
			$this->ship  = array( 'name' => 'Vesso_Kikass', 'size_x' => 1, 'size_y' => 2, 'armor' => 3, 'PP' => 10, 'vitesse' => 21, 'direction' => 0, 'mobility' => 3, 'shield' => 0, 'position_x' => 80, 'position_y' => 80, 'weapon0' => 'Lance_navale');
		else
			$this->ship  = array( 'name' => 'Explozeur_Ork', 'size_x' => 1, 'size_y' => 5, 'armor' => 6, 'PP' => 10, 'vitesse' => 12, 'direction' => 0, 'mobility' => 4, 'shield' => 0, 'position_x' => 80, 'position_y' => 80, 'weapon0' => 'Macro_canon', 'weapon1' => 'Mitrailleuses_lourdes_proxi');
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