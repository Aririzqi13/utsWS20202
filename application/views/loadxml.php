<?php
include 'konek.php';
$feed = file_get_contents('application/views/file_xml.xml');
$items = simplexml_load_string($feed);
if( !$items ) //using simplexml_load_file function to load xml file
{
echo 'load XML failed ! ';
}
else
{
echo '<h1>DATA XML</h1>';
foreach( $items as $record ) //parse the xml file into object
{
$idberita = $record->idberita; //get the childnode title
$idkategori = $record->idkategori;
$username = $record->username;
$judul = $record->judul;
$isiberita = $record->isiberita;
$hari = $record->hari;
$tanggal = $record->tanggal;
$jam = $record->jam;
echo 'id berita : '.$idberita.'<br />';
echo 'id kategori : '.$idkategori.'<br />';
echo 'Username : '.$username.'<br />';
echo 'Judul : '.$judul.'<br />';
echo 'Isi Berita : '.$isiberita.'<br />';
echo 'Hari : '.$hari.'<br />';
echo 'Tanggal : '.$tanggal.'<br />';
echo 'Jam : '.$jam.'<br />';
echo '<br>';

//save to database
$q = "INSERT INTO berita VALUES('$idberita','$idkategori','$username','$judul','none','none','$isiberita','$hari','$tanggal','$jam','','','')";
$result = mysqli_query($k,$q);
}
if ($result) {
echo '<h2> Data berhasil tersimpan di database! </h2>';
}
else echo '<h2>Failed Save to Databaase</h2>';
}
?>