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
        $query="SELECT * FROM user WHERE Username=";
        if(isset($uname) && $uname!=""){
            $uname = $this->db->escapeString($uname);
            $query.= "'". $uname ."' AND ";
        }
        if(isset($pass) && $pass!=""){
            $pass = $this->db->escapeString($pass);
            $query.="Password='". $pass ."'";
        }
        $res = $this->db->executeSelectQuery($query);
        if(count($res)!=0){
            session_start();
                $_SESSION['role']=$res[0]["IdPeran"];
            session_write_close();
            if($res[0]["IdPeran"]==1){
                header('Location: admin');
            }
            else if($res[0]["IdPeran"]==2){
                header('Location: kasir');
            }
        }
        else{
            echo "
                <script type='text/javascript'>
                    alert('Wrong Username or Password');
                </script>";
            return View::createView('halamanUtama.php', []);
        }
    }
}
?>