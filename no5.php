<?php 

$word = $_POST['word'];
// $word = "purwokerto";
$b = $_POST['first'];
// $b = "e";
$c = $_POST['replace'];
// $c = "o";

function ganti_kata($word,$b,$c){
    $a = str_split($word);
$d = "";
$jumlah = count($a);
for ($i=0; $i < $jumlah; $i++) { 
    if ($a[$i] == $b) {
        $a[$i] = $c;
    }

    $d = $d.$a[$i];
    
}
return $d;
}

echo ganti_kata($word,$b,$c);


?>