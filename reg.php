<?php


 $link = mysqli_connect("localhost", "root", "root", "test");

 if (mysqli_connect_errno()) {
     printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
 }

if (isset($_POST['user']) && isset($_POST['phone'])){
    $name = $_POST['user'];
    $phone = $_POST['phone'];
    if ($phone == null){
        $result = mysqli_query($link, "INSERT INTO `registration`(`user_name`) VALUES ('$name')") or die("Ошибка " . mysqli_error($link));
    } else{
        $result = mysqli_query($link, "INSERT INTO `registration`(`user_name`, `phone`) VALUES ('$name', '$phone')") or die($phone."Ошибка " . mysqli_error($link));
    }

    if ($result) {
        echo json_encode(array('success' => 1, 'message' => 'данные добавлены'));
    } else {
        echo json_encode(array('success' => 0));
    }
}








