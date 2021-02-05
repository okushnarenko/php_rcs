<?php
require_once 'helper.php';

require_once 'components/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : false;
switch($page) {
    case(1):
        require_once 'pages/page1.php';
        break;
    case(2):
        require_once 'pages/page2.php';
        break;
    case(3):
        require_once 'pages/page3.php';
        break;
    case('registration'):
        require_once 'pages/registration.php';
        break;
    default:
        require_once 'pages/landing.php';
}
require_once 'components/footer.php';

