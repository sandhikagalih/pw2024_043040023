<?php
$mahasiswa = [
  [
    'nama' => 'Sandhika',
    'nim' => '043040023',
    'email' => 'sandhika@gmail.com',
    'jurusan' => 'Teknik Informatika'
  ],
  [
    'nama' => 'Doddy',
    'nim' => '034030123',
    'jurusan' => 'Teknik Mesin',
    'email' => 'doddy@gmail.com',
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <ul>
    <?php foreach ($mahasiswa as $m) : ?>
      <li>
        <a href="latihan4.php?nama=<?= $m['nama']; ?>&nim=<?= $m['nim']; ?>&email=<?= $m['email']; ?>&jurusan=<?= $m['jurusan']; ?>">
          <?= $m['nama']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>