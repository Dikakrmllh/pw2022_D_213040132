<?php
    // Date
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // time
    // UNIX Timestap / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,2,23,2001));


    // strtotime
    echo date("l", strtotime("23 february 2001"));
?>
