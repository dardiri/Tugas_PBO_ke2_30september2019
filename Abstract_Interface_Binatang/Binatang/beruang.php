<?php

class Beruang extends Binatang implements Karnifora,Herbifora
{
    protected $suara;
    protected $warnaBulu;

    public function __construct($nama, $jmlKaki, $suara, $warnaBulu)
    {
        $this->nama = $nama;
        $this->jmlKaki = $jmlKaki;
        $this->suara = $suara;
        $this->warnaBulu = $warnaBulu;
    }
    public function displayMakan()
    {
        echo "Jenis : Karnifora / Herbifora <br> 
        Makan : Daging / Tumbuhan";
    }
    public function displayBinatang()
    {
        echo "Binatang : Beruang". $this->Nama."<br>"."Jumlah Kaki : ".$this->Kaki;
    }
    public function displayData()
    {
        echo "<br><br>Binatang : Beruang ". $this->nama."<br>"."Jumlah Kaki : ".$this->jmlKaki;
        echo "<br>Suara : ".$this->suara."<br>"."Warna : ".$this->warnaBulu;
        echo "<br>Jenis : Karnifora atau Herbifora <br> Makan : Daging Atau Tumbuhan";
    }
}  
 
?>