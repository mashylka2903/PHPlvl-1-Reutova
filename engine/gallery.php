<?php

function getGalleryImages () {
    return queryAll("SELECT * FROM photos ORDER BY views desc");
}

function getImageById(int $id) {
    return queryone ("SELECT * FROM photos WHERE id = {$id}");
}

function incrementImageViews (int $id) {
    return execute ("UPDATE photos SET views = views + 1 WHERE id = {$id}");
}

function createImage (string $title, string $path) {
    $sql = "INSERT INTO photos (title, path) VALUES ('{$title}', '{$path}')";
    return execute($sql);
}
