<?php
class Task_controller extends Controller {
    function __construct() {
        parent::__construct();
        require_once 'app/models/task_model.php';
        $this->model = new Task_model();
    }

    function showTask_action ($param, $page) {
        $dataSet = null;
        if ($param == ''){
            $dataSet['param'] = 'username';
        } else {
            $dataSet['param'] = $param;
        }
        $dataSet['data'] = $this->model->get_data($param);
        $dataSet['pages'] = ceil(count($dataSet['data'])/3);
        if ($page == 1){
            $dataSet['start'] = 0;
        } else {
            $dataSet['start'] = ($page-1)*3;
        }
        $dataSet['finish'] =  $dataSet['start']+3;
        if ($dataSet['finish'] > count($dataSet['data'])){
            $dataSet['finish'] = count($dataSet['data']);
        }
        $this->view->generate_view($dataSet, 'task_page.php');
    }

    function addTask_action () {
        $this->view->generate_view(null, 'newtask_page.php');
    }

    function saveTask_action () {
        $task = null;
        $task['username'] = $_POST['username'];
        $task['email'] = $_POST['email'];
        $task['txt'] = $_POST['txt'];
        $task['file'] = $_FILES['file']['name'];
        $type = $_FILES['file']['type'];
        if (($type != "image/jpg") && ($type != "image/jpeg") && ($type != "image/gif") && ($type != "image/gif")){
            exit('выберите правильный тип файла');
        }
        $path = 'app/img/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $path);
        $this->model->save_data($task);
        header('Location: /task/showtask');
    }

    function editShow_action($id){
        $dataSet['text'] = $this->model->get_task($id);
        $dataSet['id'] =$id;
        $this->view->generate_view($dataSet, 'edittask_page.php');
    }

    function editSave_action (){
        $task['id'] = $_POST['id'];
        $task['txt'] = $_POST['txt'];
        if ($_POST['check']=='on'){
            $task['status']= 'solved';
        } else {
            $task['status']= 'not solved';
        }
        $this->model->update_data($task);
        header('Location: /task/showtask');
    }


}