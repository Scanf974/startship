<?php
require_once 'Imperial_v0.class.php';
require_once 'Ork_v0.class.php';
require_once 'Space.class.php';
class Player
{
	private $login = "bruno";
	private $points = 500;
	private $fraction;

	public function __construct()
	{
		// if (array_key_exists('Imperial', $Faction))
		// 	$this->ship = new Vaisseau_Imperiale($Faction['name']);
		// else if (array_key_exists('Ork', $Faction))
		// 	$this->ship = new Vaisseau_Ork($Faction['name']);
		// else if (array_key_exists('Space', $Faction))
		// 	$this->ship = new Vaisseau_Space($Faction['name']);
		return ;
	}

	public function getLogin() {return $this->login;}
	public function getFraction() {return $this->fraction;}

	public function setLogin($name) {$this->login = $name;}
	public function setPoints($points) {$this->points = $points;}
	public function setFraction($fraction) {$this->fraction = $fraction;}

	public function add_ship($t)
	{
		if (array_key_exists('Imperial', $t))
		{
			$this->ship = new Vaisseau_Imperiale($t['name']);
		}
		else if (array_key_exists('Ork', $t))
			$this->ship = new Vaisseau_Ork($t['name']);
		else if (array_key_exists('Space', $t))
			$this->ship = new Vaisseau_Space($t['name']);		
		
		return new Player($this);
		
	}
}

//$Player_1 = new Player('Space' => 'Space', 'name' => 'Wolf_Spirit');
?>