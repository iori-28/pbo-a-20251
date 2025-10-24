<?php

class LuasLingkaran
{
    public const phi = 3.14;
    public int $jari;

    public function tampilLl($nama = 'ban')
    {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran " . ($nama) . " Ini Hasil luasnya adalah: " . $rumus . "<br>";
    }

    public static function testing()
    {
        echo "Ini testing static";
    }
}

class KelilingLingkaran
{
    public const phi = 3.14;
    public int $jari;

    public function tampilKl($nama = 'ban')
    {
        $rumus2 = KelilingLingkaran::phi * (2 * $this->jari);
        echo "Lingkaran " . ($nama) . " Hasil kelilingnya adalah: " . $rumus2 . "<br>";
    }
}

$Lingkaran = new LuasLingkaran();
$Lingkaran->jari = 10;
$Lingkaran->tampilLl('ban');

$Lingkaran2 = new KelilingLingkaran();
$Lingkaran2->jari = 10;
$Lingkaran2->tampilKl('ban');

LuasLingkaran::testing();
