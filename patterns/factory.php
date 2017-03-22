<?php

echo "***********************************************************";
echo "START this is FACTORY functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';

abstract class ApptEncoder {

    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder {

    function encode() {
        return 'Данные закодированы в формате BloggsСal <br>';
    }

}

class MegaApptEncoder extends ApptEncoder {

    function encode() {
        return 'Данные закодированы в формате MegaСal <br>';
    }

}

abstract class CommsManager {

    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager {

    function getHeaderText(){
      return 'BloggsCal верхгий колонтитул <br>';  
    }

    function getApptEncoder(){
        return new BloggsApptEncoder();
    }

    function getFooterText(){
        return 'BloggsCal нижний колонтитул <br>';
    }
}

$mgr = new BloggsCommsManager();
echo $mgr->getHeaderText();
echo $mgr->getApptEncoder()->encode();
echo $mgr->getFooterText();


echo '<br>';
echo '<br>';
echo "***********************************************************";
echo "FINISH this is fACTORY functions test file ";
echo "***********************************************************";
echo '<br>';

