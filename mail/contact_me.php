<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'liuyue@vliti.com'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
$email_subject = "申请DEMO演示:  $name";
$email_body = "你从网站上收到一个客户的DEMO演示需求是的,需要的名单可以由这里提出：\n\n"."下面是详情:\n\n姓名: $name\n\n邮箱: $email_address\n\n电话: $phone\n\n留言:\n$message";
$headers = "From: noreply@YOUR-DOMAIN.com\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
