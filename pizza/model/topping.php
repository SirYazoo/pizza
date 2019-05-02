<?php
class Topping{
    public $id;
    public $nama;
    public $harga;
    public $id_pizza;

    public function __construct($id, $nama, $harga){
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
    }

    //public function __construct($id, $nama, $harga, $id_pizza){
    //    $this->id = $id;
    //    $this->nama = $nama;
    //    $this->harga = $harga;
    //    $this->id_pizza = $id_pizza;
    //}
}
?>