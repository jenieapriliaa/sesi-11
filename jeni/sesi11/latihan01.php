<?php
    $dta["Nama"] = "Jeni";
    $dta["TGL_LAHIR"] = "2004-04-10";
    $dta["JKEL"] = "P";
    $dta["Alamat"] = "Denpasar";
    $dta["Jurusan"] = "TI-KAB";



    header("Content-type:application/json; charset=utf-8");
    echo  json_encode($dta);
