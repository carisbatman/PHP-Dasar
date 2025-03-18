<?php
$nilai = -8;

if ($nilai >= 90) {
    echo "Nilai $nilai = A";
} else if ($nilai >= 80) {
    echo "Nilai $nilai = B";
} else if ($nilai >= 70) {
    echo "Nilai $nilai = C";
} else if ($nilai >= 0) {
    echo "Nilai $nilai = D";
} else {
    echo "Nilai $nilai = Yah! Nilainya gak valid nih:(";
}
?>
