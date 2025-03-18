<?php
include_once 'Model/review.php';
extract($_REQUEST);
if(isset($act)){
    switch($act){
        case 'list':
            $dsdm = binhluan_getAll();
            include_once 'view/header.php';
            include_once 'view/review.php';
            break;
        case 'delete':
            binhluan_delete($id);
            header('location: ?mod=binhluan&act=list');
            break;
        // case 'add':
        //     if (isset($btn_addbinhluan)) {
        //         binhluan_add($id, $userID, $bookID, $date, $comment);
        //         header('location: ?mod=binhluan&act=list');
        //     } else if (isset($btn_addbinhluan)) {
        //         binhluan_add($id, $userID, $bookID, $date, $comment);
        //         header('location: ?mod=binhluan&act=list');
        //     }
        //     include_once 'view/header.php';
        //     include_once 'view/binhluan_add.php';
        //     include_once 'view/footer.php';
        //     break;
        case 'edit':
            if (isset($btn_editbinhluan)) {
                binhluan_edit($id, $user_id, $book_id, $date, $binhluan);
                header('location: ?mod=review&act=list');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=review&act=list');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/review_edit.php';
            break;
    }
}
?>