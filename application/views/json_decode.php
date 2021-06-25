<?php
include "konek.php"; //memanggil file koneksi

//baca file json dari url web
$url = "application/views/file_json.json";
$json = file_get_contents($url);

// memecah data json per record
$split = explode("\n", $json);

foreach ($split as $record) { 
$data = json_decode($record,true);
$idberita = $data['idberita'];
$id_kategori = $data['id_kategori'];
$username = $data['username'];
$judul = $data['judul'];
$judul_seo = $data['judul_seo'];
$headline = $data['headline'];
$isi_berita = $data['isi_berita'];
$hari = $data['hari'];
$tanggal = $data['tanggal'];
$jam = $data['jam'];
$gambar = $data['gambar'];
$dibaca = $data['dibaca'];
$tag = $data['tag'];
//sql insert data ke database mysql tabel pegawai2
$sql = "INSERT INTO berita VALUES ('".$idberita."', '".$id_kategori."', '".$username."', '".$judul."', '".$judul_seo."', '".$headline."', '".$isi_berita."', '".$hari."', '".$tanggal."', '".$jam."', '".$gambar."', '".$dibaca."', '".$tag."')";

$result = mysqli_query($k, $sql);
}

echo "Import data berhasil !!";
?>