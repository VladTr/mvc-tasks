<?php
class Login_controller extends Controller {

    function __construct() {
        parent::__construct();
        require_once 'app/models/login_model.php';
        $this->model = new Login_model();
    }

    public function show_action(){
       $this->view->generate_view(null, 'login_page.php');
    }

    public function check_action () {
        $result = $this->model->check($_POST['login'], $_POST['password']);
        if ($result){
            setcookie("user", "admin", time()+3600, '/');
            header('Location: /task/showtask');
        } else {
            header('Location: /login/show');
        }
    }

    public function logout_action () {
        if (isset($_COOKIE['user'])){
            unset($_COOKIE['user']);
            setcookie('user', null, -1, '/');
        }
        header('Location: /task/showtask');
    }
}