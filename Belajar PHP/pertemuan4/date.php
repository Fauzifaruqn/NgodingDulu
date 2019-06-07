<?php
    // Date untuk menampilkan tanggal dengan format tertentu
    // echo date("l/d/m");

    
    // Time
    // Epoh Time : asal mula waktu di dunia IT
    // echo time();
    // echo date("d m y" , time()+60*60*24*100)

    // Mktime : untuk membuat sendiri detik yang sudah berlalu
    // mktime(0,0,0,0,0,0,0);
    // jam, menit,detik,bulan,tanggal,tahun,
    echo mktime(0,0,0,9,20,1997);

    // User Define Function 

    function setHeight($minHeight = 50)
    {
        echo "The Height is : $minHeight <br>";
    }

    setHeight(135);
    set
?>