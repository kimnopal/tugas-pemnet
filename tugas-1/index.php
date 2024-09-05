<?php
$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;
$hasilPerhitungan = (($a + $b) / ($c * $d)) - $e;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>

<body>
    <ol>
        <li>
            <div>
                <p>a = <?= $a ?></p>
                <p>b = <?= $b ?></p>
                <p>c = <?= $c ?></p>
                <p>d = <?= $d ?></p>
                <p>e = <?= $e ?></p>
                <p>Hasil Perhitungan = <?= $hasilPerhitungan ?></p>
            </div>
        </li>
        <li>
            <div>
                <p>Penjumlahan dan Pengurangan : </p>
                <p>6 + 1 = <?= 6 + 1 ?></p>
                <p>6 - 1 = <?= 6 - 1 ?></p>
                <p>Perkalian : </p>
                <p>6 * 2 = <?= 6 * 2 ?></p>
                <p>6 * 2.5 = <?= 6 * 2.5 ?></p>
                <p>Pembagian : </p>
                <p>6 / 4 = <?= 6 / 4 ?></p>
                <p>6 / 4.0 = <?= 6 / 4.0 ?></p>
                <p>6 % 5 = <?= 6 % 5 ?></p>
                <p>6 % 4 = <?= 6 % 4 ?></p>
                <p>6 % 3 = <?= 6 % 3 ?></p>
            </div>
        </li>
    </ol>
</body>

</html>