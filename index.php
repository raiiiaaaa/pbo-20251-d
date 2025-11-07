<?php

require_once('./LuasLingkaranNamespace.php'); // panggil file LuasLingkaran.php

use App\Math\LuasLingkaran; // panggil namespace
$lingkaran = new LuasLingkaran(10);
$lingkaran->tampil('kue'); // panggil method
LuasLingkaran::testing()
?>