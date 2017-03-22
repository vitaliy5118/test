<?php

echo "***********************************************************";
echo "START this is PDO functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$db_login = "root"; 
$db_pass = ""; 
$db_host = "localhost"; //если локалхост, то root и без пароля 
$db_name = "idiary"; //имя базы данных 

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=cp1251";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $db_login, $db_pass, $opt);

$smt = $pdo->query("SELECT operation FROM `operations`");
//$smt = $pdo->lastInsertId('operations');

var_dump($smt); die;

while ($row = $smt->fetch()){
    foreach ($row as $name => $value){

//        echo "***************** <br>";
//        echo "Категория: $value <br>";
//        $data = $pdo->query("SELECT * FROM `diary` WHERE operation = '$value'");
//        
//        while ($datas = $data->fetch()){
//           foreach ($datas as $names => $values){ 
//                if($datas['operation']!=$values) {
//                    echo "$names => $values <br>";
//                }
//           }
//        }
        
    } 
    echo '<br>';
}

//
//$db_login = "root"; 
//$db_pass = ""; 
//$db_host = "localhost"; //если локалхост, то root и без пароля 
//$db_name = "test1"; //имя базы данных 
// 
////соединяем с mysql-сервером 
//mysql_connect($db_host, $db_login, $db_pass); 
////выбираем БД  
//mysql_select_db($db_name);
//
//$query = mysql_query("EXPLAIN SELECT devices.id, name.name AS tipe FROM `devices` JOIN `name` ON name.name=devices.name"); 
////$query = mysql_query("OPTIMIZE TABLE devices"); 
//
//while ($row = mysql_fetch_assoc($query)) { 
//
//   print_r($row);
//
//   } 
// $query=mysql_query("OPTIMIZE TABLE name");
// 
// var_dump($query ); 
//

echo '<br>';
echo '<br>';
echo "***********************************************************";
echo "FINISH this is anonim functions test file ";
echo "***********************************************************";
echo '<br>';