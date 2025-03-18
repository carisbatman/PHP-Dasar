<?php
//KASUS 1
//Senin, 10 - Mar - 2025
$hari = ["minggu", 
        "senin", 
        "selasa", 
        "rabu", 
        "kamis", 
        "jumat", 
        "sabtu"
    ];
$tanggal = array(
                "1", 
                "2", 
                "3", 
                "4", 
                "5", 
                "6", 
                "7", 
                "8", 
                "9", 
                "10", 
                "11",
                "12", 
                "13", 
                "14", 
                "15", 
                "16", 
                "17", 
                "18", 
                "19", 
                "20", 
                "21", 
                "22", 
                "23", 
                "24", 
                "25", 
                "26", 
                "27", 
                "28", 
                "29", 
                "30", 
                "31"
            );
$bulan = [
        "Jan", 
        "Feb", 
        "Mar", 
        "April", 
        "Mei", 
        "Juni", 
        "Juli", 
        "Ags", 
        "Sep", 
        "Okt", 
        "Nov", 
        "Des"
    ];
$tahun = array("2024", "2025", "2026");
//Senin, 10 - Mar - 2025
echo $hari[1] .", ".$tanggal[9]." - ".$bulan[2]." - ".$tahun[1];
echo "<br>";
//Selasa, 18 - Mar - 2025
echo $hari[2] . ", " . $tanggal[17] . " - " . $bulan[2] . " - " . $tahun[1];
echo "<hr>";
//main loooping nambah otomatis
for ($i = 30; $i >= 10; $i--) {
    echo $i;
    echo "<br>";
}
echo "<hr>";
//hari menggunakan for,
$jml_hari = count($hari);
for($h = 0; $h < $jml_hari; $h++) {
    echo $hari[$h];
    echo "<br>";
}
echo "<hr>";
//tanggal menggunakan foreach,
foreach ($tanggal as $tgl){
    echo $tgl;
    echo "<br>";
}
echo "<hr>";
//bulan menggunakan while,
$b = 0;
$jml_bulan = count($bulan);
while($b < $jml_bulan) {
    echo $bulan[$b];
    echo "<br>";
    $b++;
}
echo "<hr>";
//tahun menggunakan do while
$t = 0;
$jml_tahun = count($tahun);
do {
    echo $tahun[$t];
    echo "<br>";
    $t++;
} while ($t < $jml_tahun);
echo "<hr>";

//KASUS 2
//Si pitik turunlah 30, mati 1 tinggal si mboknya
for ($i = 30; $i >= 1; $i--) {
    if ($i == 1) {
        echo "Anak ayam turunlah $i, mati 1 tinggal induknya<br>";
    } else {
        echo "Anak ayam turunlah $i, mati 1 tinggal ".($i - 1)."<br>";
    }
}
echo "<hr>";

//KASUS 3
//Mawar yang dimiliki sholeh(ah)
$mawar_dimiliki = [];
for ($mawar = 21; $mawar >= 10; $mawar--) {
    $mawar_dimiliki[] = $mawar;
    echo "Mawar nomor $mawar dimiliki Sholeh<br>";
}
echo "Jumlah mawar yang dimiliki Sholeh: " . count($mawar_dimiliki) . "<br>";
// Mawar yang akan diberikan ke ibunya
$mawar_diberikan = [];
$jumlah_diberikan = 0;
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    $mawar_diberikan[] = $mawar;
    echo "Mawar nomor $mawar diberikan Sholeh kepada ibunya<br>";
    $jumlah_diberikan++;
}
echo "Jumlah mawar yang diberikan Sholeh: $jumlah_diberikan<br>";
echo "<hr>";

//KASUS 4
//Ambyar si moodyan dan lagu-lagunya
$mood_lagu = [
    ["mood" => "galau", "lagu" => "Mesin Waktu - Budi Doremi"],
    ["mood" => "sedang bersemangat", "lagu" => "Selamat Pagi - Ran"],
    ["mood" => "marah", "lagu" => "Yang Patah Tumbuh, Yang Hilang Berganti - Banda Neira"]
];
//suasana hati si ambyar sekarng
$mood_sekarang= "marah";
//output nya si ambyar
foreach ($mood_lagu as $item) {
    if ($item["mood"] === $mood_sekarang) {
        echo "Ambyar sedang $mood_sekarang, mendengarkan lagu: " . $item["lagu"] . "<br>";
    }
}
?>