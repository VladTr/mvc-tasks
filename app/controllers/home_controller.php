<?php
class Home_controller extends Controller {
    function index_action(){
        $this->view = new View();
        $this->view->generate_view(null,'home_page.php');
    }
}