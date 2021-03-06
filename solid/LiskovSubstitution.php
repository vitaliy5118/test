<?php

/**
 * Description of LiskovSubstitution
 * 
 * Подклассы не могут замещать поведение базовых классов
 *
 * @author Виталий
 */
 class Vehicle {
 
    function startEngine() {
        // Default engine start functionality
    }
 
    function accelerate() {
        // Default acceleration functionality
    }
}

class Car extends Vehicle {
 
    function startEngine() {
        $this->engageIgnition();
        parent::startEngine();
    }
 
    private function engageIgnition() {
        // Ignition procedure
    }
 
}
 
class ElectricBus extends Vehicle {
 
    function accelerate() {
        $this->increaseVoltage();
        $this->connectIndividualEngines();
    }
 
    private function increaseVoltage() {
        // Electric logic
    }
 
    private function connectIndividualEngines() {
        // Connection logic
    }
 
}

class Driver {
    function go(Vehicle $v) {
        $v->startEngine();
        $v->accelerate();
    }
}
