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

echo '<br>';
echo '<br>';
echo "***********************************************************";
echo "FINISH this is SINGLETON functions test file ";
echo "***********************************************************";
echo '<br>';

