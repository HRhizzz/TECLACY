<?php
 // Buat koneksi
 $koneksi = mysqli_connect("localhost", "root",'',"teclacy" );

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}



// function query($query){
//     $result = mysqli_query($koneksi, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc ($result)){
//         $rows[] =$row;
//     }
//     return $rows;
// }
?>