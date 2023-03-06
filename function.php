<?php

// fungsi tanggal atau waktu
echo date("l, d-M-Y");
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone
echo "<br>";
echo date("F j, Y, g:i a");                  // March 10, 2001, 5:16 pm
echo "<br>";
echo date("m.d.y");                         // 03.10.01
echo "<br>";
echo date("j, n, Y");                       // 10, 3, 2001
echo "<br>";
echo date("Ymd");                           // 20010310
echo "<br>";
echo date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo "<br>";
echo date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo "<br>";
echo date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo "<br>";
echo ('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo "<br>";
echo date("H:i:s");                         // 17:16:18
echo "<br>";
echo date("Y-m-d H:i:s");
