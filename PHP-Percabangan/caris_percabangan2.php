<?php

$waktu = "17.99";

if ($waktu >= 00.00 && $waktu < 04.00) {
    echo "$waktu  = Dini hari";
} elseif ($waktu >= 04.00 && $waktu < 10.00) {
    echo "$waktu = Pagi";
} elseif ($waktu >= 10.00 && $waktu < 15.00) {
    echo "$waktu = Siang";
} elseif ($waktu >= 15.00 && $waktu < 17.30) {
    echo "$waktu = Sore";
} elseif ($waktu >= 17.30 && $waktu < 18.30) {
    echo "$waktu = Petang";
} elseif ($waktu >= 18.30 && $waktu < 24.00) {
    echo "$waktu = Malam";
} else {
    echo "$waktu = Dunia lain";
}
?>