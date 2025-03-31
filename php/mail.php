<?php

    $to = $_POST["email"];
    $subject = "お問い合わせありがとうございます。";
    $message = "このフォームはPHPを使用して作成しています。";

    $fromEmail = "1@web-manato.com";
    $fromName = "from まなと";

    $headers = "From: " . mb_encode_mimeheader($fromName) . " <" . $fromEmail . ">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mb_send_mail($to, $subject, $message, $headers);

?>