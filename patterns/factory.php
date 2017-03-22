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
        return '������ ������������ � ������� Bloggs�al <br>';
    }

}

class MegaApptEncoder extends ApptEncoder {

    function encode() {
        return '������ ������������ � ������� Mega�al <br>';
    }

}

abstract class CommsManager {

    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager {

    function getHeaderText(){
      return 'BloggsCal ������� ���������� <br>';  
    }

    function getApptEncoder(){
        return new BloggsApptEncoder();
    }

    function getFooterText(){
        return 'BloggsCal ������ ���������� <br>';
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

