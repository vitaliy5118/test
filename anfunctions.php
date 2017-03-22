<?php

echo "***********************************************************";
echo "START this is anonim functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';

class Product {
    public $name;
    public $price;
    
    /**
     * 
     * @param sting $name
     * @param sting $price
     */
    function __construct($name, $price ) {
        $this->name = $name;
        $this->price = $price;
    }
    
}

class ProcessSale {
    private $callbacks;
    
    /**
     * 
     * @param type $callback
     * @throws Exception
     */
    function registerCallbacks ($callback) {
        if (!is_callable($callback)){
            throw new Exception("Функция обратного вызова - невызываемая!");
        }
        
        $this->callbacks[] = $callback;
        echo '<br>';
    }
    
    /**
     * 
     * @param Product $product
     */
    function sale (Product $product){
        print "{$product->name}: обрабатывается... \n ";
        
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}

$logger = create_function('$product', 'print "Записываем... ({$product->name})<br>";');

$processor = new ProcessSale();
$processor->registerCallbacks($logger);

$processor->sale(new Product("Туфли",6));
$processor->sale(new Product("Кофе",6));



$processor = new ProcessSale();
$logger2 = function ($product){
    print ("$product->name -> лучшая цена на сегодня: $product->price<br>");
};

$processor->registerCallbacks($logger2);

$processor->sale(new Product('PS4 super slim','8500uan'));
$processor->sale(new Product('PS2 super slim','2500uan'));


class Totalizer {
    static function warnAmount ($amt){
        $count = 0;
        return function ($product) use ($amt, &$count){
          $count+=$product->price;
          print "Сумма: $count <br>";
          
          if ($count > $amt){
              print "Продано товаров на сумму: {$count}<br>";
          }
        };
    }
}

$processor = new ProcessSale();
$processor->registerCallbacks(Totalizer::warnAmount(8));
$processor->sale(new Product("Туфли",6));
$processor->sale(new Product("Кофе",6));







echo '<br>';
echo '<br>';
echo "***********************************************************";
echo "FINISH this is anonim functions test file ";
echo "***********************************************************";
echo '<br>';

