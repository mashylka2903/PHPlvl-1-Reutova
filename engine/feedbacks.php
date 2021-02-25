<?php
include_once ENGINE_DIR . "db.php";

function getFeedbacksByProductId(int $productId): array {
    return queryAll(
        "SELECT * FROM feedbacks WHERE product_id = {$productId}"
    );
}

function createFeedback (int $product_id, string $content) {
    $sql = "INSERT INTO feedbacks (product_id, content)
            VALUES ({$product_id}, '{$content}')";
    execute($sql);
    return getLastInsertId();
}