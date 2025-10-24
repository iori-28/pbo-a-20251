<?php

class LuasLingkaran
{
    public const phi = 3.14;
    public int $jari;

    public function __construct($isijari = 1)
    {
        $this->jari = $isijari;
    }

    public function tampilLl($nama = 'ban')
    {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran " . ($nama) . " Ini Hasil luasnya adalah: " . $rumus . "<br>";
    }

    public static function testing()
    {
        echo "</br>";
        echo "Ini testing static<br>";
    }

    public function __destruct()
    {
        echo "Udah capek<br>";
    }
}

class KelilingLingkaran
{
    public const phi = 3.14;
    public int $jari;
    public function __construct($isijari = 1)
    {
        $this->jari = $isijari;
    }

    public function tampilKl($nama = 'ban')
    {
        $rumus2 = KelilingLingkaran::phi * (2 * $this->jari);
        echo "Lingkaran " . ($nama) . " Hasil kelilingnya adalah: " . $rumus2 . "<br>";
    }

    public static function testing()
    {
        echo "</br>";
        echo "Ini testing static keliling<br>";
    }

    public function __destruct()
    {
        echo "</br>";
        echo "Udah capek keliling<br>";
    }
}

$Lingkaran = new LuasLingkaran(10);
$Lingkaran->tampilLl('ban');

$Lingkaran2 = new KelilingLingkaran(10);
$Lingkaran2->tampilKl('ban');

LuasLingkaran::testing();
KelilingLingkaran::testing();
