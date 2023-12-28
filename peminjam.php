<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$sql = "SELECT * FROM peminjaman";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID Peminjaman</th>
                <th>ID Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_peminjaman"] . "</td>
                <td>" . $row["id_buku"] . "</td>
                <td>" . $row["tanggal_pinjam"] . "</td>
                <td>" . $row["tanggal_kembali"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data peminjaman.";
}

$conn->close();
?>

</body>
</html>
