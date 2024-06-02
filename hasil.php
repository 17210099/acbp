<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #dddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #ffff;
        }

        #customers tr:hover {
            background-color: #dddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>BIAYA GUGATAN</h1>
    <form method="post" action="usergugatan.php">
        <table id="customers">
            <tr>
                <th>Gugatan</th>
                <th>Biaya</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td>Biaya Pendaftaran</td>
                <td><?php echo buatRupiah(@$pendaftaran) ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Biaya Proses/ATK</td>
                <td><?php echo buatRupiah(@$biayaatk); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI (5x)</td>
                <td><?php echo buatRupiah(@$jumlah2 + @$jumlah21 + @$jumlah31 + @$jumlah41 + @$jumlah51 + @$jumlah61 + @$jumlah71 + @$jumlah81 + @$jumlah91 + @$jumlah110 + @$jumlah111 + @$jumlah112 + @$jumlah113 + @$jumlah114 + @$jumlah115 + @$jumlah116 + @$jumlah117 + @$jumlah118 + @$jumlah119 + @$jumlah120); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Meterai</td>
                <td><?php echo buatRupiah(@$meterai); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Redaksi</td>
                <td><?php echo buatRupiah(@$redaksi); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>PNBP Penggugat</td>
                <td><?php echo buatRupiah(@$pnbp); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>PNBP Tergugat</td>
                <td><?php echo buatRupiah(@$pnbpx + @$pnbp02 + @$pnbp03 + @$pnbp04 + @$pnbp05 + @$pnbp06 + @$pnbp07 + @$pnbp08 + @$pnbp09 + @$pnbp10 + @$pnbp101 + @$pnbp102 + @$pnbp103 + @$pnbp104 + @$pnbp105 + @$pnbp106 + @$pnbp107 + @$pnbp108 + @$pnbp109 + @$pnbp120); ?></td>
                <td></td>
            </tr>

            <tr>
                <td>
                    <h2><strong>JUMLAH<h2><strong>
                </td>
                <td>
                    <h2><strong><?php echo buatRupiah(@$jumlah2 + @$pendaftaran + @$biayaatk + @$meterai + @$redaksi + @$pnbp + @$jumlah21 + @$jumlah31 + @$jumlah41 + @$jumlah51 + @$jumlah61 + @$jumlah71 + @$jumlah81 + @$jumlah91 + @$jumlah110 + @$jumlah111 + @$jumlah112 + @$jumlah113 + @$jumlah114 + @$jumlah115 + @$jumlah116 + @$jumlah117 + @$jumlah118 + @$jumlah119 + @$jumlah120 + @$pnbpx + @$pnbp02 + @$pnbp03 + @$pnbp04 + @$pnbp05 + @$pnbp06 + @$pnbp07 + @$pnbp08 + @$pnbp09 + @$pnbp10 + @$pnbp101 + @$pnbp102 + @$pnbp103 + @$pnbp104 + @$pnbp105 + @$pnbp106 + @$pnbp107 + @$pnbp108 + @$pnbp109 + @$pnbp120); ?>
                </td>
                <td></td>
                <h2><strong>
            </tr>

        </table>

        <br>


</body>

</html>