<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel dengan PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 50px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #000000;
        }
        th {
            background-color: #ee91a0;
        }
    </style>
</head>
<body>

<?php
// Data yang akan ditampilkan di tabel
$data = [
    ['Nama' => 'Cece', 'Umur' => 20, 'Kota' => 'Yogyakarta'],
    ['Nama' => 'Galuh', 'Umur' => 19, 'Kota' => 'Jakarta'],
    ['Nama' => 'Zahra', 'Umur' => 18, 'Kota' => 'Sleman'],
    ['Nama' => 'Myla', 'Umur' => 19, 'Kota' => 'Depok'],
    ['Nama' => 'Meiva', 'Umur' => 19, 'Kota' => 'Salatiga'],
];

// Membuat header tabel
echo "<table>";
echo "<tr>";
echo "<th>Nama</th>";
echo "<th>Umur</th>";
echo "<th>Kota</th>";
echo "</tr>";

// Menampilkan data di dalam tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['Nama'] . "</td>";
    echo "<td>" . $row['Umur'] . "</td>";
    echo "<td>" . $row['Kota'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
