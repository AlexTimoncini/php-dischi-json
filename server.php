<?php
    $rawData = file_get_contents('./database/dischi.json');

    $decodedData = json_decode($rawData);

    header('Content-Type: application/json');
    echo json_encode($decodedData);
?>