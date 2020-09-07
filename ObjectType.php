<?php
  class produk{
      public $namaBarang,
             $merk,
             $harga;
    public function getcetak(){
        return "$this->namaBarang, $this->merk,(Rp  $this->harga)";
    }
    public function __construct($namaBarang="nama barang", $merk="merk", $harga=0){
        $this ->namaBarang = $namaBarang;
        $this->merk=$merk;
        $this->harga=$harga;
         
    }
  }
  
  class cetakInfoProduk{
      public function cetakInfo(Produk $produk){
          $str="Nama Barang, Merk (Rp ...)"; 
          $str="{$produk->namaBarang},{$produk->getCetak()}";
          return $str;  
      }
  }
  $produk1 = new produk("BMW M3 E36 ","BMW",80000000);
    $produk2 = new produk("Bmw M3 E46","BMW",150000000);
    $produk3 = new produk("Land Cruiser VXR200","Toyota",110000000);
    $produk4 = new produk("BMW 420i","BMW",850000000);
    $infoProduk = new cetakInfoProduk(); 

    echo "Nama Barang 1: " . $produk1->getCetak();
    echo "<br>";
    echo "Nama barang 2: " . $produk2->getCetak();
    echo "<br>";
    echo "Nama Barang 3: " . $produk3->getCetak();
    echo "<br>";
    echo "Nama Barang 4: " . $produk4->getCetak();
    echo "<br>";  
    echo $infoProduk->cetakInfo($produk3); 
?>