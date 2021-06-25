<?php
include "konek.php";
$query = mysqli_query($k,"SELECT * FROM berita");

if (mysqli_num_rows($query)>0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_berita'] = $row["id_berita"];
		$data['id_kategori'] = $row["id_kategori"];
		$data['username'] = $row["username"];
		$data['judul'] = $row["judul"];
		$data['headline'] = $row["headline"];
		$data['isi_berita'] = $row["isi_berita"];
		$data['hari'] = $row["hari"];
		$data['tanggal'] = $row["tanggal"];
		$data['jam'] = $row["jam"];
		$data['dibaca'] = $row["dibaca"];
		array_push($responsistem["data"], $data);

	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>