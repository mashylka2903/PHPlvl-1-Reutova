<!DOCTYPE html>
<html lang="en">
    

<body>
<div>
    <div class="col">
        
            
                <h2><?= $product['title'] ?></h2>
                <p><?= $product['description'] ?></p>
                <h4>Отзывы</h4>
                    <div>
                        <?php foreach ($feedbacks as $feedback): ?>
                            <div>
                                <?=$feedback['content']; ?>
                            </div>
                            <?php endforeach; ?>
                    </div>
                    <form action="/add_feedback.php" method="post">

                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">

                        <textarea name="content" id="" cols="50" rows="5"></textarea>

                        <input type="submit" value="Отправить отзыв">
                    
                    </form>                
           
    </div>
</div>    
</body>
</html>