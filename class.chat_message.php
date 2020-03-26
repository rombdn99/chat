<?php
class Chat_Message extends DataBoundObject {

        protected $chat_message;
        protected $to_user_id;
        protected $from_user_id;
        protected $chat_message_text;
        protected $timestamp;
        protected $status;

        protected function DefineTableName() {
                return("chat_message");
        }

        protected function DefineRelationMap() {
                return(array(
                        "chat_message" => "chat_message",
                        "to_user_id" => "to_user_id",
                        "from_user_id" => "from_user_id",
                        "chat_message_text" => "chat_message_text",
                        "timestamp" => "timestamp",
                        "status" => "status"
                ));
        }

}

?>