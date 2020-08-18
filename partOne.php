<?php

class job extends CI_Controller{
//we suppose to get an input type form and get the skills and chreteria , i put them as vriables in the example
        
         //put all the text together and compaire the two texts
         public function jobmatch($skills,$chreteria){
         $s= implode(",", $skills);
         $c= implode(",", $chreteria);
        //show the similarity penrcentages using php function 
         $sim =similar_text($s, $c,$perc);
         return $perc;
         }
         
         public function output(){
             $skills=array("wants to work remote", "react experience" ,"looking for frontend");
             $chreteria = array( "remote", "flexible working hours") ;
             $job= new job();
             $percentage = $job->jobmatch($skills,$chreteria);
             
             if ((int) $percentagec>50){
                echo "job match";
                }else{
                 echo "no match";
           }
         }
}