<?php
    require_once __DIR__."/services/mysqlDB.php";
    require_once __DIR__."/services/view.php";
    require_once __DIR__."/../model/user.php";

class KasirController{
    protected $db;
    
    public function __construct(){
        $this->db = new MySQLDB("localhost", "root", "", "pizza");
	}

    public function view_addKasir(){
		$result = $this->getAllKasir();
		session_start();
		if(isset($_SESSION["role"])){
			return View::createViewAdmin('addKasir.php',[
				"result"=> $result
			]);
		}
		else{
			header("Location: halamanUtama");
		}
		session_write_close();
	}

	public function view_deleteKasir(){
		$result = $this->getAllKasir();
		session_start();
		if(isset($_SESSION["role"])){
			return View::createViewAdmin('deleteKasir.php',[
				"result"=> $result
			]);
		}
		else{
			header("Location: halamanUtama");
		}
		session_write_close();
	}
    
    public function getAllKasir(){
		$query = "SELECT `user.IdUser`,`user.Nama`,`user.Username`,`user.Password` FROM `user` WHERE `IdPeran`=2";
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value) {
			$result[] = new User($value['IdUser'], $value['Nama'], $value['Username'], $value['Password']);
		}
		return $result;
	}
		
	public function addKasir(){
		$nama = $_POST['addNamaK'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(isset($nama) && $nama != ""){
			$nama = $this->db->escapeString($nama);
			$query = "INSERT INTO user(Nama, Username, Password, IdPeran) VALUES (".$nama.",".$username.",".$password.",2)";
			$query_result = $this->db->executeNonSelectQuery($query);
		}
	}

	public function deleteKasir(){
		$nama = $_POST['delNamaK'];
		if(isset($nama) && $nama != ""){
			$nama = $this->db->escapeString($nama);
			$query = "DELETE FROM kasir WHERE Nama=".$nama;
			$query_result = $this->db->executeNonSelectQuery($query);
		}
	}
}
?>