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
        if (array_key_exists($key,self::$formulars))
        {
            self::$formulars = array_diff_key(self::$formulars,  array_flip((array) [$key]));
        }
    }
    public function calculateWithFormular($Key){
        if (array_key_exists($search,self::$formulars))
        {
            $result = array_flip(self::$formulars);
            $value = array_search($search, $result,true); 
  
        }
    }
    public function quit(){
        exit();
    }
}
?>