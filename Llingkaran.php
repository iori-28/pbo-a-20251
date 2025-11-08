<?php

class LuasLingkaran
{

    public const phi = 3.14;
    public int $jari;
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 12;

$rumus = LuasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);
echo "Hasilnya adalah: " . $rumus;
