<?php
header('Content-Type: text/html; charset=utf-8');
session_start(); //-- munkamenet adatinak tárolására $_SESSION[]
require_once './Classes/Userbase.php';
$db = new Userbase("localhost", "root", "", "mystic realm");

if (!isset($_SESSION['login'])){$_SESSION['login'] = false;}

require_once './Layout/head.php';
$navbardswitch = filter_input(INPUT_GET, "nav");
$login_register = filter_input(INPUT_GET, "loginswitch");
?>
<body>
    <?php
    
    if($_SESSION['login'])
    {
        require_once './Layout/header.php';
        require_once './Layout/nav.php';
        require_once './Layout/navbarswitch.php';
        require_once './Layout/footer.php';
    }else{
        //require_once './Page/login.php';
        require_once './Page/loginswitch.php';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>