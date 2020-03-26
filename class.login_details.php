<?php
class Login_Details extends DataBoundObject {

        protected $login_details;
        protected $user_id;
        protected $last_activity;
        protected $chat_message;
        protected $is_type;

        protected function DefineTableName() {
                return("login_details");
        }

        protected function DefineRelationMap() {
                return(array(
                        "login_details" => "login_details",
                        "user_id" => "user_id",
                        "last_activity" => "last_activity",
                        "is_type" => "is_type"  
                ));
        }

}

?>