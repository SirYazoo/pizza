<?php
class Pizza{
    public $id;
    public $ukuran;
    public $harga;

    public function __construct($id, $ukuran, $harga){
        $this->id = $id;
        $this->ukuran = $ukuran;
        $this->harga = $harga;
    }
}
?>