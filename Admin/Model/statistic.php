<?php
include_once 'connectDB.php';
// function getUserCount()
// {
//     $conn = connect();
//     $sql = "SELECT COUNT(*) AS user_count FROM user";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data['user_count'];
// }

// function getBookCount()
// {
//     $conn = connect();
//     $sql = "SELECT COUNT(*) AS book_count FROM book";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data['book_count'];
// }

// function getGenreCount()
// {
//     $conn = connect();
//     $sql = "SELECT COUNT(*) AS genre_count FROM genre";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data['genre_count'];
// }

// function getPublisherCount()
// {
//     $conn = connect();
//     $sql = "SELECT COUNT(*) AS publisher_count FROM publisher";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data['publisher_count'];
// }

// function getBlogCount()
// {
//     $conn = connect();
//     $sql = "SELECT COUNT(*) AS blog_count FROM blog";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data['blog_count'];
// }

// function getReviewCount()
// {
//     $conn = connect();
//     $sql = "SELECT COUNT(*) AS review_count FROM reviews";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data['review_count'];
// }

// function getPromotionCount()
// {
//     $conn = connect();
//     $sql = "SELECT COUNT(*) AS promotion_count FROM promotions";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data['promotion_count'];
// }
// function getOrderCount()
// {
//     $conn = connect();
//     $sql = "SELECT
//     SUM(`order`.TotalAmount) AS total_revenue,
//     COUNT(DISTINCT item.ItemID) AS total_products_sold,
//     SUM(item.Price * item.Quantity) AS total_product_sales,
//     SUM(item.Quantity) AS total_product_quantity
// FROM
//     `order`
// LEFT JOIN
//     `item` ON `order`.OrderID = item.OrderID
// GROUP BY
//     `order`.OrderID";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data;
// }
function countUser()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totalu FROM user";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function countBlog()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totalb FROM blog";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function countReview()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totalr FROM binhluan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function countOrder()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totalo FROM bill";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function countBook()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) AS totalb FROM sach";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function countTotal()
{
    $conn = connect();
    $sql = "SELECT SUM(tongthanhtoan) AS total FROM bill";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
?>