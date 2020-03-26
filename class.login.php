<?php
class Login extends DataBoundObject {

        protected $ID;
        protected $username;
        protected $password;        
        

        protected function DefineTableName() {
                return("login");
        }

        protected function DefineRelationMap() {
                return(array(
                        "login" => "ID",
                        "username" => "username",
                        "password" => "password",
                ));
        }
        public function encontrarID($connect){
                $query = "
                   SELECT * FROM login 
                    WHERE username = :username
                 ";
                 $statement = $connect->prepare($query);
                 $statement->execute(
                    array(
                      ':username' => $_POST["username"]
                     )
                  );
                 $result = $statement->fetchAll();
                 foreach($result as $row)
                    {
                       $this->setID($row['login']);
                       $this->setpassword($row['password']);
                    }
        }
}
?>