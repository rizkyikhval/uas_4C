<?php
include"koneksi.php";

$id = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
		if ($nama == '') {
			$data['error']['edit_nama'] = 'Nama  harap diisi';
		}
		if ($jenis_kelamin == '') {
			$data['error']['edit_jenis_kelamin'] = 'Pilih Jenis Kelamin';
		}
		if ($telepon == '') {
			$data['error']['edit_telepon'] = 'Telepon Harap Di isi';
		}
		if ($alamat == '') {
			$data['error']['edit_alamat'] = 'Alamat harap diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE pegawai SET
											nama = '$nama',
											jenis_kelamin = '$jenis_kelamin',
											alamat = '$alamat',
											telepon = '$telepon'
											WHERE id_Pegawai = '$id'
											";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

