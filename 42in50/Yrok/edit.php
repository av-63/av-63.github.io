<?php 
	$phone = $_POST['phone'];
	$fd = fopen('tel.php', w);
	fwrite($fd, $phone);
	echo "Запись файла успешно совершена. <a href='index.php'>Перейти на сайт.</a>";
 ?>