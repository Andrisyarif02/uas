<?php
include 'config.php';

$kode = $_POST['kode'];
$kategori = $_POST['kategori'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$stok = $_POST['stok'];
$hbeli = $_POST['hbeli'];
$hjual = $_POST['hjual'];
$sup = $_POST['sup'];

$query = "INSERT INTO barang VALUES('$kode', '$kategori', '$nama', '$satuan', '$stok' ,'$hbeli', '$hjual', null)";
$succes = mysqli_query($conn, $query);
$querys = "SELECT * FROM barang";
$row = mysqli_query($conn, $querys);
while ($data = mysqli_fetch_assoc($row)) {
// echo $data[kode_barang];
// echo "<pre>"; print_r($row); continue;
	if($succes){
	//echo "sukses";die;
		header('location: barang.php');
	}else if($kode==$data['kode_barang']){
	echo "gagal"; die;
		header('location: barang-store.php?pesan=gagal');
	}else{
		//echo "guagal poll";
		echo mysqli_error($conn);
	}
	mysqli_close($conn);
}
