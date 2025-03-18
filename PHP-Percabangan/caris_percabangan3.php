<body>
    <?php
    $jam = date("21:30");
    $ada_tugas = "ada";
    $waktu_ngobrol = "maju";

    if ($jam > date("15:30") && $jam <= date("15:45")) {
        echo "$jam = Andi perjalanan pulang ke rumah dari sekolah";
    } else if ($jam > date("15:45") && $jam <= ("16:15")) {
        echo "$jam = Andi membeli bumbu";
    } else if ($jam > date("16:15") && $jam <= date("16:30")) {
        echo "$jam = Andi sedang mandi";
    } else if ($jam > date("16:30") && $jam <= date("17:00")) {
        echo "$jam = Andi sedang mengaji";
    } else if ($jam > date("17:00") && $jam <= date("17:30")) {
        echo "$jam = Andi chatting dengan raya";
    } else if ($jam > date("17:30") && $jam <= date("18:00")) {
        echo "$jam = Andi sedang menghafalkan dialog";
    } else if ($jam > date("18:00") && $jam <= date("18:10")) {
        echo "$jam = Andi sholat Maghrib";
    } else if ($jam > date("18:10") && $jam <= date("18:30")) {
        echo "$jam = Andi makan malam bersama keluarga";
    } else if ($jam > date("18:30") && $jam <= date("19:00")) {
        echo "$jam = waktu luang";
    } else if ($jam > date("19:00") && $jam <= date("19:10")) {
        echo "$jam = Andi sholat Isya";
    } else if ($jam >= date("04:00") && $jam <= date("05:00")) {
        echo "$jam = Andi sedang sholat Subuh dan mengaji";
    } else if ($jam < date("07:00") && $jam > date("05:00")) {
        echo "$jam = Andi persiapan dan berangkat ke sekolah";
    } else if ($jam >= date("07:30") && $jam <= date("15:30")) {
        echo "$jam = Andi masih di sekolah";
    } else if ($jam > date("19:10") && $jam <= date("22:00")) {
        if ($ada_tugas == "ada") {
            if ($jam > date("19:10") && $jam <= date("21:10")) {
                echo "$jam = Andi mengerjakan tugas sekolah";
            } else if ($jam > date("21:10") && $jam <= date("21:40")) {
                echo "$jam = Andi mengobrol dengan keluarga";
            } else {
                echo "$jam = Andi punya waktu luang hingga sebelum tidur";
            }
            if ($waktu_ngobrol = "maju") {
                echo "<br> catatan: permintaan waktu ngobrol di" . $waktu_ngobrol . "kan ditolak";
            }
        } else {
            if ($waktu_ngobrol = "maju") {
                if ($jam > date("19:10") && $jam <= date("19:40")) {
                    echo "$jam Andi mengobrol bareng keluarga,";
                } else {
                    echo "$jam = Andi punya waktu luang hingga sebelum tidur";
                }
        } else {
            if ($jam > date("19:10") && $jam <= date("21:30")) {
                echo "$jam = Andi punya waktu luang sampai jam 21:30";
            } else {
                echo "$jam = Andi mengobrol bareng keluarga";
                }
            }
            echo "<br> Yes, bisa leha-leha!";
        }
    } else if ($jam > date("22:00") && $jam < date("24:00")) {
        echo("$jam = Andi tidur");
    } else if ($jam > date("00:00") && $jam < date("04:00")) {
        echo("$jam = Andi tidur");
    } else {
        echo ("$jam = Apa ini? Andi hidup 24 jam aja");
    }
    //Jadwal harian fullnya Andi yages
    echo "<h2>Jadwal Harian Andi</h2>";
    $jadwal = [
        ["15:30 - 15:45", "Andi perjalanan pulang ke rumah dari sekolah"],
        ["15:45 - 16:15", "Andi membeli bumbu"],
        ["16:15 - 16:30", "Andi sedang mandi"],
        ["16:30 - 17:00", "Andi sedang mengaji"],
        ["17:00 - 17:30", "Andi chatting dengan Raya"],
        ["17:30 - 18:00", "Andi sedang menghafalkan dialog"],
        ["18:00 - 18:10", "Andi sholat Maghrib"],
        ["18:10 - 18:30", "Andi makan malam bersama keluarga"],
        ["18:30 - 19:00", "Waktu luang"],
        ["19:00 - 19:10", "Andi sholat Isya"],
        ["19:10 - 21:10", "Andi mengerjakan tugas sekolah"],
        ["21:10 - 21:40", "Andi mengobrol dengan keluarga"],
        ["21:40 - 22:00", "Waktu luang hingga sebelum tidur"],
        ["22:00 - 04:00", "Andi tidur"],
        ["04:00 - 05:00", "Andi sedang sholat Subuh dan mengaji"],
        ["05:00 - 07:00", "Andi persiapan dan berangkat ke sekolah"],
        ["07:30 - 15:30", "Andi masih di sekolah"]
    ];
    
    foreach ($jadwal as $item) {
        echo $item[0] . " = " . $item[1] . "<br>";
    }
    ?>
    
    
