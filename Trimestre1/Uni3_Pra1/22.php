<?php
    $nums=array(5=>1,12=>2,13=>56,'x'=>42);

    foreach($nums as $num){
        echo "$num ";
    }

    echo "<br> " . count($nums). "<br>";

    unset($nums[5]);

    foreach($nums as $num){
        echo "$num ";
    }

    unset($nums);
?>