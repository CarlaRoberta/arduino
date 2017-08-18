<?php

$sock = socket_create(AF_INET,SOCK_STREAM, SOL_TCP);
//conectara o web socket com arduino
$ip = "192.168.0.250";
$port = 8888;

socket_bind($sock,$ip,$port);
if (socket_conect){

$v1 = $_POST;

socket_write($sock, $v1);
}
else{
    echo socket_last_error();
}

socket_close($sock);
// retorna a index.html após acionamento dos botões;
header("Location: index.php");
//encerra a conexão com o socket

