<?php

    $jsonList = file_get_contents("list.json");
    $students = json_decode($jsonList, true);
    
    var_dump($list);
    
?>