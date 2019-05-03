<?php
class Pembelian{
    public $id;
    public $id_pizza;
    public $ukuran;
    public $harga_pizza;
    public $id_topping;
    public $nama_topping;
    public $harga_topping;
    public $tanggal;

    public function __construct($id, $id_pizza, $ukuran, $harga_pizza, $id_topping, $nama_topping, $harga_topping, $tanggal){
        $this->id = $id;
        $this->id_pizza = $id_pizza;
        $this->ukuran = $ukuran;
        $this->harga_pizza = $harga_pizza;
        $this->id_topping = $id_topping;
        $this->nama_topping = $nama_topping;
        $this->harga_topping = $harga_topping;
        $this->tanggal = $tanggal;
    }
}
?>