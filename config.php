<?php
$db=pg_connect('host=localhost port=5433 dbname=sekolah user=postgres password=LEXIUS12_BER');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
//bang, nanti portnya dihapus bang//
?>
