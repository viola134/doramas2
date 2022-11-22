<?php
ob_start();
include "header.php";
include "action2.php";
echo "\n<h2>Secret information</h2>\n";
if (isset($_GET['login']) && $_GET['login'] != "") {
    $admin = $_GET['login'];
    if (check_log("admin") == true) {
        echo "<p>Hello, $admin</p>";
        echo "<p>Links, where you can watch all these doramas:</p>";
        echo '<p>My name: <a href="https://doramy.club/28191-moyo-imya.html" target="_blank">https://doramy.club/28191-moyo-imya.html</a></p>';
        echo '<p>The sory of Gumiho: <a href="https://doramy.club/22104-13-skazanie-o-kumixo.html" target="_blank">https://doramy.club/22104-13-skazanie-o-kumixo.html</a></p>';
        echo '<p>Strangers from hell: <a href="https://kinogo.zone/crime/12290-neznakomcy-iz-ada-hd-dolby7-v1.html" target="_blank">https://kinogo.zone/crime/12290-neznakomcy-iz-ada-hd-dolby7-v1.html</a></p>';
        echo '<p>Big mouth: <a href="https://doramy.club/32326-boltun.html" target="_blank">https://doramy.club/32326-boltun.html</a></p>';
        echo '<p>Descendants of the sun: <a href="https://doramy.club/4-dorama-potomki-solnca.html" target="_blank">https://doramy.club/4-dorama-potomki-solnca.html</a></p>';
        echo '<p>Flower of Evil: <a href="https://doramy.club/20612-cvetok-zla.html" target="_blank">https://doramy.club/20612-cvetok-zla.html</a></p>';
    }
} else {
    header("Location: index.php");
    ob_end_flush();
}
include "footer.php";