<?php

//insert_chat.php

include('database_connection.php');
include ('abstract.databoundobject.php');

include('class.chat_message.php');
session_start();
/*
$data = array(
 ':to_user_id'  => $_POST['to_user_id'],
 ':from_user_id'  => $_SESSION['user_id'],
 ':chat_message'  => $_POST['chat_message'],
 ':status'   => '1'
);

$query = "
INSERT INTO chat_message 
(to_user_id, from_user_id, chat_message, status) 
VALUES (:to_user_id, :from_user_id, :chat_message, :status)
";*/

$statement = $connect->prepare($query);

$nuevomensaje = new Chat_Message($connect);
$nuevomensaje->setto_user_id($_POST['to_user_id'])->setfrom_user_id($_SESSION['user_id'])->setchat_message_text($_POST['chat_message'])->setstatus(1)->Save();
/*if($statement->execute($data))
{
 echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $connect);
}*/

?>