<?php

echo "***********************************************************";
echo "START this is STATIC functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';

class A {
    
    public static $a = 55;
    
    public static function who() {
        echo __CLASS__;
        echo self::$a;
    }
    public static function test() {
        static::who(); ///////////////!!!!!!!! тут став селф буде фігня
    }


}

class B extends A {
    
    public static $a = 88;
    
    public static function who() {
        echo __CLASS__;
        echo self::$a;
    }
}

B::test();

echo '<br>';

print "4h" + print 3;

for($i=0; $i<10; $i++){
 if($i>8) continue 1;
}
echo $i;

$input = array('green', 'red', 'yellow', 'red');
print_r( array_count_values( $input) );

for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue;
    print "$i\n";
}
