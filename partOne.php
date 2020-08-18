<?php


//we suppose to get an input type form and get the skills and chreteria , i put them as vriables in the example
        $skills=array("wants to work remote", "react experience" ,"looking for frontend");
         $chreteria = array( "remote", "flexible working hours") ;
        
         //put all the text together and compaire the two texts
         $s= implode(",", $skills);
         $c= implode(",", $chreteria);
        //show the similarity penrcentages using php function 
         $sim =similar_text($s, $c,$perc);
         var_dump("similarity: $sim ($perc %)\n");
