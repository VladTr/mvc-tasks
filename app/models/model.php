<?php
class Model{
 public function __construct() {
     try {
         if(file_exists('database/my_database.db')){
             $this->db = new PDO('sqlite:database/my_database.db');
         } else throw new MyException('база данных отсутствует');

     } catch (MyException $exception) {
         echo $exception->getMessage();
     }
 }

    public function get_data ($sort){}
 public function save_data($task){}
}