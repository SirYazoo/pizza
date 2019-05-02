<?php
    require_once "services/mysqlDB.php";
    require_once "services/view.php";

class HomeController{
    protected $db;
    
    public function __construct(){
        $this->db = new MySQLDB("localhost", "root", "", "pizza");
	}

    public function view_halamanUtama(){
		return View::createView('halamanUtama.php', []);
    }

    public function validate(){
        $uname = $_POST['uname'];
        $pass = $_POST['psw'];
        $query="SELECT `IdPeran`, `Username` FROM `user` WHERE `Username`=";
        if(isset($uname) && $uname!=""){
            $uname = $this->db->escapeString($uname);
            $query.="'$uname' AND ";
        }
        if(isset($pass) && $pass!=""){
            $pass = $this->db->escapeString($pass);
            $hashedPassword = md5($pass);
            $query.="`Password`='$hashedPassword'";
        }
        $res = $this->db->executeSelectQuery($query);
        if(count($res)!=0){
            if($res[0][0]==1){
                header('Location: admin');
            }
            else if($res[0][0]==2){
                header('Location: kasir');
            }
        }
        else{
                return View::createView('halamanUtama.php', []);
        }
    }
}
?>