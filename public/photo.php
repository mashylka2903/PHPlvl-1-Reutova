<?php

include_once __DIR__ . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function getPhoto() {

    $sql = 'SELECT * FROM photos';

    return query($sql);
    
}

?>

<?php

$images = getPhoto();

foreach ($images as $image) :
    $imgUrl = $image['link'];

?>

<a href = "<?=$imgUrl?>" target='blank'>
<img src="<?=$imgUrl?>" height='150'>


</a>

<?php endforeach;?>