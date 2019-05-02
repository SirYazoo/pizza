<?php
    require_once __DIR__."/services/mysqlDB.php";
    require_once __DIR__."/services/view.php";
    require_once __DIR__."/../model/topping.php";

class ToppingController{
    protected $db;
    
    public function __construct(){
        $this->db = new MySQLDB("localhost", "root", "", "pizza");
	}

    public function view_addTopping(){
		$result = $this->getAllTopping();
		return View::createView('addTopping.php',[
			"result"=> $result
		]);
	}

	public function view_deleteTopping(){
		$result = $this->getAllTopping();
		return View::createView('deleteTopping.php',[
			"result"=> $result
		]);
	}
    
    public function getAllTopping(){
		$query = "SELECT topping.IdTopping,topping.Nama,topping.Harga FROM topping";
		$query_result = $this->db->executeSelectQuery($query);
		$result = [];
		foreach ($query_result as $key => $value) {
			$result[] = new Topping($value['IdTopping'], $value['Nama'], $value['Harga']);
		}
		return $result;
	}
		
	public function addTopping(){
		$nama = $_POST['addNamaT'];
		$harga = $_POST['harga'];
		if(isset($nama) && $nama != ""){
			$nama = $this->db->escapeString($nama);
			$query = "INSERT INTO topping(Nama, Harga) VALUES (".$nama.",".$harga.")";
			$query_result = $this->db->executeNonSelectQuery($query);
		}
	}

	public function deleteTopping(){
		$nama = $_POST['delNamaT'];
		if(isset($nama) && $nama != ""){
			$nama = $this->db->escapeString($nama);
			$query = "DELETE FROM topping WHERE Nama=".$nama;
			$query_result = $this->db->executeNonSelectQuery($query);
		}
	}
}
?>