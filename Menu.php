<?php
require "Functions.php";

class Menu extends Functions{

    public function start($selection){

            if ($selection == 1){
                $list = new Functions();
                $list->createFormular();   
            }
            elseif($selection == 2){
                $list = new Functions();
                $list->listFormular();
            }
            elseif($selection == 3){
                $list = new Functions();
                $list->removeFormular();

            }
            elseif($selection == 4){
                $list = new Functions();
                $list->calculateWithFormular();
            }
            elseif($selection == 5){
                $list = new Functions();
                $list->quit();
            }
            else{


            }
        }  
 
}












?>