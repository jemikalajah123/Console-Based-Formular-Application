<?php

require "Menu.php";
function userMenu(){
    
    echo "===========================================\n";
    echo "Hello, WELCOME TO MY FORMULAR APP\n";
    echo "===========================================\n";
    echo "Press 1: To create formular\n";
    echo "Press 2: To view all formulars\n";
    echo "Press 3: To delete formular\n";
    echo "Press 4: To calculate with a formular\n";
    echo "Press 5: To Quit\n";

    $selection = readline("Enter input here: ");

 while($selection == 1 or $selection == 2 or $selection == 3 or $selection == 4 or $selection == 5 ){

    if ($selection == 1){
        $key= readline("please enter the name of formular here: ");
        $value= readline("please enter the formular here: ");
        $start = new Menu;
        $start -> start($selection,$key,$value);
    }
    elseif($selection == 2){
        $start = new Menu;
        $start -> start($selection,$key,$value);
    }
    elseif($selection == 3){
        
        $Key= readline("please enter the formular name here: ");
        $start = new Menu;
        $start -> start($selection,$key,$value);
    }
    elseif($selection == 4){
        
        $Key= readline("please enter the name of formular here: ");
        $start = new Menu;
        $start -> start($selection,$key,$value);
        print_r($value."\n");
        $a= readline("please value a: \n");
        $b= readline("please value b: \n");
        Functions::$formulars = eval('return '.$value.';');
    }
    if ($selection == 5){
        $start = new Menu;
        $start -> start($selection,$key,$value);
    }
    print_r (Functions::$formulars);
   
userMenu();
 }
}
userMenu();

while ($selection != 1 or $selection != 2 or $selection != 3 or $selection != 4 or $selection != 5){

    echo "This input is not supported\n";
    echo "input must be valid\n";
    userMenu();
 };

?>
