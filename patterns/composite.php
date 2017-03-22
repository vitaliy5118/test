<?php

echo "***********************************************************";
echo "START this is COMPOSITE functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';

abstract class Unit {

    function getComposite(){
        return null;
    }

    abstract function bombardStrenght();
}

abstract class CompositeUnit extends Unit {
    private $units = array();
    
    function getComposite() {
        return $this;
    }
    
    protected function units(){
        return $this->units;
    }
            
    function addUnit(Unit $unit) {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $this->units[] = $unit;
    }

    function removeUnit(Unit $unit) {
        $this->units = array_udiff($this->units, array($unit), 
                function ($a, $b) {return ($a === $b) ? 0 : 1;});
    }
    
}

        class UnitException extends Exception {
    
}

class Archer extends Unit {

    function bombardStrenght() {
        return 4;
    }

}

class LaserCannonUnit extends Unit {

    function bombardStrenght() {
        return 44;
    }

}

//общий класс для группировки юнитов
class Army extends Unit {

    private $units = array();

    function addUnit(Unit $unit) {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $this->units[] = $unit;
    }

    function removeUnit(Unit $unit) {
        $this->units = array_udiff($this->units, array($unit), function ($a, $b) {
            return ($a === $b) ? 0 : 1;
        });
    }

    function bombardStrenght() {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrenght();
        }
        return $ret;
    }

}

//создаем армию
$main_army = new Army();

$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());

//еще армию
$sub_army = new Army();
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());

//объединяем армии
$main_army->addUnit($sub_army);

print_r("Aтакующая сила: {$main_army->bombardStrenght()}");



echo '<br>';
echo '<br>';
echo "***********************************************************";
echo "FINISH this is COMPOSITE functions test file ";
echo "***********************************************************";
echo '<br>';

