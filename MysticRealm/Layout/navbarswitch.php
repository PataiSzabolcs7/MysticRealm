<?php
    switch($navbardswitch){
        case 'lore':
            require_once './Page/lore.php';
            break;
        case 'game':
            require_once './Page/game.php';
            break;
        case 'items':
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
        case 'contact':
            require_once './Page/contact.php';
            break;
        case 'home':
            require_once './Layout/home.php';
            break;
        case 'settings':
            require_once './Page/settings.php';
            break;
        default:
        require_once './Layout/home.php';
    }