<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL= '/pizza';
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url){
			case $baseURL."/halamanUtama":
				require_once "controller/homeController.php";
				$homeCtrl = new HomeController();
				echo $homeCtrl -> view_halamanUtama();
				break;
			case $baseURL."/admin":
				require_once "controller/adminController.php";
				$adminCtrl = new AdminController();
				echo $adminCtrl -> view_admin();
				break;
			case $baseURL."/kasir":
				require_once "controller/kasirController.php";
				$kasirCtrl = new StaffController();
				echo $kasirCtrl -> view_kasir();
				break;
			case $baseURL."/addTopping":
				require_once "controller/toppingController.php";
				$toppingCtrl = new ToppingController();
				echo $toppingCtrl -> view_addTopping();
				break;
			case $baseURL."/deleteTopping":
				require_once "controller/toppingController.php";
				$toppingCtrl = new ToppingController();
				echo $toppingCtrl -> view_deleteTopping();
				break;
			case $baseURL."/addKasir":
				require_once "controller/kasirController.php";
				$kasirCtrl = new KasirController();
				echo $kasirCtrl -> view_addKasir();
				break;
			case $baseURL."/deleteKasir":
				require_once "controller/kasirController.php";
				$kasirCtrl = new KasirController();
				echo $kasirCtrl -> view_deleteKasir();
				break;
			case $baseURL."/logout":
				require_once "controller/homeController.php";
				$homeCtrl = new HomeController();
				echo $homeCtrl->logout();
				break;
			default:
				echo '404 not found';
				break;
		}
	}
	else if($_SERVER["REQUEST_METHOD"]=="POST"){
		switch ($url){
			case $baseURL."/halamanUtama":
				require_once "controller/homeController.php";
				$homeCtrl = new HomeController();
				echo $homeCtrl -> validate();
				break;
			case $baseURL."/addTopping":
                require_once "controller/toppingController.php";
                $toppingCtrl = new ToppingController();
                $toppingCtrl->addTopping();
                header('Location: addTopping');
                break;
            case $baseURL."/deleteTopping":
                require_once "controller/toppingController.php";
                $toppingCtrl = new ToppingController();
                $toppingCtrl->deleteTopping();
                header('Location: deleteTopping');
                break;
            case $baseURL."/addKasir":
                require_once "controller/kasirController.php";
                $kasirCtrl = new KasirController();
                $kasirCtrl->addKasir();
                header('Location: addKasir');
				break;
			case $baseURL."/deleteKasir":
                require_once "controller/kasirController.php";
                $kasirCtrl = new KasirController();
                $kasirCtrl->deleteKasir();
                header('Location: deleteKasir');
                break;
			default:
				echo '404 not found';
				break;
		}
	}
?>