<?php

require_once('./LuasLingkaran.php'); //cara panggil file

use App\Math\LuasLingkaran; //panggil class

$lingkaran = new LuasLingkaran(10);
// $lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil static method