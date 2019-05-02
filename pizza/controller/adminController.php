<?php
    require_once "services/mysqlDB.php";
    require_once "services/view.php";

class AdminController{
    protected $db;
    
    public function __construct(){
        $this->db = new MySQLDB("localhost", "root", "", "pizza");
	}

    public function view_admin(){
		return View::createView('admin.php', []);
    }
}
?>