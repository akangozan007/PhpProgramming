<?php
function salam($nama)
{
    return "user" . " " . $nama;
}
function lastLogin($waktu)
{
    $waktu = date("l, d-M-Y");
    return $waktu;
}
?>
<!doctype html>
<html>

<head>
    <title>latihan function</title>
    <link rel=>
</head>

<body>
    <h1><?php echo "selamat belajar " . salam("razan"); ?></h1>
    <h3><?php echo '\n login terakhir ' . lastLogin($waktu); ?></h3>
</body>
<script src=></script>

</html>