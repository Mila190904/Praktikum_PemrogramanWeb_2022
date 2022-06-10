<?php
$ar_buah = ["p" => "pepaya", "a" => "apel", "m" => "mangga", "j" => "jambu"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol";


// fungsi sort berguna untuk mengurutkan array dalam urutan menaik
sort($ar_buah);
echo "<br>";
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";


// fungsi arsort berguna untukmengurutkan array dalam urutan menurun
arsort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr/>";
?>


<!-- Fungsi array pop berguna untuk menghapus nilai terakhir dalam sebuah data array -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>


<!-- Fungsi array push berguna untuk menambahkan nilai ke dalam data array terakhir -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims, "wati");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>


<!-- Fungsi array shift berguna untuk menghapus nilai awal dari sebuah data array-->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_shift($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>


<!-- Fungsi array unshift berguna untuk menambahkan nilai array satu atau lebih di sebuah data array -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_unshift($tims, "wati", "joko");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>