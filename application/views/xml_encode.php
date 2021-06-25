<?php
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');

include("konek.php");

echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<berita>";
$sql="select * from berita";
$query=mysqli_query($k,$sql);
while ($data=mysqli_fetch_array($query)) {
 echo "<idkategori>".$data['id_kategori']."</idkategori>";
 echo "<username>".$data['username']."</username>";
 echo "<judul>".$data['judul']."</judul>";
 echo "<judul_seo>".$data['judul_seo']."</judul_seo>";
 echo "<headline>".$data['headline']."</headline>";
 echo "<hari>".$data['hari']."</hari>";
 echo "<tanggal>".$data['tanggal']."</tanggal>";
 echo "<jam>".$data['jam']."</jam>";
 echo "<gambar>".$data['gambar']."</gambar>";
 echo "<dibaca>".$data['dibaca']."</dibaca>";
 echo "<tag>".$data['tag']."</tag>";
}
echo "</berita>";