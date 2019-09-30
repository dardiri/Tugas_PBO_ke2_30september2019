<?php

abstract class Binatang
{
    protected $nama;
    protected $jmlKaki;

    public function __construct($nama, $jmlKaki)
    {
        $this->nama = $nama;
        $this->jmlKaki = $jmlKaki;
    }      
    
    public function SetNama($nama)
    {
        $this->nama = $nama;
    }

    public function GetNama()
    {
        return $this->nama;
    }

    public function SetKaki($jmlKaki)
    {
        $this->jmlKaki = $jmlKaki;
    }

    public function GetKaki()
    {
        return $this->jmlKaki;
    }

    public function displayBinatang()
    {
        echo "Binatang : ". $this->Nama."<br>"."Jumlah Kaki : ".$this->jmlKaki;
    }
}

?>