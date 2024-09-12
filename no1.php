<?php 
$text = "selamat ulang tahun yang ke-17!";
$karakterDicari = 'a';


$jumlahKemunculan = substr_count($text, $karakterDicari);
echo "karakter dicari '$karakterDicari',munculkan sebanyak '$jumlahKemunculan',kali dalam kalimat$text.";


if($jumlahKemunculan >0){
    ($text >=$karakterDicari);
} else{
    echo "karakter dicari '$karakterDicari',munculkan sebanyak '$jumlahKemunculan',kali dalam kalimat$text.";
}
 