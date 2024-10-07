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
                if($integrantes == 'madre'){
                    echo "<ul>";
                    foreach($integrantes as $hijos => $namehijos){
                        echo "<li>$namehijos</li>";
                    }
                    echo "</ul>";
                }else{
                    echo "<li>$nameinte : $integrantes</li>";
                }
            }
            echo "</ul>";
        }
    echo "</ul>";
?>