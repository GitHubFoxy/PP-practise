<?php
require_once('./connect.php');
$name = $_POST['name'];
$steps = $_POST['steps'];
$descr = $_POST['descr'];
$time = $_POST['time'];
$products = $_POST['products'];
$todo = $_POST['todo'];
$image_link = $_POST['image_link'];
$sql = "INSERT INTO `recipes` (`id`, `name`, `descr`, `steps`, `time`, `todo`, `products`, `votes`, `image_link`, `author`) VALUES (NULL, '$name', '$descr', '$steps', '$time', '$todo', '$products', '', '$image_link', '')";
if ($result = $conn->query($sql)){
    echo "Good";
} else {
    echo "bade";
}

?>