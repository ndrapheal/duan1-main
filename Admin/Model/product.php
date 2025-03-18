<?php
include_once 'connectDB.php';
function product_getAll()
{
    $conn = connect();
    $sql = "SELECT 
    sach.id, 
    sach.name AS book_name, 
    sach.price1, 
    sach.namxb, 
    sach.ngonngu, 
    tacgia.name AS author_name, 
    nxb.name AS publisher_name, 
    loaisach.name AS genre_name, 
    sach.img
FROM 
    sach
INNER JOIN 
    tacgia ON sach.idtacgia = tacgia.id
INNER JOIN 
    nxb ON sach.id_nxb = nxb.id
INNER JOIN 
    loaisach ON sach.idloaisach = loaisach.id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function book_add($id, $name, $price, $idloaisach, $id_nxb, $image, $moi, $giamgia, $view, $ngonngu, $sotrang, $hinhthuc, $namxb, $idtacgia, $mota, $motangan)
{
    $conn = connect();
    $sql = "INSERT INTO sach(id, name, idloaisach, price1, id_nxb, namxb, img, moi, giamgia, view, ngonngu, sotrang, hinhthuc, idtacgia, mota, motangan) 
    VALUES ('$id','$name','$idloaisach','$price','$id_nxb','$namxb','$image','$moi','$giamgia','$view','$ngonngu','$sotrang','$hinhthuc','$idtacgia','$mota','$motangan')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function book_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM sach WHERE id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function product_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM sach WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function book_edit($id, $name, $price, $idloaisach, $id_nxb, $image, $moi, $giamgia, $view, $ngonngu, $sotrang, $hinhthuc, $namxb, $idtacgia, $mota, $motangan)
{
    $conn = connect();
    $sql = "UPDATE sach 
            SET name = '$name',
            idloaisach = '$idloaisach' ,
            price1 = '$price', 
            id_nxb = '$id_nxb',
            namxb = '$namxb', 
            image = '$image', 
            moi = '$moi',
            giamgia = '$giamgia',
            view = '$view',
            ngonngu = '$ngonngu',
            sotrang = '$sotrang',
            hinhthuc = '$hinhthuc'
            idtacgia = '$idtacgia', 
            mota = '$mota',
            motangan = '$motangan' ,
            WHERE id ='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function book_search($search)
    {
        $conn = connect();
        $sql = "SELECT * FROM sach WHERE book_name LIKE '%$search%' " ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }