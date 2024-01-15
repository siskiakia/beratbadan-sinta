<?php
function hitungBeratBadanIdeal($tinggi, $jenisKelamin) {
    // Batas konstan untuk berat badan ideal
    define('BATAS_BERAT_BADAN', 25);

    // Rumus untuk menghitung berat badan ideal (IMT)
    $beratBadanIdeal = BATAS_BERAT_BADAN * pow($tinggi / 100, 2);

    // Menyesuaikan berat badan ideal berdasarkan jenis kelamin
    if ($jenisKelamin == 'wanita') {
        $beratBadanIdeal *= 0.9;
    }

    return $beratBadanIdeal;
}

function tampilkanHasilBeratBadanIdeal($tinggiBadan, $jenisKelamin) {
    $beratBadanIdeal = hitungBeratBadanIdeal($tinggiBadan, $jenisKelamin);

    echo "Tinggi Badan: $tinggiBadan cm\n";
    echo "Jenis Kelamin: $jenisKelamin\n";
    echo "Berat Badan Ideal: $beratBadanIdeal kg\n";
}

// Contoh penggunaan dengan beberapa kasus
$kasus = [
    ['tinggi' => 170, 'jenisKelamin' => 'pria'],
    ['tinggi' => 160, 'jenisKelamin' => 'wanita'],
    ['tinggi' => 180, 'jenisKelamin' => 'pria'],
];

foreach ($kasus as $index => $data) {
    echo "=== Kasus $index ===\n";
    tampilkanHasilBeratBadanIdeal($data['tinggi'], $data['jenisKelamin']);
    echo "\n";
}
?>
