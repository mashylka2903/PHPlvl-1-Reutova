<?php

//Template to display images


foreach ($images as $image) :
    $imgUrl = "photo.php?id={$image['id']}";

?>

<a href = "<?=$imgUrl?>">
<img src="public_html/img/<?=$image['path']?>" height='150'>
</a>

<?php endforeach;?>