
<?php

ob_start();

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

require_once 'baglan.php';

if (!isset($_GET['sayfa'])) {
    $_GET['sayfa'] = 'index';
}

switch ($_GET['sayfa']) {

    case 'index':
        require_once 'homepage.php';
        break;

    case 'insert':
        require_once 'insert.php';
        break;
    case 'oku':
        require_once 'oku.php';
        break;
    case 'guncelle':
        require_once 'guncelle.php';
        break;
}
