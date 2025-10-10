<?php

class LuasLingkaran
{
    public const phi = 3.14;
    public int $jari;
}

class KelilingLingkaran
{
    public const phi = 3.14;
    public int $jari;
}

$Lingkaran = new LuasLingkaran();
$Lingkaran->jari = 10;

$Lingkaran2 = new KelilingLingkaran();
$Lingkaran2->jari = 10;

$rumus = LuasLingkaran::phi * ($Lingkaran->jari * $Lingkaran->jari);
$rumus2 = KelilingLingkaran::phi * (2 * $Lingkaran2->jari);

echo "Hasil luasnya adalah: " . $rumus;
echo "Hasil kelilingnya adalah: " . $rumus2;
