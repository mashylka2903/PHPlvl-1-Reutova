<?php

include_once __DIR__ . "/../config/main.php";
$path = 'IMG_DIR';
$images = array_filter (
    scandir(IMG_DIR),


function ($image) use ($path) {
    return !is_dir(IMG_DIR . $image);
}
);
?>

<?php

foreach ($images as $image) :
    $imgUrl = "/img/{$image}";

?>

<a href = "<?=$imgUrl?>" target='blank'>
<img src="<?=$imgUrl?>" height='150'>


</a>

<? endforeach;?>