<?php
    $familias=array(
        'Los Simpson'=>array(
            'padre'=>"Homer",
            'madre'=>"Marge",
            'hijos'=>array("Bart","Lisa","Maggie")
        ),
        'Los Griffin'=>array(
            'padre'=>"Peter",
            'madre'=>"Lois",
            'hijos'=>array("Chris","Meg","Stewie")
        )
    );

    echo "<ul>";
        foreach($familias as $namefam=>$familia){
            echo $namefam;
            foreach($familia as $nameinte=> $integrantes){
                echo "$nameinte : $integrante";
            }
        }
    echo "</ul>";
?>