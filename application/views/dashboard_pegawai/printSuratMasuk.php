<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Surat Masuk</title>
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
    <h2>Laporan Surat Masuk</h2>
    <table>
        <thead>

            <tr>
                <th>NO</th>
                <th>No Surat Masuk</th>
                <th>Judul Surat Masuk</th>
                <th>Asal Surat</th>
                <th>Tanggal Diterima</th>
                <th>kode Indeks</th>
                <th>Keterangan</th>
                <th>Berkas Surat Masuk</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($suratmasuk as $index => $surat) : ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $surat->no_suratmasuk; ?></td>
                    <td><?php echo $surat->namasurat; ?></td>
                    <td><?php echo $surat->asalsurat; ?></td>
                    <td><?php echo $surat->tglditerima; ?></td>
                    <td><?php echo $surat->id_indeks; ?></td>
                    <td><?php echo $surat->keterangan; ?></td>
                    <td><?php echo $surat->file; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>S
        window.onload = function() {
            window.print();
        }
    </script>
    <a href="<?php echo base_url('dashboard_pegawai/tampilSuratMasuk'); ?>">Kembali</a>
</body>

</html>