<?php
class Tigger {
    private static $instance;
    public int $i=0; 


    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
            return $this->i++;
    }

    public static function getInstance()
    {
                 if (!isset(self::$instance))
                {
       
                  self::$instance = new static();



                }
        return self::$instance;        
    }
    public function count(){
        echo "el total de rugidos es : " . $this->i;


    }


       
}
//Tigger::getInstance();
$tiger= Tigger::getInstance();
$tiger2=Tigger::getInstance();
$tiger->roar();
$tiger2->roar();
/*
var_dump($tiger);
$tiger2->roar();
var_dump($tiger2);
if ($tiger===$tiger2){
        echo "funciona !!! yeeey";
}else{
        echo "no funciona:(((((";
}
var_dump($tiger);

*/

$tiger->count();
?>