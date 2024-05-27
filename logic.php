<?php
class Motor {
    private $Mio63free;
    private $Aerok58;
    private $Vesmet;
    private $Rcbrice;
    protected $Ppn;

    function __construct() {
        $this->Ppn = 10000;
    }
     
    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->Mio63free = $tipe1;
        $this->Aerok58 = $tipe2;
        $this->Vesmet = $tipe3;
        $this->Rcbrice = $tipe4;
    }
    
    public function getHarga() {
        $data["Mio63free"] = $this->Mio63free;
        $data["Aerok58"] = $this->Aerok58;
        $data["Vesmet"] = $this->Vesmet;
        $data["Rcbrice"] = $this->Rcbrice;
        return $data;
    }
}

class Beli extends Motor {
    public function CetakPembelian() {
        // output harga//
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->waktu * $dataHarga[$this->jenis];
        $hargaRental = $hargaBeli + $this->Ppn;

        //if else non member dan member//
        if ($this->nama == "Asya" || $this->nama == "Rizky" ||  $this->nama == "Jeno") {
            $status = "Member ";
            $hargaRental1 = $hargaRental;
            $hargadiskon = $hargaRental1 * 5/100;        
            $hargaRental = $hargaRental1 - $hargadiskon;    
            $diskon = "Mendapakan diskon sebesar 5%";
        }else {
            $status = "Non-Member";
            $diskon = "Tidak Mendapat Diskon";
        };

        // output akhir //
        echo "<center>";
        echo $this->nama . " Bersatus sebagai " . $status .  $diskon . "<br>";
        echo "Jenis Motor yang dirental adalah " . $this->jenis . " Selama " . $this->waktu . " Hari" . "<br>";
        echo "Harga rental per-harinya : " . number_format($dataHarga[$this->jenis], 0, ',' , '.') . "<br>" . "<br>";
        echo "Besar yang harus dibayarkan adalah " . number_format($hargaRental, 0, ',', '.') . "<br>";
        echo "</center>";
}

}