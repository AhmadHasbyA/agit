<?php
// Array asosiatif dengan informasi teman
$friends = array(
    "Teman 1" => array("nama" => "Alice", "umur" => 25, "hobi" => "Membaca"),
    "Teman 2" => array("nama" => "Bob", "umur" => 30, "hobi" => "Bermain musik"),
    "Teman 3" => array("nama" => "Charlie", "umur" => 28, "hobi" => "Olahraga"),
    "Teman 4" => array("nama" => "David", "umur" => 22, "hobi" => "Menulis"),
    "Teman 5" => array("nama" => "Eva", "umur" => 27, "hobi" => "Memasak")
);

// Tampilkan dalam bentuk tabel HTML
echo "<table border='1'>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Hobi</th>
        </tr>";

foreach ($friends as $friend => $info) {
    echo "<tr>
            <td>{$info['nama']}</td>
            <td>{$info['umur']}</td>
            <td>{$info['hobi']}</td>
          </tr>";
}

echo "</table>";
?>
