<html>
<head>
	<title>Ubah Data</title>
	<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #9400D3;
      }
    button {
          background-color: #9400D3;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
</head>
<body>
<section class="base">
	<h1>Ubah Data Siswa</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$nis = $_GET['nis'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM tsiswa WHERE nis='".$nis."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>
		<?php
		if($data['jenis_kelamin'] == "Laki-laki"){
			echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
			echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
		}else{
			echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
			echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
		}
		?>
		</td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td><input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
		</td>
	</tr>
	</table>
	
	<hr>
	<div>
	<button type="submit" value="Ubah">Simpan Data</button>
	<a href="index.php"><button type="button" value="Batal">Batal</button></a>
	</div>
	
	<section>
	</form>
</body>
</html>
