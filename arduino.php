<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_UDP);

$Mensagem = $_POST;

$address = "192.168.0.250";

$bind = socket_bind($socket, $address, 8888);
if($bind < 0){
    echo "Erro no bind";
}

$connect = socket_connect($socket, $address, 8888);
if($connect < 0){
    echo "Erro no connect";
}

socket_accept($socket);

socket_write($socket, $Mensagem);
echo "Enviei"

