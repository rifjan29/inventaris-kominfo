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
                <div class="card" style="border: none">
                    <div class="card-header">
                        <h4 class="card-title pt-2 font-weight-bold" style="font-weight: bold">Laporan Barang</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori Barang</th>
                                    <th>Merk</th>
                                    <th>Jumlah Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Tanggal</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse ($data as $item)
                                      <tr>
                                          <td>{{ $loop->iteration }}</td>
                                          <td>{{ ucwords($item->nama_barang) }}</td>
                                          <td>{{ ucwords($item->kategori->nama) }}</td>
                                          <td>{{ ucwords($item->merk) }}</td>
                                          <td>{{ ucwords($item->jumlah_barang) }}</td>
                                          <td>Rp . {{ number_format($item->harga_barang,2, ",", ".") }}</td>
                                          <td>{{ date('d M Y', strtotime($item->tahun )) }}</td>
                                      </tr>
                                  @empty
                                      <tr>
                                          <td>Tidak ada data</td>
                                      </tr>
                                  @endforelse
                                </tbody>
                              </table>
                        </div>
                        <div class="d-flex justify-content-between my-5">
                            <div>
                                <p class="p-0 m-0">Petugas Yang Menyerahkan</p>
                                <p class="p-0 mb-5">{{ ucwords(auth()->user()->name) }}</p>
                                <p class="p-0 m-0">NIP : {{ ucwords(auth()->user()->nip) }}</p>
                            </div>
                            <div>
                                <p class="p-0 m-0">Bondowoso,{{ date('d M Y', strtotime(now())) }}</p>
                                <p class="p-0 m-0">Penerima Laporan</p>
                                <p class="p-0 m-0">Telah Di Teliti dan Hitung</p>
                            </div>
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
