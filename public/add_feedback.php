<?php

include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "feedbacks.php";

$product_id = (int) $_POST['product_id'];
$content = $_POST['content'];

createFeedback($product_id, $content);
redirect($_SERVER['HTTP_REFERER']);