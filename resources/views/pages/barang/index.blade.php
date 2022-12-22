<x-app-layout>
    @push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    @push('js')
    <script src="{{ asset('') }}assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('') }}assets/js/select2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.tahun').datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
        $('.bulan').datepicker({
            format: "mm",
            viewMode: "months",
            minViewMode: "months"
        });
    </script>
    @endpush
    @section('content')
        <div class="row">
            <div class="col-md-12">
                @include('components.notification')
                <div class="row">
                    <div class="card mb-4 col-md-8 mx-auto">
                        <div class="card-body">
                            <form action="{{ route('barang.index') }}" method="GET">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Tahun </label>
                                            <input type="text" data-provide="tahun" name="tahun" value="{{ request('tahun') }}" class="form-control tahun @error('bulan') is-invalid @enderror" id="exampleInputUsername1" placeholder="Masukkan Tahun">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Bulan </label>
                                            <input type="text" data-provide="bulan" name="bulan" value="{{ request('bulan') }}" class="form-control bulan @error('bulan') is-invalid @enderror" id="exampleInputUsername1" placeholder="Masukkan Bulan">
                                        </div>
                                    </div>
                                    <div class="col-md-2 align-self-center p-0">
                                        <button type="submit" class="btn btn-primary btn-icon-text w-100">
                                            <i class="ti-filter btn-icon-prepend"></i>
                                            Filter
                                        </button>
                                    </div>
                                    <div class="col-md-2 align-self-center p-1">
                                        <a href="{{ route('barang.pdf') }}" type="button" class="btn btn-danger btn-icon-text w-100">
                                            <i class="ti-printer btn-icon-prepend"></i>
                                            Cetak PDF
                                        </a>
                                    </div>
                                    <div class="col-md-2 align-self-center p-0">
                                        <a href="{{ route('barang.index') }}" class="btn btn-outline-danger btn-icon-text w-100">
                                            <i class="ti-shift-left btn-icon-prepend"></i>
                                            Reset
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between py-2">
                            <h4 class="card-title pt-2">{{ ucwords($title) }}</h4>
                            <div>
                                <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive pt-3">
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
                                  <th>Action</th>
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
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('barang.show',$item->id) }}" type="button" class="btn btn-primary">
                                                    <i class="ti-eye"></i>
                                                </a>
                                                <a href="{{ route('barang.edit',$item->id) }}" type="button" class="btn btn-primary">
                                                  <i class="ti-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('barang.destroy',$item->id) }}" method="POST" onsubmit="return confirm('Move data to trash? ')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-primary">
                                                    <i class="ti-trash"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Tidak ada data</td>
                                    </tr>
                                @endforelse
                              </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            {!! $data->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
