<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_input_cuti="insert into input_cuti(nik,nama,jabatan,hakcuti,jeniscuti)values
	('".$_POST['nik']."',
	 '".$_POST['nama']."',
    '".$_POST['jabatan']."',
'".$_POST['hakcuti']."',
'".$_POST['jeniscuti']."')";
	 $proses_data=mysqli_query($input,$query_input_cuti);
if($proses_data){
	echo 'Input Data Berhasil ';
} else {
	echo mysql_error();
}
}


?>
<form method="POST" action="">
	<table>
		<tr>
			<td>Nik Karyawan</td>
			<td><input name="nik" type="text"></td>
		</tr>
	<tr>
			<td>Nama Karyawan</td>
			<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td>Jabatan Karyawan</td>
			<td><input name="jabatan" type="text"></td>
		</tr>
	<tr>
			<td>Hak Cuti Karyawan</td>
			<td><input name="hakcuti" type="number"></td>
		</tr>
		<tr>
		<td>Jenis Cuti</td>
		<td>
		<select name="jeniscuti">
		<option value="Tahunan">Tahunan</option>
		<option value="Nikah">Nikah</option>
		<option value="Melahirkan">Melahirkan</option>
		</td>
		</select>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
</form>



