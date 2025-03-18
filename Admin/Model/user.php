<?php
include_once 'connectDB.php';
function user_getAll()
{
    $conn = connect();
    $sql = "SELECT * FROM user";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function user_add($id, $username, $password, $name, $email, $address, $role, $image, $phone, $diemtichluy)
{
    $conn = connect();
    $sql = "INSERT INTO user(id, username, password, name, email, diachi, role, image, phone, diem_tich_luy)
     VALUES ('$id', '$username','$password', '$name', '$email', '$address', '$role', '$image', '$phone','$diemtichluy')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function user_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM user WHERE id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function user_edit($id, $username, $password, $name, $email, $address, $role, $image, $phone, $diemtichluy)
{
    $conn = connect();
    $sql = "UPDATE user
    SET name = '$name', password = '$password', email = '$email', username = '$username', diachi = '$address', role = '$role', img = '$image', dienthoai = '$phone', diem_tich_luy = '$diemtichluy' 
    WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function user_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
?>
