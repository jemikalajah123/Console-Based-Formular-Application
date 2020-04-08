<?php

class Functions{

    static $formulars = array();
    static $calculated;
    
    public function createFormular($key,$value) {
        self::$formulars += [$key => $value];
       
    }

    public function listFormular($key){

        self::$formulars = $key->getArrayCopy();
      
    }
   
    public function removeFormular($key){

        self::$formulars = array_diff_key(self::$formulars,  array_flip((array) [$key]));
    }

    public function calculateWithFormular($value){

           self::$calculated = eval('return '.$value.';');
        }

    public function quit(){
        exit();
    }
}
?>