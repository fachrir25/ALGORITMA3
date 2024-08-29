<?php
if (file_exists('file_important.txt')) {
    echo "File ditemukan.";
} else {
    die("Error: File tidak ditemukan.");
}
if (!user_is_logged_in()) {
    header('HTTP/1.1 403 Forbidden');
    die("Error: Kamu tidak memiliki akses.");
}
if ($koneksi_database == false) {
    exit(1); // menghentikan skrip dengan kode keluar 1
}
// memahami output buffering
ob_start();
echo"ini adalah output buffer.";

// kondisi tertentu
if ($error) {
    ob_end_clean(); // bersihkan output buffer
    die("skrip dihentikan karena error.");
}