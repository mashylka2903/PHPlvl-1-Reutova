<?php

//Template to display images
//Форма для загрузки файла

foreach ($images as $image) :
    $imgUrl = "photo.php?id={$image['id']}";

?>

<a href = "<?=$imgUrl?>">
<img src="public_html/img/<?=$image['path']?>" height='150'>
</a>

<?php endforeach;?> 

<form action="" method="post" enctype="multipart/form-data"> 
    <input type="file" name="gallery_image">
    <input type="submit">
</form>


