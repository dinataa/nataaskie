<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Web - <?php echo "Adnan Dinata Hidaryan"; ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  <header>
    <h1><?php echo "Adnan Dinata Hidaryan"; ?></h1>
    <h3><?php echo "102022430017 | Fakultas Rekayasa Industri | S1 Sistem Infomasi"; ?></h3>
  </header>

  <section class="profile">
    <img src="Adnann.jpg" alt="pfp" class="foto">
  </section>

  <section class="sosmed">
    <a href="https://github.com/dinataa" target="_blank">Github</a>
    <a href="https://instagram.com/dinataaa.u" target="_blank">Instagram</a>
    <a href="https://x.com/Dinataa11" target="_blank">X</a>
  </section>

  <section class="info">
    <h2>Tentang Saya</h2>
    <p>
      <?php 
        $deskripsi = "Saya adalah mahasiswa Sistem Informasi di Telkom University yang aktif berorganisasi dan memiliki minat pada pengembangan teknologi serta kepemimpinan";
        echo $deskripsi; 
      ?>
    </p>
  </section>

  <section class="table">
    <h2>Jadwal Kuliah</h2>
    <table border="1">
      <tr>
        <th>Hari</th>
        <th>Mata Kuliah</th>
        <th>Jam</th>
      </tr>
      <?php
        $jadwal = [
          ["Senin", "Matematika Diskrit", "08.00 - 10.00"],
          ["Selasa", "Pemrograman", "10.00 - 12.00"],
          ["Rabu", "Basis Data", "13.00 - 15.00"]
        ];
        foreach($jadwal as $row){
          echo "<tr>";
          echo "<td>".$row[0]."</td>";
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[2]."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </section>

  <footer>
    <p>Waktu server: <?php echo date("d-m-Y H:i:s"); ?></p>
  </footer>
</body>
</html>
