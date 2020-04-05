<?php
require "Functions.php";

class Menu extends Functions{

    public function start($selection,$key,$value){

            if ($selection == 1){
                $list = new Functions();
                $list->createFormular($key,$value);   
            }

            elseif($selection == 2){
                $list = new Functions();
                $list->listFormular();
            }

            elseif($selection == 3){
                $list = new Functions();
                $list->removeFormular($key);

            }

            elseif($selection == 4){
                $list = new Functions();
                $list->calculateWithFormular($key);
            }
            
            elseif($selection == 5){
                $list = new Functions();
                $list->quit();
            }
        }  
}

?>