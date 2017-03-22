<?php

//echo "***********************************************************";
//echo "START this is anonim functions test file";
//echo "***********************************************************";
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';

//session_start();
//$_SESSION['is_admin']+=1;
//
//echo $_SESSION['is_admin'];
//echo $_COOKIE[session_name()];
//echo 'Некоторая отладочная информация:';
//print_r($_FILES);
//
//$uploaddir = '/file/';
//$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);
//
//echo '<pre>';
//if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
//    echo "Файл корректен и был успешно загружен.\n";
//} else {
//    echo "Возможная атака с помощью файловой загрузки!\n";
//}
//
//echo '<br>';



//
//
//$cars = array( 'BMW', 'Audi', 'Mercedes', 'Porsche' );
//print_r($cars);
//
//class ReadingList extends SplStack
//{
//   }
//   
//  $stek = new ReadingList();
//  $stek->push(123);
//function my(){
//    echo 'go';
//}
//$func = "my";
//
//$func();
//
////$cls = "MyObject";
//
////$obj = new $cls();
//echo "***********************************************************";
//echo "***********************************************************";
//
//
//$test = function(Product $product){
//    echo '<pre>';
//    echo "this is callback function name: $product->name";
//    echo '</pre>';
//    echo '<pre>';
//    echo "this is callback function price: $product->price";
//    echo '</pre>';
//    echo '********************************';
//};
//
//$test2 = function(Product $product){
//    echo '<pre>';
//    echo "this is callback function2 name: $product->name";
//    echo '</pre>';
//    echo '<pre>';
//    echo "this is callback function2 price: $product->price";
//    echo '</pre>';
//    echo '********************************';
//};
//
//$test3 = function(Product $product){
//    
//    $product->showData();
//
//};
//
//class Product {
//    
//    public $name;
//    public $price;
//    
//    public function __construct($name, $price) {
//        $this->name = $name;
//        $this->price = $price;
//    }
//    
//    public function showData() {
//        echo '<pre>';
//        echo "this is show name: $this->name";
//        echo '</pre>';
//        echo '<pre>';
//        echo "this show price: $this->price";
//        echo '</pre>';
//        echo '********************************';
//    }
//
//}
//
//class ProcessSale {
//    
//    private $callbacks;
//    
//    public function registerCallback($callback) {
//       if(is_callable($callback)){
//           $this->callbacks[] = $callback;
//       } else{
//           throw new Exeption ("Функция обратного вызова не вызываемая!!!");
//       } 
//    }
//    
//    public function sale(Product $product){
//        print "Основная ф-ция: $product->name";
//        
//        foreach ($this->callbacks as $callback){
//            call_user_func($callback, $product);
//        }
//        
//    }
//}
//
//$processor = new ProcessSale();
//$processor->registerCallback($test);
//$processor->registerCallback($test2);
//$processor->registerCallback($test3);
//$processor->sale(new Product('тест_1', 8));
//
//global $p;
//$p = 9999;
//
//class Totalizer {
//    
//
//    
//    static function warAmount($amt){
//        $count = 10;
//            //global $p;
//        return function (Product $product) use ($amt, $count, $p){
//          $count += $product->price;
//          print "сумма: $count\n";
//          print "сумма: $p\n";
//          
//          if ($count> $amt){
//              print_r("Продано товаров на сумму: {$count}\n");
//          }
//        };
//    }
//}
//
//$processor = new ProcessSale();
//$processor->registerCallback(Totalizer::warAmount(8));
//$processor->sale(new Product("dfcz",1));
//$processor->sale(new Product("dfcz",3));
//$processor->sale(new Product("dfcz",8));
//
//        echo '<pre>';
//$_POST['index'] = 'ser';
//var_dump($_POST);
//
//echo '</pre>';
//
//$input = file_get_contents("php://input"); 
//var_dump($input);
//
//echo '<br>';
//echo '<br>';
//
//$var = array (
//    'meta'=>'1d',
//    'meta2'=>'2d',
//    'meta3'=>'3d',
//);
//
//
//echo '$var=';
//echo '<pre>';
//print_r($var);
//echo '</pre>';
//echo '<pre>';
//echo '$var[reset($var)]=';
//print_r($var[key($var)]);
//echo '</pre>';
//
//$var = array (
//    'meta',
//    'meta2',
//    'meta8'
//);
//echo '$var[2]=';
//echo '<pre>';
//print_r($var[2]);
//echo '</pre>';
//
//
//$array = array("first" => "quizful", "two" => 2, 3 => "three"); 
//$s = serialize($array); 
//echo $s;
//
//class A { 
//public static $static_item = 'hello'; 
// 
//        public static function hello() 
//        { 
//            
//               echo 'hello_function'; 
//        } 
//        
//        public function show(){
//            self::$static_item = 50000;
//            echo self::$static_item;
//        }
//        
//} 
//echo A::$static_item; // выведет hello, хотя объекты класса A не создавались. 
//A::hello(); // выведет hello_function 
//$s=new A();
//$s->show();
//
//
//echo '<pre>';
//
//$array=array(1=>1,2,3,4,); 
// 
//// 1. 
//$count=count($array); 
//while( $count && $array[ $count ] ) 
//{ 
//  echo $array[ $count ]; 
//  $count -= 1; 
//} 
// 
//// 2. 
//$count=count($array); 
//while( $count & $array[ $count ] ) 
//{ 
//  echo $array[ $count ]; 
//  $count -= 1; 
//} 
//echo '<pre>';
//
//$a=5;;
//
//   function funct()
//   {
//      static $a;
//      $a++;
//      echo "$a";
//   }
//   for ($i = 0; $i++<10;) funct();
//
//   
//echo '<pre>';
//$cats = [  
//"Electronics" => [  
//    "Phones" => ["Mobile Phones" => 'sdfsdfsdf', "Satellite Phones"=>'dgfdgfdgdfgd'],  
//    "Tablets",  
//    "Phones2" => ["Mobile Phones", "Satellite Phones"],  
//    "Phones23" => ["Mobile Phones", "Satellite Phones"],  
//    ],  
//"Electronics2" => [  
//    "Phones" => ["Mobile Phones", "Satellite Phones"],  
//    "Tablets",  
//    "Phones23" => ["Mobile Phones", "Satellite Phones"],  
//    "Phones2432" => ["Mobile Phones", "Satellite Phones"],  
//    ],  
//"Special Deals" 
//];
//
//function get_category_link(array $categories) { 
//  $link = 'http://superduperdeal.com/' . implode('/',  
//    array_map(  
//      function($cat) { return urlencode($cat);}, $categories 
//    )  
//  ); 
//  return $link; 
//} 
// 
//function print_category_link(array $categories) { 
//  $last_cat = count($categories)-1; 
//  echo str_repeat("&nbsp;", $last_cat*2), '<a href="', get_category_link($categories) , '">', $categories[$last_cat], '</a><br/>';  
//} 
// 
//function print_subtree(array $subtree, array $parents) { 
//  foreach ($subtree as $key => $value) { 
//    if (is_array($value)) { 
//      print_category_link(array_merge($parents, array($key))); 
//      print_subtree($value, array_merge($parents, array($key))); 
//    } else {       
//      print_category_link(array_merge($parents, array($value))); 
//    } 
//  } 
//} 
// 
//print_subtree($cats, []);
//
//$a=2;
//$b=33;
//
//$a^=$b;
//$b^=$a;
//$a^=$b;
//
//echo "$a=>$b";
//echo '<br>';
//
//$a=1;
//$b=3;
//list($a,$b)= array($b,$a);
//
//echo "list$a=>$b";
//
//

//
//echo '<br>';
//echo '<br>';
//echo "***********************************************************";
//echo "FINISH this is anonim functions test file ";
//echo "***********************************************************";
//echo '<br>';
