<?php
    $dta[0]["Nama"] = "Jeni";   
    $dta[0]["TGL_LAHIR"] = "2004-04-10";
    $dta[0]["JKEL"] = "P";
    $dta[0]["Alamat"] = "Denpasar";
    $dta[0]["Jurusan"] = "TI-KAB";

    $dta[1]["Nama"] = "Dina";
    $dta[1]["TGL_LAHIR"] = "2004-05-20";
    $dta[1]["JKEL"] = "P";
    $dta[1]["Alamat"] = "Badung";
    $dta[1]["Jurusan"] = "TI-KAB";

    $dta[2]["Nama"] = "Eka";
    $dta[2]["TGL_LAHIR"] = "2003-10-24";
    $dta[2]["JKEL"] = "P";
    $dta[2]["Alamat"] = "Karangasem";
    $dta[2]["Jurusan"] = "TI-KAB";



    header("Content-type:application/json; charset=utf-8");
    echo  json_encode($dta);
