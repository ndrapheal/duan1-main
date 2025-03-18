<?php
include_once 'model/category.php';
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
// Category
        case 'list':
            include_once 'view/header.php';
            include_once 'view/category.php';
            break;
// Publisher
        case 'listpub':
            $dsdm = publisher_getAll();
            include_once 'view/header.php';
            include_once 'view/publisher.php';
            break;
        case 'addpub':
            $dsdm = publisher_getAll();
            if (isset($btn_addPublisher)) {
                publisher_add($id, $name);
                header('location: ?mod=category&act=listpub');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=category&act=listpub');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/publisher_add.php';
            break;
        case 'editpub':
            $dsdm = publisher_getAll();
            $dm =  publisher_getOne($id);
            if (isset($btn_editGenre)) {
                publisher_edit($id, $name);
                header('location: ?mod=category&act=listpub');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=category&act=listpub');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/publisher_edit.php';
            break;
        case 'deletepub':
            publisher_delete($id);
            header('location: ?mod=category&act=listpub');
            break;
// Genre
        case 'listgenre':
            $dsdm = category_getAll();
            include_once 'view/header.php';
            include_once 'view/genre.php';
            break;
        case 'delete':
            genre_delete($id);
            header('location: ?mod=category&act=listgenre');
            break;
        case 'editgenre':
            $dsdm = publisher_getAll();
            $dm =  genre_getOne($id);
            if (isset($btn_editGenre)) {
                genre_edit($id, $name);
                header('location: ?mod=category&act=listgenre');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=category&act=listgenre');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/genre_edit.php';
            break;
        case 'addgenre':
            $dsdm = publisher_getAll();
            if (isset($btn_addGenre)) {
                genre_add($id, $name);
                header('location: ?mod=category&act=listgenre');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=category&act=listgenre');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/genre_add.php';
            break;
// Author
        case 'listau':
            $dsdm = author_getAll();
            include_once 'view/header.php';
            include_once 'view/author.php';
            break;
        case 'editau':
            $dsdm = publisher_getAll();
            $dm =  author_getOne($id);
            if (isset($btn_editAuthor)) {
                author_edit($id, $name);
                header('location: ?mod=category&act=listau');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=category&act=listau');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/author_edit.php';
            break;
        case 'addau':
            if (isset($btn_addAuthor)) {
                author_add($id, $name);
                header('location: ?mod=category&act=listau');
            } else if (isset($btn_addAuthor)) {
                author_add($id, $name);
                header('location: ?mod=category&act=listau');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=category&act=listau');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/author_add.php';
            break;
        case 'deleteau':
            author_delete($id);
            header('location: ?mod=category&act=listau');
            break;
    }
}
