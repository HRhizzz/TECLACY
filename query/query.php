<?php $i = 1; 
if (empty($katakunci) && empty($minat)) {
    $laporan = query("SELECT * FROM peminatan 
    INNER JOIN user ON peminatan.email=user.email
    ORDER BY waktu_dibuat DESC");
} elseif (empty($katakunci)) {
    $laporan = query("SELECT * FROM peminatan 
    INNER JOIN user ON peminatan.email=user.email
    WHERE minat = '$minat'
    ORDER BY waktu_dibuat DESC");
} elseif (empty($minat)) {
    $laporan = query("SELECT * FROM peminatan 
    INNER JOIN user ON peminatan.email=user.email
    WHERE nama_barang LIKE '%$katakunci%' OR deskripsi LIKE '%$katakunci%'
    ORDER BY waktu_dibuat DESC");
} else {
    $laporan = query("SELECT * FROM peminatan 
    INNER JOIN user ON peminatan.email=user.email
    WHERE minat = '$minat' AND (nama_barang LIKE '%$katakunci%' OR deskripsi LIKE '%$katakunci%')
    ORDER BY waktu_dibuat DESC");
}

?>