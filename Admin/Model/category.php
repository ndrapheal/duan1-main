
<?php
include_once 'connectDB.php';
function category_getAll()
{
    $conn = connect();
    $sql = "SELECT * FROM loaisach";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function publisher_getAll()
{
    $conn = connect();
    $sql = "SELECT * FROM nxb";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function genre_add($id, $name)
{
    $conn = connect();
    $sql = "INSERT INTO loaisach(id, name) VALUES ('$id', '$name')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function genre_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM loaisach WHERE id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function genre_edit($id, $name)
{
    $conn = connect();
    $sql = "UPDATE loaisach SET name = '$name' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function genre_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM loaisach WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function publisher_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM nxb WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function publisher_add($id, $name)
{
    $conn = connect();
    $sql = "INSERT INTO nxb(id, name) VALUES ('$id', '$name')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function publisher_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM nxb WHERE id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function publisher_edit($id, $name)
{
    $conn = connect();
    $sql = "UPDATE nxb SET name = '$name' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
// Author
function author_getAll()
{
    $conn = connect();
    $sql = "SELECT * FROM tacgia";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function author_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM tacgia WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function author_add($id, $name)
{
    $conn = connect();
    $sql = "INSERT INTO tacgia(id, name) VALUES ('$id', '$name')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function author_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM tacgia WHERE id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function author_edit($id, $name)
{
    $conn = connect();
    $sql = "UPDATE tacgia SET name = '$name' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
//COUNT CATEGORY
function countAuthor()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totala FROM tacgia";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function countGenre()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totalg FROM loaisach";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function countPublisher()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totalp FROM nxb";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
?>