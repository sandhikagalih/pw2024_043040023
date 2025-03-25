<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>

<body>
  <h2>Form Isi Data Mahasiswa</h2>
  <form action="latihan6.php" method="post">
    <label for="nama">
      Nama: <br>
      <input type="text" name="nama">
    </label>
    <br>
    <label for="nim">
      NIM: <br>
      <input type="text" name="nim">
    </label>
    <br>
    <label for="email">
      Email: <br>
      <input type="text" name="email">
    </label>
    <br>
    <label for="jurusan">
      Jurusan: <br>
      <input type="text" name="jurusan">
    </label>
    <br>
    <button type="submit">Kirim!</button>
  </form>
</body>

</html>