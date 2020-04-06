<?php

class Functions{

    static $formulars = array();
    
    public function createFormular($key,$value) {
        self::$formulars += [$key => $value];
       
    }

    public function listFormular(){
        $formularsArrayObject = new ArrayObject(self::$formulars);
        self::$formulars = $formularsArrayObject->getArrayCopy();
      
    }
   
    public function removeFormular($key){

        self::$formulars = array_diff_key(self::$formulars,  array_flip((array) [$key]));
    }

    public function calculateWithFormular($Key){
            $result = array_flip(self::$formulars);
            $value = array_search($search, $result,true); 
  
    }

    public function quit(){
        exit();
    }
}
?>