<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $text = $_POST['text'];
    $cheese = $_POST['cheese'];

	$to = ""; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$subject = "Заказ Звонка";

	
	$msg="
    Имя: $name;
    Телефон: $phone;
    Текст: $text;
    Согласие на обработку: $cheese";
    
	mail($to, $subject, $msg);

?>

    <div class="header__form-text pop-up__body-text end-form">
        <h2 class="title-style">Успешно отправлено</h2>
    </div>
