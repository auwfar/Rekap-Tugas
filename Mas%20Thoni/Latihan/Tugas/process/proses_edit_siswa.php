<?php
	include '../config.php';
	include '../models/model_siswa.php';

	use models\_model_siswa\Model_Siswa as Siswa;

	$siswa = new Siswa;

	if (isset($_POST['submit'])) {
		//Data
		$data['nama'] = $_POST['nama'];
		$data['alamat'] = $_POST['alamat'];
		$data['jk'] = $_POST['jk'];
		
		$id = $_POST['id'];

		$result = $siswa->UPDATE($data, $id);
		if ($result) {
			header("location: ../siswa.php");
		}
	}
?>