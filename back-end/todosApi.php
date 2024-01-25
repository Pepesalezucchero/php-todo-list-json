<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5173");

    $list = [
        [
            'todo' => 'Fare i compiti'
        ],
        [
            'todo' => 'Fare la spesa'
        ],
        [
            'todo' => 'Fare il bucato'
        ],
        [
            'todo' => 'Fare i compiti'
        ],
        [
            'todo' => 'Fare pulizia di casa'
        ],
        [
            'todo' => 'Fare le commissioni per i clienti'
        ],
        [
            'todo' => 'Fare visita alla nonna'
        ],
    ];

    $jsonList = json_encode($list);
    echo $jsonList;
?>