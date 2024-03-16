<?php

const CONFIG = [
    'db' => 'mysql:dbname=php_oop_crud;host=localhost;port=3306',
    'db_user' => 'root',
    'db_password' => '',

];

class DataProvider
{

    protected function connect()
    {

        try {
            return new PDO(CONFIG['db'], CONFIG['db_user'], CONFIG['db_password']);
        } catch (PDOException $e) {

            return null;
        }
    }
}

class Task extends DataProvider
{

    public function addTask($firstName, $lastName, $email, $phone)
    {
        $db = $this->connect();
        if ($db == null) {
            return;
        } else {
            $sql = "INSERT INTO users (first_name,last_name,email,phone) VALUES (:firstName,:lastName,:email,:phone) ";
            $smt = $db->prepare($sql);
            $smt->execute([
                ":firstName" => $firstName,
                ":lastName" => $lastName,
                ":email" => $email,
                ":phone" => $phone
            ]);
            $smt = null;
            $db = null;
        }
    }
    public function gatAll()
    {
        $db = $this->connect();
        if ($db == null) {
            return;
        }
        $query = $db->query('SELECT * FROM users');
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        $query = null;
        $db = null;
        return $data;
    }
}
$newTask = new Task();
$list=$newTask->gatAll();
print_r($list);
