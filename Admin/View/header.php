<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="../Admin/CSS/style.css">
    <script src="../Admin/JS/edit_add.js"></script>
</head>

<body>
    <!-- sidebar bên trái -->
    <div class="sidebar">
        <div class="logo">
            <ul class="menu">
                <li class="active">
                    <a href="?mod=statistic&act=listdash">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="?mod=statistic&act=list">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistic</span>
                    </a>
                </li>
                <li class="">
                    <a href="?mod=user&act=list">
                        <i class="fas fa-user"></i>
                        <span>User</span>
                    </a>
                </li>
                <li class="">
                    <a href="?mod=order&act=list">
                        <i class="fa-solid fa-box"></i>
                        <span>Order</span>
                    </a>
                </li>
                <li class="">
                    <a href="?mod=product&act=list">
                        <i class="fas fa-book"></i>
                        <span>Book</span>
                    </a>
                </li>
                <li class="">
                    <a href="?mod=category&act=list">
                        <i class="fas fa-table-list"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="">
                    <a href="?mod=review&act=list">
                        <i class="fas fa-star"></i>
                        <span>Review</span>
                    </a>
                </li>
                <li class="">
                    <a href="?mod=blog&act=list">
                        <i class="fa-solid fa-pen"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="../User/controller/index.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- main -->
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--infor">
                <div class="search-box">
                    <i class="fa-solid fa-search"></i><input type="text" placeholder="Search">
                </div>
              
                <img src="../Admin/image/claudio.jpg" alt="">
                <!-- <img src="DA1/User/view/layout/assets/images/<?=$_SESSION['user']['img']?>" alt=""> -->
        
        
            </div>
        </div>