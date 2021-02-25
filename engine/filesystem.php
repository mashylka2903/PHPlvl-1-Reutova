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

function getFiles(string $directory) {
    return array_filter(
        scandir($directory),
        function ($item) use ($directory) {
            return !is_dir($directory . "/" . $item);
        }
    );
}

/*function uploadFile() {
    if(isset($_FILES['gallery_image'])) { //если под этим что-то пришло
        $tmpPath = $_FILES['gallery_image']['tmp_name']; //берем путь до временного файла
        $destination = IMG_DIR . $_FILES['gallery_image']['name']; //куда надо сохранить с оригинальным именем 
        move_uploaded_file($tmpPath, $destination); // спец ф-ция записи и удаления из временных файлов
    }
}*/

function uploadFile(string $name, string $destination) {
    if(isset($_FILES[$name])) {
        $tmpPath = $_FILES[$name]['tmp_name'];
        $destination .= $_FILES[$name]['name'];
        move_uploaded_file($tmpPath, $destination);
    }
}