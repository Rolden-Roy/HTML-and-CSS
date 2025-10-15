<?php
echo "<h2>Data yang diterima:</h2>";

// Cek apakah ada data dari GET atau POST
if (!empty($_GET)) {
  echo "<h3>Metode: GET</h3>";
  echo "Nama: " . htmlspecialchars($_GET['nama']) . "<br>";
  echo "Umur: " . htmlspecialchars($_GET['umur']) . "<br>";
}

if (!empty($_POST)) {
  echo "<h3>Metode: POST</h3>";
  echo "Nama: " . htmlspecialchars($_POST['nama']) . "<br>";
  echo "Umur: " . htmlspecialchars($_POST['umur']) . "<br>";
}
?>
