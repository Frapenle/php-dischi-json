<?php

$diskData = file_get_contents('../db/dischi.json');

$diskList = json_decode($diskData, true);

if (!isset($diskList)) {
    $result = [];
} else {
    $result = [];
    if (!isset($_GET['diskIndex'])) {
        $result = $diskList;
    } else {
        $result = $diskList[$_GET['diskIndex']];
    }
}

header('Content-Type: application/json');
echo json_encode($result);
