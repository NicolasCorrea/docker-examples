<?php

namespace Mini\Model;

use Mini\Core\Model;

class User extends Model
{
    private $id;
    private $name;
    private $last_name;
    private $email;
    private $avatar;

    public function __GET($name)
    {
        return $this->$name;
    }

    public function __SET($name, $value)
    {
        $this->$name = $value;
    }

    public function getUser($id)
    {
        $sql = "SELECT id, name, last_name, email, avatar FROM users where id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $this->id); 
    }
}
