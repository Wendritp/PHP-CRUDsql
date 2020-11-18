<?php
error_reporting(0);
include 'koneksi.php';
?>
<html>
<head>
	<title>Daftar Data Siswa</title>
	<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #9400D3;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #9400D3;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #9400D3;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
</head>
<body>
	<center>
		<h1>Data Siswa</h1>
		<a href="form_simpan.php">+Tambah Data</a><br><br>
		<form action="" method="POST" >
			<input type="text" name="query" placeholder="Cari Data"/>
			<input type="submit" name="cari" value="Search" />
		</form>
		<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php

		$no = 1;
		$query = $_POST['query'];

		if($query != ''){
			$select = mysqli_query ($connect, "SELECT * FROM tsiswa WHERE nis LIKE '%".$query."%' OR 
				nama LIKE '%".$query."%' ");
		}else {
			$select = mysqli_query($connect, "SELECT * FROM  tsiswa");
		}
		if(mysqli_num_rows($select)){

		while ($data = mysqli_fetch_array($select)) {
		?>
		<tr>
			<td><center><?php echo $no++ ?></center></td>
			<td><center><?php echo "<img src='images/".$data['foto']."' width='100' height='100'>"?></center></td>
			<td><center><?php echo $data['nis'] ?></center></td>
			<td><center><?php echo $data['nama'] ?></center></td>
			<td><center><?php echo $data['jenis_kelamin'] ?></center></td>
			<td><center><?php echo $data['jurusan'] ?></center></td>
            <td><center><a href="form_ubah.php?nis=<?php echo $data ['nis'] ?>">Ubah </a></center></td>
            <td><center><a href="proses_hapus.php?nis=<?php echo $data ['nis'] ?>" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data siswa <?php  echo $data ['nama']; ?> ? ')" > Hapus </a></center></td>
		</tr>

		<?php }}else {
			echo '<tr><td colspan="7"><center> Tidak ada data</center> </td></tr>';
		 }?>
		
		</table>
	</center>
</body>
</html>
