<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$tel) {$error .= 'Укажите ваш номер. ';}
	if(!$error) {
		$address = "modest.vlad@yandex.ru";    // ВНИМАНИЕ! Здесь указываем адрес электронной почты на которую будут приходить письма
		$mes = "Имя: ".$name."\n\nТелефон:" .$tel;
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$name");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>