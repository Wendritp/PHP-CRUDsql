<html>
<head>
	<title>Tambah Data</title>
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
<center>
        <h1>Tambah Data</h1>
      <center>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">

	<section class="base">
        <div>
          <label>NIS</label>
          <input type="text" name="nis" autofocus="" required="" />
        </div>
        <div>
          <label>Nama</label>
         <input type="text" name="nama" />
        </div>
        <div>
          <label>Jenis Kelamin</label>
          <td>
		<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
		</td>
        </div>
        <div>
          <label>Jurusan</label>
         <input type="text" name="jurusan" required="" />
        </div>
        <div>
          <label>Foto</label>
         <input type="file" name="foto" required="" />
        </div>
        
  <div>
	<button type="submit" value="Simpan">Simpan Data</button>
	<a href="index.php"><button type="button" value="Batal">Batal</button></a>
	</div>
        </section>
	</form>
</body>
</html>
