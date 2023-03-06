<?php
// Membuat Array
$COE = ["Kaprog", "Kabeng", "Kabeng2", "Nzan", "Vina", "Dona"];

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
    <h1>test</h1>
    <?php for ($i = 0; $i < count($COE); $i++) { ?>
        <div>
            <?php
            // fungsi count() untuk melakukan perulangan
            // menurut jumlah isian array
            echo $COE[$i];
            ?>
        </div>
    <?php } ?>
</body>
<script src=></script>

</html>