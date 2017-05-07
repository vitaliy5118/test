<?php

/**
 * Description of SingleResponsibility
 * 
 * принцип SingleResponsibility нарушен
 *
 * @author Виталий
 */
class SingleResponsibility {
    
    public function calculateItem(){}
    public function getItems(){}
    public function addItem(){}
    public function deleteItem(){}
    
    public function printOrder(){}
    public function showOrder(){}
    
    public function load(){}
    public function save(){}
    public function update(){}
    public function delete(){}

}

/**
 * 
 * разбиваем класс на 3 отдельных компонента
 * каждый отвечает за свою работу
 * 
 */
 class Single_1 {
     
    public function calculateItem(){}
    public function getItem(){}
    public function addItem(){}
    public function deleteItem(){}
 }
 
 class Single_2 {
     
    public function printOrder(){
        print_r(get_class());
    }
    public function showOrder(){}
 }
 
 class Single_3 {
     
    public function load(){}
    public function save(){}
    public function update(){}
    public function delete(){}
 }
 
 /**
  * 
  * Запустим фабрику для более удобного использования
  * 
  */
 
 class Factory {
     public function itemCore(){
         return new Single_1();
     }
     public function orderCore(){
         return new Single_2();
     }
     public function crudCore(){
         return new Single_3();
     }
 }
 
 $product = new Factory();
 $product->itemCore()->getItem();
 $product->itemCore()->addItem();
 $product->orderCore()->printOrder();
 $product->orderCore()->showOrder();
 $product->crudCore()->save();