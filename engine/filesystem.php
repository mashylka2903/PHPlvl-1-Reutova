<?php

function readCsv(string $source) {
    $f = fopen($source, "r");
    $data = [];
    while ($row = fgetcsv($f, 0, ';')) {
        $data[] = $row;
    }
    fclose($f);
    return $data;
}