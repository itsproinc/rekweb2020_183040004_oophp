<?php


//define('NAMA', 'Bakhtiar');
//echo NAMA;
//
//echo "<br>";
//
//const UMUR = 20;
//echo UMUR;

//class Coba {
//    const NAMA = 'Bakhtiar';
//}
//
//echo Coba::NAMA;

//echo __FILE__;

//function Coba() {
//    return __FUNCTION__;
//}
//
//echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;