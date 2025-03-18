<?php
extract($_REQUEST);
if (isset($mod)) {
    switch ($mod) {
        case 'category':
            include_once "controller/category.php";
            break;
        case 'product':
            include_once "controller/product.php";
            break;
        case 'user':
            include_once "controller/user.php";
            break;
        case 'statistic':
            include_once "controller/statistic.php";
            break;
        case 'blog':
            include_once "controller/blog.php";
            break;
        case 'review':
            include_once "controller/review.php";
            break;   
        case 'order':
            include_once "controller/order.php";
            break;         
    }
}else{
    header("location: ?mod=category&act=list");
}
?>