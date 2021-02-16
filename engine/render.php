<?php

function displayMenu(array $menu) {
    echo '<ul class="nav">';
    foreach ($menu as $item) {
        echo '<li class="nav-item">
        <a class="nav-link" href="'.$item['link'].'">';
        echo $item['title'];
        echo '</a>
        </li>';
    }

    echo '</ul>';
}



?>