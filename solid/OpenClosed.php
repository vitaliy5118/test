<?php

/**
 * Description of OpenClosed
 * 
 * принцип OpenClosed нарушен
 *
 * @author Виталий
 */
class OpenClosed {
    
    public function load($orderId) {
        $db_login = "root";
        $db_pass  = "";
        $db_host  = "localhost"; //если локалхост, то root и без пароля 
        $db_name  = "test"; //имя базы данных 

        $dsn = "mysql:host=$db_host;dbname=$db_name;charset=cp1251";
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $pdo = new PDO($dsn, $db_login, $db_pass, $opt);
        
        return $smt = $pdo->query("SELECT operation FROM `operations` WHERE id = $orderId");
    }

    public function save($order){}
    public function update($order){}
    public function delete($order){}
}

/**
 * 
 * 
 * 
 * 
 */
interface IOrderSource
{
    public function load($orderId);
    public function save($order);
    public function update($order);
    public function delete($order);
    
}

class MySqlSource implements IOrderSource {
    public function load($orderId){}
    public function save($order){}
    public function update($order){}
    public function delete($order){} 
}

class RedisSource implements IOrderSource {
    public function load($orderId){}
    public function save($order){}
    public function update($order){}
    public function delete($order){} 
}

class OpenClosedNew {
    
    private $source;
    
    public function setSource(IOrderSource $source){
        $this->source = $source;  
    }

    public function load($orderId) {
        return $this->source->load($orderId);
    }

    public function save($order){}
    public function update($order){}
    public function delete($order){}
}
