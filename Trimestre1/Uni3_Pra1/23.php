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
            echo "<li>$namefam</li>";
            echo "<ul>";
            foreach($familia as $nameinte=> $integrantes){
                if($integrantes != 'hijos'){
                    echo "<li>$nameinte : $integrantes</li>";
                }else{
                    echo "<ul>";
                    foreach($integrantes as $hijos){
                        echo "<li>$hijos</li>";
                    }
                    echo "</ul>";
                }
            }
            echo "</ul>";
        }
    echo "</ul>";
?>