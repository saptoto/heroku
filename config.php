<?php
//koneksi ke database
mysql_connect("localhost", "akbidyo2_bukti", "gendel");
mysql_select_db("akbidyo2_bukti");
 
//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
 
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
 
    $bytes /= pow(1024, $pow);
 
    return round($bytes, $precision) . ' ' . $units[$pow];
}
?>