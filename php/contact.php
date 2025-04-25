<?php

    $to = "engstrategy25@gmail.com"; //Resived mail here
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $headers = "From: $from";
    $subject = "You have a message from your Kabbo";

    $fields = array();
    $fields{"name"} = "EngStrategy";
    $fields{"email"} = "engstrategy25@gmail.com";
    $fields{"phone"} = "8999467969";
    $fields{"message"} = "Olá EngStrategy! Você tem uma nova mensagem de $name. \n\nTelefone: $phone\n\nEmail: $from\n\nMensagem: ".$_REQUEST['message'];

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
