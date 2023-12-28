<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
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
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_buku"] . "</td>
                <td>" . $row["judul"] . "</td>
                <td>" . $row["penulis"] . "</td>
                <td>" . $row["tahun_terbit"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data buku.";
}

$conn->close();
?>

</body>
</html>
