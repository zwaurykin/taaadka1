<?php require "dbconnect.php"; ?><?php

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if (isset($_POST["addReview"]) && !empty($_POST["rating"]) && !empty($_POST["review"])) {
    $sql = "INSERT INTO reviews (productId,rating,review) VALUES ('" . $_POST["id"] . "', '" . $_POST["rating"] . "', '" . $_POST["review"] . "')";
    // echo $sql;
    $result = $conn->query($sql);
    // echo $result->fetch_array()[0];
    $sql = "SELECT AVG(rating) FROM reviews WHERE productId = '" . $_POST["id"] . "'";
    $result = $conn->query($sql);
    $avgRating = intval($result->fetch_array()[0]);

    $sql = "UPDATE product SET rating = " . $avgRating . " WHERE id = '" . $_POST["id"] . "'";
    $result = $conn->query($sql);
}
echo $_SERVER['HTTP_REFERER'];
header("location: {$_SERVER['HTTP_REFERER']}");
exit;
// header("location: loginPage.php");
?>