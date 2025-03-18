<?php
include_once 'connectDB.php';
function blog_getAll()
{
    $conn = connect();
    $sql = "SELECT  blog.id,
                    blog.id_user,
                    blog.tenblog,
                    blog.mota,
                    blog.ngayvietblog,
                    blog.noidung,
                    blog.status,
                    user.email,
                    user.name,
                    user.img AS user_image
            FROM 
                blog
            INNER JOIN 
                user ON blog.id_user = user.id
    ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function Blog_add($id, $title, $content, $userID)
{
    $conn = connect();
    $sql = "INSERT INTO blog(blog_id, title, content, user_id) VALUES ('$id', '$title','$content', '$userID')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function Blog_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM blog WHERE blog_id='$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function Blog_edit($id, $title, $content, $userID)
{
    $conn = connect();
    $sql = "UPDATE blog SET title = '$title', content = '$content', user_id = '$userID' WHERE blog_id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function Blog_getOne($id)
{
    $conn = connect();
    $sql = "SELECT * FROM blog WHERE blog_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
?>