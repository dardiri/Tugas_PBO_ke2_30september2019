<?php

require_once 'dinamis/init.php';

$Kucing = new Kucing("Pepi", 4, "Meong meong", "Coklat");
$Gajah = new Gajah("Pawpaw",4, "Toreet treet","Abu-abu");
$Beruang = new Beruang("Bluang",4, "Grooa grooa","Hitam");
$Kucing->DisplayData();
$Gajah->DisplayData();
$Beruang->DisplayData();


?>