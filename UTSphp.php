<?php
// Data penjualan produk
$penjualan = array(
    array("Januari", "Sepeda", "Listrik", 476, 751604),
    array("Januari", "Sepeda", "Manual", 302, 581350),
    array("Januari", "Skuter", "Listrik", 387, 427248),
    array("Januari", "Skuter", "Manual", 309, 48513),
    array("Januari", "Papan Luncur", "Listrik", 251, 135791)
);

// Fungsi untuk format mata uang Rupiah
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan Produk</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        caption {
            font-size: 1.2em;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <caption>Laporan Penjualan Produk - Januari</caption>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Produk</th>
                <th>Daya</th>
                <th>Unit</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penjualan as $data): ?>
            <tr>
                <td><?php echo $data[0]; ?></td>
                <td><?php echo $data[1]; ?></td>
                <td><?php echo $data[2]; ?></td>
                <td><?php echo $data[3]; ?></td>
                <td><?php echo formatRupiah($data[4]); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>