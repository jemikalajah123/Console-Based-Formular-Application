<?php
class Functions{

    public static $formulars = array();

    public function createFormular() {
        $key= readline("please enter the name of the formular here: ");
        $value= readline("please enter the formular here: ");
        self::$formulars += [$key => $value];
        print_r(self::$formulars); 
    }

    public function listFormular(){
        $formularsArrayObject = new ArrayObject(self::$formulars);
        $copy = $formularsArrayObject->getArrayCopy();
        print_r($copy);

    }
   
    public function removeFormular(){

        $search= readline("please enter the formular here: ");
        if (array_key_exists($search,self::$formulars))
        {
            self::$formulars = array_diff_key(self::$formulars,  array_flip((array) [$search]));
            print_r(self::$formulars); 
        }
        else
        {
            echo "This formular does not exist...\n";
        }

    }
    public function calculateWithFormular(){
        $formularsArrayObject = new ArrayObject(self::$formulars);
        $copy = $formularsArrayObject->getArrayCopy();
        print_r($copy);
        $search= readline("please enter the formular you desire to work with, here: \n");
        if (array_key_exists($search,self::$formulars))
        {
            $result = array_flip(self::$formulars);
            $value = array_search($search, $result,true); 
            print_r($value."\n");
            $a= readline("please value a: \n");
            $b= readline("please value b: \n");
            $value = eval('return '.$value.';');
            echo $value;
        }
        else
        {
            echo "This formular does not exist...\n";
        }

    }
    public function quit(){
        exit();
    }
}
?>