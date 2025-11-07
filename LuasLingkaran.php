<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($IsiJari = 1) {
        $this->jari = $IsiJari;
    }

    public function __destruct() {
        echo "<br>";
        echo "udah ah cape";
    }
    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Lingkaran $nama hasilnya adalah: $rumus";
    }
    
    public static function testing() {
        echo "<br>";
        echo "ini dari static";
    }
}

$lingkaran = new LuasLingkaran(7);
$lingkaran->tampil('kue'); // panggil method
LuasLingkaran::testing()
?>