<?php
    $x = 5;
    //echo $x;

    function myTest(){
        global $x;
        $y = 10;  //Local Variable
        echo $y + $x;
    }

    myTest();
?>