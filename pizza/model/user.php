<?php
class User{
    public $id;
    public $nama;
    public $username;
    public $password;

    public function __construct($id, $nama, $username, $password){
        $this->id = $id;
        $this->nama = $nama;
        $this->username = $username;
        $this->password = $password;
    }
}
?>