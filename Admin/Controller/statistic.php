<?php
include_once 'Model/statistic.php';
extract($_REQUEST);
if(isset($act)){
    switch($act){
        case 'list':
            // $dsst = getOrderCount();
            include_once 'view/header.php';
            include_once 'view/statistic.php';
            break;
        case 'listdash':
            include_once 'view/header.php';
            include_once 'view/dashboard.php';
            break;
    }
}
?>