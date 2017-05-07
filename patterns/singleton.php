<?php

echo "***********************************************************";
echo "START this is SINGLETON functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';

class Preferences {

    private $props = array();
    private static $instance;

    private function __construct() {
        
    }
    
    public static function getInstance () {
        if (empty(self::$instance)){
            self::$instance = new Preferences();
        }
        return self::$instance;
        
    }

    public function setProperty($key, $val) {
        $this->props[$key] = $val;
    }

    public function getProperty($key) {
        return $this->props[$key];
    }

}

$test1 = Preferences::getInstance();
$test1->setProperty('name', 'vasia');
echo $test1->getProperty('name');

$test2 = Preferences::getInstance();
echo $test2->getProperty('name');


class Singleton {
    private static $instance;
    private $name;


    private function __constract(){}
    
    public static function getInstance(){
        if(!self::$instance){
          self::$instance = new Singleton();
        }
        return self::$instance;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

$name = Singleton::getInstance();
$name->setName('alla');
print_r($name->getName());

echo '<br>';
echo '<br>';
echo "***********************************************************";
echo "FINISH this is SINGLETON functions test file ";
echo "***********************************************************";
echo '<br>';

