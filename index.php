<?php

$namaDepan = 'Laurens';
$namaBelakang = 'Kostan';

$a = 10;
$b = 20;
// penjumlahan
$c = $a + $b;

// pengurangan
$kurang = $a - $b;

// pembagian
$bagi = $a / $b;

$kali = $a * $b;

// Tipe Data Float
$float = 12.94;

// Tipe Data Boolean
$t = true;
$f = false;

// operator Logika
$and = $t && $f;

$or = $t || $f;

// Array
$data = [
    [
        'nama' => 'laurens',
         'npm' => '19411024'
    ],

    [
        'nama' => 'elly',
         'npm' => '19411023'
    ],
];


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <header class="bg-secondary">
        <div class="row p-3 text-center">
            <div class="col">
                <h2 class="text-white">Tipe Data PHP</h2>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h3>Welcome <?= $namaDepan . ' ' . $namaBelakang ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <h3><?= $a . '+' . $b . '=' . $c ?></h3>
            </div>

        </div>

        <div class="row">
            <div class="col mt-3">
                <h3><?= $a . '-' . $b . '=' . $kurang ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <h3><?= $a . ':' . $b . '=' . $bagi ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <h3><?= $a . 'x' . $b . '=' . $kali ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <h3><?php var_dump($float); ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <h3><?php var_dump($and); ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <h3><?php var_dump($or); ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Npm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $index => $item):?>
                        <tr>
                            <th scope="row"><?= $index + 1?></th>
                            <td><?= $item['nama']?></td>
                            <td><?= $item['npm']?></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- Content End -->

    <!-- Footer -->
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>