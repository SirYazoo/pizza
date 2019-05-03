<?php
class Topping{
    public $id;
    public $nama;
    public $harga;

    public function __construct($id, $nama, $harga){
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
    }
}
?>