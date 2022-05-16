<?php	
	if (empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['phone']) && strlen($_POST['phone']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	
	$to = 'donsmechka@yandex.ru'; // Почта на которую будут уходить заявки

	// Create email	
	$email_subject = "Заявка с сайта";
	$email_body = "Вы получили новую заявку с сайта.\n\n".
				  "Name: $name \nPhone: $phone \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: donsmechka@ya.ru\n";
	$headers .= "Reply-To: info@donsemechka.ru";	
	
	if( mail($to,$email_subject,$email_body,$headers) ) {
	    header('location: /thanks.html');} // Редирект послe отправки формы thanks.html или url			
?>