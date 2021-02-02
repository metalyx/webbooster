<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$product_name = $_POST['product_name'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$product_name = htmlspecialchars($product_name);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$product_name = urldecode($product_name);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$product_name = trim($product_name);

if (mail("example@mail.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email.". Телефон: ".$phone.". Название товара: ".$product_name ,"From: example2@mail.ru \r\n"))
    {     
        echo "Cообщение успешно отправлено!";
        header("Refresh:3; url=index.php");
    } 
else 
    {
        echo "При отправке сообщения возникли ошибки!";
    }
?>