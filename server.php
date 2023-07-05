<?php
    $rawData = file_get_contents('./database/dischi.json');

    header('Content-Type: application/json');
    echo json_encode($rawData);
?>