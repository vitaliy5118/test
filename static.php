<?php

echo "***********************************************************";
echo "START this is STATIC functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';

class A {
    
    public static $a = 55;
    
    public static function who() {
        //echo __CLASS__;
        echo self::$a;
    }
    public static function test() {
        static::who();
    }


}

class B extends A {
    
    public static $a = 88;
    
    public static function who() {
        //echo __CLASS__;
        echo self::$a;
    }
}

B::test();

