<?php 

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$web = $_POST['user_web'];
$text = $_POST['user_text'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers МОЖНО ЧЕРЕЗ ЯШУ smtp.yandex.ru но измени строку 18 (там сейчас 465)
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'temp_bot_sm@mail.ru';                 // Наш логин
$mail->Password = 'NewSM1983';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to ДЛЯ MAIL 465, для яши загугли...
 
$mail->setFrom('temp_bot_sm@mail.ru', 'Бот ШколаМастера');   // От кого письмо 
$mail->addAddress('a89033010872@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Это тема сообщения';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Your name: ' . $name . ' <br>
	Your Email: ' . $email . ' <br>
	Your Phone: ' . $phone . ' <br>
	Web Site: ' . $web . ' <br>
	Message: ' . $text;
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
	// echo 'ОШИБКА';
	// echo 'Error: ' . $mail->ErrorInfo;
    return false;
} else {
	// echo 'Good!';
    // header ('location: ../thanks.html');
     return true;
}

?>