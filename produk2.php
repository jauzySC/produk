<?php
class Produk{
    public $namaproduk;
    public $jenisproduk;
    public $jumlahproduk;
    public $stok;
    public $pembelian;

    //construct euy
    public function __construct($namaproduk = '', $jenisproduk= '', $jumlahproduk = 0, $stok = 0, $pembelian = 0) {
        $this -> nm = $namaproduk;
        $this -> jp = $jenisproduk;
        $this -> jmp = $jumlahproduk;
        $this -> s = $stok;
        $this -> p = $pembelian;
    }
    public function stokAkhirProduk(){
        //itung oy
        $this-> = ($this->stok - $this->pembelian);
        return $this->stok;
    }
}

$stokAkhir = null;

if ($_SERVER["REQUEST METHOD"] == "POST") {
    $panggilproduk= new Produk;
    $panggilproduk->stok= intval($_POST['stok']);
    $panggilproduk->pembelian = intval($_POST['pembelian'])

    $stokAkhir= $panggilproduk-> stokAkhirProduk();
}
?>