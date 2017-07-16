<?php
class Login_model extends Model {
    public $db;
    public function __construct() {
        parent::__construct();
    }

    public function check($login,$password) {
        $st = $this->db->prepare("SELECT * from users WHERE login=?");
        $st->execute(array($login));
        $data = $st->fetchAll();
        foreach ($data as $value){
            if ($value['password'] == $password){
                return true;
            }
        }
        return false;
    }

}




