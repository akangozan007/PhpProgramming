<?php
// Membuat Array
$hewan = [
    ["penguin", "alaska"],
    ["singa", "rerumputan"]
]
?>
<!doctype html>
<html>

<head>
    <title>judul page</title>
    <link rel=>
    <style>
        .kotak {
            display: inline-block;
            width: auto;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .kotak:hover {}
    </style>
</head>

<body>
    <h1>Menggunakan Array Multidimensi </h1>
    <?php foreach ($hewan as $anggota) : ?>
        <div class="kotak">
            <ul>
                <li>Nama : <?= $anggota[0]; ?></li>
                <li>habitat : <?= $anggota[1]; ?></li>
            </ul>
        </div>
    <?php endforeach; ?>
    <?php foreach ($hewan as $anggota) : ?>
        <div class="kotak">
            <ul>
                <li>Nama : <?= $anggota[0]; ?></li>
                <li>habitat : <?= $anggota[1]; ?></li>
            </ul>
        </div>
    <?php endforeach; ?>



</body>
<script src=></script>

</html>