<?php
  $name = $_POST["name"];
 $name=urldecode($name)
 if (mail("em18112002@gmail.com", "Заявка с сайта", "E-mail: ".$name ,"From: em18112002@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>