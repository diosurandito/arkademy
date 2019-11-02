<?php


$nomor = $_POST['angka'];
 

function randomize($nomor)
{
    if (!preg_match('/^([0-9])/',$nomor))
    {
        echo "Inputan Bukan Angka";
    }else
    {
        $angka = [1,3,5,7,9];
        $b = [];
        for ($i=0; $i < $nomor; $i++) { 
            shuffle($angka);
            $ambilangka = $angka[0];
        
            $b[] = $ambilangka;
        }
        
        echo "Array : " . json_encode($b); 
        echo "\n";
        echo "Sum :" . json_encode(array_sum($b));
    }
    
}


randomize($nomor);







?>