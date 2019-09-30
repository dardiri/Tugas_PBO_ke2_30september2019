<?php

class Gajah extends Binatang implements Herbifora
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
        echo "Jenis : Herbifora <br> Makan : Tumbuhan";
    }
    public function displayBinatang()
    {
        echo "Binatang : Gajah". $this->Nama."<br>"."Jumlah Kaki : ".$this->Kaki;
    }
    public function displayData()
    {
        echo "<br><br>Binatang : Gajah ". $this->nama."<br>"."Jumlah Kaki : ".$this->jmlKaki;
        echo "<br>Suara : ".$this->suara."<br>"."Warna : ".$this->warnaBulu;
        echo "<br>Jenis : Herbifora <br> Makanan : Tumbuhan";
    }
}  
 
?>