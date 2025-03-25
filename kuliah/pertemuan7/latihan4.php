<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <ul>
    <li>Nama: <?= ($_GET['nama'] ?? 'Unknown'); ?></li>
    <li>NIM: <?= ($_GET['nim'] ?? 'Unknown'); ?></li>
    <li>Email: <?= ($_GET['email'] ?? 'Unknown'); ?></li>
    <li>Jurusan: <?= ($_GET['jurusan'] ?? 'Unknown'); ?></li>
  </ul>
</body>

</html>