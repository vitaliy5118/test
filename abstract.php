<?php

echo "***********************************************************";
echo "START this is abstract function test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';

abstract class Producti {
    private $name = 55;
    private $price = 45;
    
    /**
     * @param int $name Description
     * @param int $price Description
     */
    abstract function set($name = null, $price = null);
    abstract function go();
    
    /**
     * 
     * @return type
     */
    public function getData(){
        return $this->name +  $this->price;
    }
}

class Data extends Producti{
    
    public function set($name = null, $price = null){
        
        if($name !== null && $price !== null){
            $this->name = $name;
            $this->price = $price;
        }
    }
    public function go(){
        
    }
}

$data = new Data();
//$data->set(100, 200);
echo $data->getData();  
        









echo '<br>';
echo '<br>';
echo "***********************************************************";
echo "FINISH this is anonim functions test file ";
echo "***********************************************************";
echo '<br>';

