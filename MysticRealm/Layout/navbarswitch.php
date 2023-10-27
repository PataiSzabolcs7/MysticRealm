<?php
    switch($navbardswitch){
        case'home':
            require_once './index.php';
            break;
        case 'lore':
            require_once './Page/item.php';
            break;
        case 'item':
            require_once './Page/item.php';
            break;
        case 'monster':
            require_once './Page/monster.php';
            break;
        case 'skills':
            require_once './Page/skills.php';
            break;
        case 'logout':
            require_once './Page/logout.php';
            break;
    }