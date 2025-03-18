<?php
include_once 'connectDB.php';
function order_getAll()
{
    $conn = connect();
    $sql = "SELECT  bill.id, 
                    bill.iduser,
                    bill.status,
                    bill.pttt,
                    bill.voucher,
                    bill.ngay_dat,
                    bill.tongthanhtoan,
                    detail_bill.gia,
                    detail_bill.id_bill AS order_id,
                    user.name as user_name,
                    user.email,
                    user.img
            FROM 
                bill
            INNER JOIN
                detail_bill ON bill.id = detail_bill.id_bill
            INNER JOIN
                user ON bill.iduser = user.id
                ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function order_add($id, $userID, $status, $method, $date, $discount_id)
{
    $conn = connect();
    $sql = "INSERT INTO bill( order_id, user_id, status, pttt, date) VALUES ('$id', '$userID', '$status', '$method', '$date','$discount_id')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function order_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM bill WHERE  order_id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function order_edit($id, $userID, $ten, $status, $method, $date)
{
    $conn = connect();
    $sql = "UPDATE bill SET iduser = '$userID', nguoidat_ten='$ten', status = '$status', pttt = '$method', ngay_dat = '$date' WHERE  id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function order_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM bill WHERE  order_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
?>