<?PHP

class Weapon
{
    function __construct($type)
    {
        if ($type == 'Lance_navale')
        {
            $this->name = 'Lance_navale';
            $this->load = 0;
            $this->distance_m = 90;
            $this->distance_i = 60;
            $this->distance_c = 30;
        }
        else if ($type == 'Batteries_laser_flancs')
        {
            $this->name = 'Batteries_laser_flancs';
            $this->load = 0;
            $this->distance_m = 30;
            $this->distance_i = 20;
            $this->distance_c = 10;
        }
        else if ($type == 'Lance_navale_lourde')
        {
            $this->name = 'Lance_navale_lourde';
            $this->load = 3;
            $this->distance_m = 90;
            $this->distance_i = 60;
            $this->distance_c = 30;
        }
        else if ($type == 'Mitrailleuses_lourdes_proxi')
        {
            $this->name = 'Mitrailleuses_lourdes_proxi';
            $this->load = 5;
            $this->distance_m = 10;
            $this->distance_i = 7;
            $this->distance_c = 3;
        }
        else if ($type == 'Macro_canon')
        {
            $this->name = 'Macro_canon';
            $this->load = 0;
            $this->distance_m = 30;
            $this->distance_i = 20;
            $this->distance_c = 10;
        }
    }
}

$Weapon1 = new Weapon('Lance_navale');
$Weapon2 = new Weapon('Batteries_laser_flancs');
$Weapon3 = new Weapon('Lance_navale_lourde');
$Weapon4 = new Weapon('Mitrailleuses_lourdes_proxi');
$Weapon5 = new Weapon('Macro_canon');

/*
print_r($Weapon1);  
echo "======================\n";
print_r($Weapon2);
echo "======================\n";
print_r($Weapon3);
echo "======================\n";
print_r($Weapon4);
echo "======================\n";
print_r($Weapon5);
echo "======================\n";
*/
?>