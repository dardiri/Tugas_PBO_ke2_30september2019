<?php

class Kucing extends Binatang implements Karnifora
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
        echo "Jenis : Karnifora<br> Makan : Daging";
    }
    public function displayBinatang()
    {
        echo "Binatang : Kucing". $this->Nama."<br>"."Jumlah Kaki : ".$this->Kaki;
    }
    public function displayData()
    {
        echo "<br><br>Binatang : Kucing ". $this->nama."<br>"."Jumlah Kaki : ".$this->jmlKaki;
        echo "<br>Suara : ".$this->suara."<br>"."Warna : ".$this->warnaBulu;
        echo "<br>Jenis : Karnifora<br> Makan : Daging";
    }
}  
 
?>