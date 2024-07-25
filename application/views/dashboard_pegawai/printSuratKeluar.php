<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Surat Keluar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Laporan Surat Keluar</h2>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>No Surat Keluar</th>
                <th>Judul Surat Keluar</th>
                <th>Id Indeks</th>
                <th>Tujuan</th>
                <th>Tanggal Keluar</th>
                <th>Keterangan</th>
                <th>Berkas Surat Keluar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suratkeluar as $index => $surat) : ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $surat->no_suratkeluar; ?></td>
                    <td><?php echo $surat->judul_suratkeluar; ?></td>
                    <td><?php echo $surat->id_indeks; ?></td>
                    <td><?php echo $surat->tujuan; ?></td>
                    <td><?php echo $surat->tgl_keluar; ?></td>
                    <td><?php echo $surat->keterangan; ?></td>
                    <td><?php echo $surat->file; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
    <a href="<?php echo base_url('dashboard_pegawai/tampilSuratKeluar'); ?>">Kembali</a>
</body>

</html>