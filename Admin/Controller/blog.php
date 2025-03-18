<?php
include_once 'model/blog.php';
extract($_REQUEST);
if(isset($act)){
    switch($act){
        case 'list':
            $dsdm = blog_getAll();
            include_once 'view/header.php';
            include_once 'view/blog.php';
            break;
        case 'delete':
            Blog_delete($id);
            header('location: ?mod=blog&act=list');
            break;
        // case 'add':
        //     if (isset($btn_addBlog)) {
        //         Blog_add($id, $title, $content, $userID);
        //         header('location: ?mod=blog&act=list');
        //     } else if (isset($btn_addBlog)) {
        //         Blog_add($id, $title, $content, $userID);
        //         header('location: ?mod=blog&act=list');
        //     }
        //     include_once 'view/header.php';
        //     include_once 'view/blog_add.php';
        //     break;
        case 'edit':
            $dsdm = blog_getAll();
            $dm = Blog_getOne($id);
            if (isset($btn_editBlog)) {
                Blog_edit($id, $title, $content, $userID);
                header('location: ?mod=blog&act=list');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=blog&act=list');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/blog_edit.php';
            break;
    }
}
?>