<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

// cetak buah index ke-2
echo "Ini adalah hasil data buah dalam array";
echo "<br/>$ar_buah[2]";
echo "<br/>Jumlah buah " .count($ar_buah);

// cetak seluruh buah
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// Tambahkan buah
$ar_buah[] = "Durian";

// hapus buah
unset($ar_buah[1]);

// Ubah buah index ke dua menjadi manggis
$ar_buah[2] = "manggis";

// cetak seluruh buah dengan index nya
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo "<li> buah index - $k adalah $v </li>";
}
echo "</ul>"
?>