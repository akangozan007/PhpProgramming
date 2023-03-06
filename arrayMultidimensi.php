<?php
// Membuat Array
$COE = [
    ["Yunus Rangga Saleh", "Kaprog"],
    ["Dimas Tresnasena", "Kabeng"],
    ["Azhar Al Afghani", "kabeng"]
];


?>
<!doctype html>
<html>

<head>
    <title>judul page</title>
    <link rel=>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>

<body>
    <h1>Menggunakan Array Multidimensi </h1>
    <?php foreach ($COE as $anggota) : ?>
        <ul>
            <li>Nama : <?= $anggota[0]; ?></li>
            <li>Jabatan : <?= $anggota[1]; ?></li>
            <li><?= $anggota[2]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
<script src=></script>

</html>