<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font-family: 'Tinos', serif;
            font: 12pt;
        }
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        p, table, ol{
            font-size: 9pt;
        }
        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            * {
                -webkit-print-color-adjust: exact !important;   /* Chrome, Safari, Edge */
                color-adjust: exact !important;                 /*Firefox*/     /*Firefox*/
            }
            html, body {
                width: 210mm;
                height: 297mm;
            }
        /* ... the rest of the rules ... */
        }
    </style>
</head>
<body>
    <div class="p-4 my-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pt-2 font-weight-bold" style="font-weight: bold">Laporan Barang</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm">
                                <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td width="20%">Nama Barang</td>
                                        <td width="1%">:</td>
                                        <td >{{ ucwords($item->nama_barang) }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Merk</td>
                                        <td width="1%">:</td>
                                        <td >{{ ucwords($item->merk) }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Ukuran</td>
                                        <td width="1%">:</td>
                                        <td >{{ ucwords($item->ukuran) }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Bahan</td>
                                        <td width="1%">:</td>
                                        <td >{{ $item->bahan }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Tanggal</td>
                                        <td width="1%">:</td>
                                        <td >{{ date('d M Y', strtotime($item->tahun )) }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Asal Barang</td>
                                        <td width="1%">:</td>
                                        <td >{{ ucwords($item->asal_barang) }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Kondisi Barang</td>
                                        <td width="1%">:</td>
                                        <td >{{ ucwords($item->kondisi_barang) }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Jumlah Barang</td>
                                        <td width="1%">:</td>
                                        <td >{{ ucwords($item->jumlah_barang) }}</td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Harga Barang</td>
                                        <td width="1%">:</td>
                                        <td >Rp . {{ number_format($item->harga_barang,2, ",", ".") }}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
<script>
     print();
</script>
</html>
