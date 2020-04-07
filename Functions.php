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

    public function calculateWithFormular($key){

            if (array_key_exists($key, self::$formulars)){ 
                $result = array_flip(self::$formulars);
                $value = array_search($key, $result,true); 
                for($i = 0; $i < strlen($value);$i++){
                    if(ctype_alpha($value[$i])){
                        $value[$i] = readline("enter the variable $value[$i] : "."\n");
                        $value[$i] = intval($value[$i]);
                    }
                }
            $calculated = eval('return '.$value.';');
            echo $calculated;
        }}

    public function quit(){
        exit();
    }
}
?>