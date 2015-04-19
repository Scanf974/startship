<?php
require_once 'Weapon.class.php';
class Vaisseau
{
	function __construct($kwargs)
	{
		if (array_key_exists('name', $kwargs))
		{
			$this->name = $kwargs['name'];
			$this->size_x = $kwargs['size_x'];
			$this->size_y = $kwargs['size_y'];
			$this->armor = $kwargs['armor'];
			$this->PP = $kwargs['PP'];
			$this->vitesse = $kwargs['vitesse'];
			$this->mobility = $kwargs['mobility'];
			$this->shield = $kwargs['shield'];
			$this->direction = $kwargs['direction'];
			$this->position_x = $kwargs['position_x'];
			$this->position_y = $kwargs['position_y'];
			$this->weapon0 = new weapon($kwargs['weapon0']);
			return ;
		}
	}

	function getname() { return $this->name; }
	function getsize_y() { return $this->size_y; }
	function getsize_x() { return $this->size_x; }
	function getarmor() { return $this->armor; }
	function getPP() { return $this->PP; }
	function getvitesse() { return $this->vitesse; }
	function getmobility() { return $this->mobility; }
	function getshield() { return $this->shield; }
	function getdirection() { return $this->direction; }
	function getposition_y() { return $this->position_y; }
	function getposition_x() { return $this->position_x; }
	function getweapon0() { return $this->weapon0; }
	function getweapon1() { return $this->weapon1; }

	function setname($z) { $this->name = $z; }
	function setsize_y($z) { $this->size_y = $z; }
	function setsize_x($z) { $this->size_x = $z; }
	function setarmor($z) { $this->armor = $z; }
	function setPP($z)  { $this->PP = $z; }
	function setvitesse($z) { $this->vitesse = $z; }
	function setmobility($z) { $this->mobility = $z; }
	function setshield($z) { $this->shield = $z; }
	function setdirection($z) { $this->direction = $z; }
	function setposition_y($z) { $this->position_x = $z; }
	function setposition_x($z) { $this->position_y = $z; }
	function setweapon($z) { $this->weapon0 = $z; }

	function up_shield($v)
	{
			if ($v->PP > 0)
			{
				$v->PP--;
				$v->shield++;
			}
			else
				return false;
	}

	function ship_shot($v, $t)//vaisseau, target
	{
		if (( $hit = use_weapeon($v, $t)) > 0)
		{
			while ($hit-- > 0)
				down_pv($t);
		}
	}

	function use_weapeon($v, $t)
	{
		$toucher = 0;
		while ($v->weapon0->load-- > 0)
		{
			$distance_x = $v->position_x - $t->position_x;
			$distance_y = $v->position_y - $t->position_y;
			$d6 = rand(1, 6);
			if ($v->direction === 0 || $v->direction === 180)
			{
				if ($distance_x > 90 || $distance_x <= -90)
						;
				else if ($distance_x >= 61 || $distance_x <= -61)
				{
					if ($d6 == 6)
						$toucher++;
				}
				else if ($distance_x >= 31  || $distance_x <= -31)
				{
					if ($d6 >= 5)
						$toucher++;
				}
				else if ($distance_x >= 1  || $distance_x <= -1)
				{
					if ($d6 >= 4)
						$toucher++;
				}
			}
			else if ($v->direction === 90 || $v->direction === 270)
			{
				if ($distance_y > 90 || $distance_y <= -90)
						;
				else if ($distance_y > 61 || $distance_y <= -61)
				{
					if ($d6 === 6)
						$toucher++;
				}
				else if ($distance_y >= 31  || $distance_y <= -31)
				{
					if ($d6 >= 5)
					$toucher++;
				}
				else if ($distance_y >= 1  || $distance_y <= -1)
				{
					if ($d6 >= 4)
					$toucher++;
				}
			}
		return $toucher;
		}	
	}

	function mov_direction($d, $v)
	{
		if ($d === 'gauche')
			$v->direction -= 90;
		if ($d === 'droite')
			$v->direction += 90;
		$v->direction = $v->direction % 360;
	}

	function mov_emplacement($v)
	{
		if ($v->direction === 0)
		{
			$v->position += $v->mobility;
		}
		else if ($v->direction === 90)
		{
			$v->position += ($v->mobility / 1000);
		}
		else if ($v->direction === 180)
		{
			$v->position -= $v->mobility;
		}
		else
		{
			$v->position -= ($v->mobility / 1000);
		}
	}

	function down_pv($v)
	{
		if ($v->shield > 0)
			$v->shield--;
		else if ($v->armor > 0)
			$v->armor--;
	}

	function delet_ship($v)
	{
		return ($v = NULL);
	}
}

?>