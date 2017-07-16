<?php
class Task_model extends Model {
    public $db;
    public $data;
    public function __construct() {
        parent::__construct();
    }

    public function get_data($sortBy) {
        if ($sortBy==''){$sortBy = 'username';}
        $st = $this->db->prepare('SELECT id, username, email, text, image, status FROM tasks ORDER BY '.$sortBy);
        $st->execute();
        $this->data = $st->fetchAll();
        return $this->data;
    }

    public function save_data($task) {
        $task['status'] = 'not solved';
        $st = $this->db->prepare("INSERT INTO 
                                tasks (username, email, text, image, status) 
                                 VALUES (:username, :email, :text, :image, :status)");
        $st->bindParam(':username', $task['username']);
        $st->bindParam(':email', $task['email']);
        $st->bindParam(':text', $task['txt']);
        $st->bindParam(':image', $task['file']);
        $st->bindParam(':status', $task['status']);
        $st->execute();
    }

    public function get_task($id) {
        $st = $this->db->prepare('SELECT text FROM tasks WHERE id=?');
        $st->execute(array($id));
        return $st->fetch()['text'];
    }

    public function  update_data ($task){
        $st = $this->db->prepare("UPDATE tasks SET text=:text, status=:status WHERE id=:id");
        $st->bindParam(':text', $task['txt']);
        $st->bindParam(':status', $task['status']);
        $st->bindParam(':id', $task['id']);
        $st->execute();
    }

}