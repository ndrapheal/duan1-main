<?php
include_once 'connectDB.php';
// lấy tất cả bài viết
function binhluan_getAll()
{
    $conn = connect();
    $sql = "SELECT  binhluan.id,
                    binhluan.idpro,
                    binhluan.iduser,
                    binhluan.ngaybl,
                    binhluan.noidung,
                    user.id,
                    user.img as user_image,
                    user.name as user_name,
                    user.email,
                    sach.id,
                    sach.img as book_image,
                    sach.name,
                    tacgia.id,
                    tacgia.name as author_name,
                    nxb.name as publisher_name,
                    nxb.id,
                    loaisach.id,
                    loaisach.name
            FROM binhluan
            INNER JOIN
                user ON binhluan.iduser = user.id
            INNER JOIN
                sach ON binhluan.idpro = sach.id    
            INNER JOIN 
                tacgia ON sach.idtacgia = tacgia.id
            INNER JOIN 
                nxb ON sach.id_nxb = nxb.id
            INNER JOIN
                loaisach ON loaisach.id = sach.idloaisach    
            ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
// function binhluan_add($id, $user_id, $book_id, $date, $comment)
// {
//     $conn = connect();
//     $sql = "INSERT INTO binhluan(binhluan_id, user_id, book_id, Date, Comment) VALUES ('$id', '$user_id','$book_id', '$date', '$comment')";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
// }
function binhluan_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM binhluan WHERE binhluan_id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function binhluan_edit($id, $user_id, $book_id, $date, $binhluan)
{
    $conn = connect();
    $sql = "UPDATE binhluan SET user_id = '$user_id', book_id = '$book_id', Date = '$date', binhluan = '$binhluan' WHERE binhluan_id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function binhluan_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM binhluan WHERE binhluan_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
