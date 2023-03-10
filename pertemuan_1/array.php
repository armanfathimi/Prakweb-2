<?php
//array indexing
$ar_buah = ['pisang','jambu','pepaya'];
// mencetak salah satu index array
echo "<br/>$ar_buah[2]";

//cetak jumlah array
echo '<br/> Jumlah Buah : ' .count($ar_buah);

//tambah data array
$ar_buah[] = "durian";

//hapus index ke-1
unset($ar_buah[1]);

//ubah buah index ke 2 menjadi manggis
$ar_buah[2] = "manggis";

// cetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah){
    echo "<li>$buah</li>"; 
}
echo "</ol>";


// array assosiatif
$buah = ["P"=>'pisang',"J"=>'jambu',"A"=>'pepaya'];
?>