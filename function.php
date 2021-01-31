<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "dberid");
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;

	}
	return $rows;
}

function tambah ($data) {
	global $conn;

	$nama = $data["nama"];
    $alamat = $data["alamat"];
    $no_hp = $data["no_hp"];
    $tipe_rmh = $data["tipe_rmh"];
    $harga_rmh = $data["harga_rmh"];
    $uang_msk = $data["uang_msk"];
    $ket = $data["ket"];
    $bukti = $data["bukti"];


    $query = "INSERT INTO dberid VALUES ('', '$nama'. '$alamat', '$no_hp', '$tipe_rmh', '$harga_rmh', '$uang_msk', '$ket', '$bukti')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>