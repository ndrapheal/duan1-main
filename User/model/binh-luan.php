<?php
require_once 'pdo.php';
function binhluan_insert($iduser, $idpro, $noidung, $ngaybl,$hoten,$img){
    $sql = "INSERT INTO binhluan(iduser, idpro, noidung, ngaybl, hoten, img ) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $iduser, $idpro, $noidung, $ngaybl,$hoten,$img);
}
function binhluan_admin_all(){
    $sql = "SELECT bl.id, bl.idpro, bl.iduser, bl.noidung, bl.ngaybl, bl.trangthai, u.username, p.name, p.img
        FROM binhluan bl
        INNER JOIN user u ON bl.iduser = u.id
        INNER JOIN sach p ON bl.idpro = p.id
        ORDER BY bl.id DESC";
    return pdo_query($sql);
}
function binhluan_select_all(){
    $sql = "SELECT * FROM binhluan  ORDER BY id  DESC";
    return pdo_query($sql);
}
