<?php
 
// parameter koneksi ke MySQL
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tokomedia";
 
// koneksi ke mysql
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// query untuk membaca semua data record
$query = "SELECT * FROM berita";
// jalankan query
$result = mysqli_query($conn, $query);
 
// proses looping untuk setiap data hasil query
while ($data = mysqli_fetch_assoc($result)){
    // membuat array asosiatif untuk setiap data
    $item = array("idberita" => $data['id_berita'],
                      "id_kategori" => $data['id_kategori'],
                      "username" => $data['username'],
                      "judul" => $data['judul'],
                      "judul_seo" => $data['judul_seo'],
                      "headline" => $data['headline'],
                      "isi_berita" => $data['isi_berita'],
                      "hari" => $data['hari'],
                      "tanggal" => $data['tanggal'],
                      "jam" => $data['jam'],
                      "gambar" => $data['gambar'],
                      "dibaca" => $data['dibaca'],
                      "tag" => $data['tag']);
    // proses encode array asosiatif ke json
    // lalu tampilkan 
    echo json_encode($item)."\n";
}
 
// tutup koneksi
mysqli_close($conn);
?>