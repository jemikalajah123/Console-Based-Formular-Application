<?php

require "Menu.php";

 echo "===========================================\n";
 echo "Hello, WELCOME TO MY FORMULAR APP\n";
 echo "===========================================\n";
 echo "Press 1: To create formular\n";
 echo "Press 2: To view all formulars\n";
 echo "Press 3: To delete formular\n";
 echo "Press 4: To calculate with a formular\n";
 echo "Press 5: To Quit\n";

 $selection = readline("Enter input here: ");
 while($selection<=5  and $selection!= 0 ){

    $start = new Menu;
    $start -> start($selection);


    echo "===========================================\n";
    echo "Hello, WELCOME TO MY FORMULAR APP\n";
    echo "===========================================\n";
    echo "Press 1: To create formular\n";
    echo "Press 2: To view all formulars\n";
    echo "Press 3: To delete formular\n";
    echo "Press 4: To calculate with a formular\n";
    echo "Press 5: To Quit\n";

    if ($selection == 5){
        $start = new Menu;
        $start -> start($selection);
    }

   
    $selection = readline("Enter input here: ");
 };

while ($selection > 5 or is_string($selection)){

    echo "This input is not supported\n";
    echo "input must be valid\n";
    $selection = readline("Enter input here: ");
    $start = new Menu;
    $start -> start($selection);
 }


   







?>
