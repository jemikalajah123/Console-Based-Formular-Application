<?php

class App{

    public $formulars = array(
        'Area of Circle' => '3.142 * $a**2' 
        ,'Area of Square' =>'$a * $b'  
        ,'Area of Triangle' => '0.5 * $a *$b'  
        ,'b' => 'a'

    );



    public function CreateFormular() {
        echo "-------------------------------------------\n";
        $key= readline("please enter the name of the formular here: ");
        $value= readline("please enter the formular here: ");
        $this->formulars += [$key => $value];
        print_r($this->formulars); 
        echo "-------------------------------------------\n";
        $start = new Menu();
        $start->initialise();

       

    }


    public function listFormular(){
        echo "-------------------------------------------\n";
        $formularsArrayObject = new ArrayObject($this->formulars);
        $copy = $formularsArrayObject->getArrayCopy();
        print_r($copy);
        echo "-------------------------------------------\n";
        $start = new Menu();
        $start->initialise();
    }
   

    public function RemoveFormular(){

        echo "-------------------------------------------\n";
        $search= readline("please enter the formular here: ");
        if (array_key_exists($search,$this->formulars))
        {
            $this->formulars = array_diff_key($this->formulars,  array_flip((array) [$search]));
            print_r($this->formulars); 
        }
        else
        {
            echo "This formular does not exist...\n";
        }

        echo "-------------------------------------------\n";
        $start = new Menu();
        $start->initialise();


    }

    public function CalculateWithFormular(){
        echo "-------------------------------------------\n";
        echo "These are the available formulars: ";
        $formularsArrayObject = new ArrayObject($this->formulars);
        $copy = $formularsArrayObject->getArrayCopy();
        print_r($copy);
        $search= readline("please enter the formular you desire to work with, here: \n");
        if (array_key_exists($search,$this->formulars))
        {
            $result = array_flip($this->formulars);
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
        echo "-------------------------------------------\n";
        $start = new Menu();
        $start->initialise();


    }
    public function Quit(){

        echo "-------------------------------------------\n";
        echo "Thanks for learning with us!\n";
        echo "-------------------------------------------\n";
        exit();

    
    }
}

class Menu extends App{

        public function initialise(){
            echo "===========================================\n";
            echo "Hello, WELCOME TO MY FORMULAR APP\n";
            echo "===========================================\n";
            echo "Press 1: To create formular\n";
            echo "Press 2: To view all formulars\n";
            echo "Press 3: To delete formular\n";
            echo "Press 4: To calculate with a formular\n";
            echo "Press 5: To Quit\n";

            $selection = readline("Enter input here: ");

            if ($selection == 1){
                $list = new App();
                $list->CreateFormular();   

            }
            elseif($selection == 2){
                $list = new App();
                $list->listFormular();
    
            }
            elseif($selection == 3){
                $list = new App();
                $list->RemoveFormular($key);
    
            }
            elseif($selection == 4){
                $list = new App();
                $list->CalculateWithFormular();
            }
            elseif($selection == 5){
                $list = new App();
                $list->Quit();
            }
            else{
                echo "This input is not supported, please try again!";

                $start = new Menu();
                $start->initialise();

    
            }
    
        }

 
}

$start = new Menu();
$start->initialise();













?>