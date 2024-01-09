<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "teclacy";

// Koneksi dan memilih database di server
	
$conn = mysqli_connect($server,$username,$password,$database);


// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Jakarta');

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc(($result))) {
        $rows[] = $row;
    }
    return $rows;
}


// Fungsi untuk registrasi
function registrasi($data) {
    global $conn;

    // Ambil data dari form
    $nama = mysqli_real_escape_string($conn, htmlspecialchars($data["nama"]));
    $nim = mysqli_real_escape_string($conn, htmlspecialchars($data["nim"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Query cek apakah email sudah terdaftar
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Akun sudah terdaftar');</script>";
        return false;
    }

    // Validasi konfirmasi password
    if ($password !== $password2) {
        echo "<script>alert('Kata sandi tidak sesuai');</script>";
        return false;
    }

    // Enkripsi password sebelum disimpan ke database
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO user (username, nama, nim, email, password) VALUES ('$email', '$nama', '$nim', '$email', '$password')";
    
    // Eksekusi query
    mysqli_query($conn, $query);

    // Cek jika data berhasil disimpan
    if (mysqli_affected_rows($conn) > 0) {
        return true;
    } else {
        echo "<script>alert('Gagal menambahkan user baru');</script>";
        return false;
    }
}

// ubah profil akun
function ubahprofil($data, $imageName){
    global $conn;
    
    $id = $data["id"];
    $username = $data["username"];
    $nama = htmlspecialchars($data["nama"]);
    $email = $data["email"];
    $kontak = $data["kontak"];

    // query insert data
    $query = "UPDATE user SET email = '$email', username = '$username', nama = '$nama', kontak = '$kontak', gambar = '$imageName' WHERE email = '$id'";
    mysqli_query($conn, $query);
    return $_SESSION["user"] = "$email";
}

// tambah laporan oleh user
function tambahLaporan($data, $imageName) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama_barang"]);
    $kategori = $data["kategori_barang"];
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal_ditemukan = $data["tanggal_ditemukan"];
    $lokasi = htmlspecialchars($data["lokasi_ditemukan"]);
    $kategori_laporan = $data["kategori_laporan"];
    // query insert data
    $query = "INSERT INTO laporan VALUES ('','$id', '$kategori_laporan', '$nama', '$deskripsi', '$kategori', '$tanggal_ditemukan', '$lokasi', '$imageName', NOW())";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

// hapus laporan user
function hapusLaporan($data) {
    global $conn;
    $query = "DELETE FROM laporan WHERE id = '$data'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ubah laporan user
function ubahLaporan($data, $imageName) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_barang"]);
    $kategori = $data["kategori_barang"];
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal_ditemukan = $data["tanggal_ditemukan"];
    $lokasi = htmlspecialchars($data["lokasi_ditemukan"]);
    $kategori_laporan = $data["kategori_laporan"];
    // query insert data
    $query = "UPDATE laporan SET kategori_laporan = '$kategori_laporan', nama_barang = '$nama', kategori_barang = '$kategori', deskripsi = '$deskripsi',  tanggal_ditemukan = '$tanggal_ditemukan', lokasi = '$lokasi', gambar_barang = '$imageName', waktu_dibuat = NOW() WHERE id = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 