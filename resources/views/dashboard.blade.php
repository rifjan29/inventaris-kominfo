<x-app-layout>
    @section('content')
    <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
              <div class="row">
                <div class="col-lg-6 d-flex flex-column">
                  <div class="row flex-grow">
                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="d-flex align-items-center mb-2 mb-sm-0">
                                <div class="circle-progress-width mx-2">
                                    <i class="menu-icon mdi mdi-chart-bar icon-lg text-warning"></i>
                                </div>
                                <div>
                                  <p class="text-small mb-2">Total Barang</p>
                                  <h4 class="mb-0 fw-bold">{{ $barang }}</h4>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="d-flex align-items-center">
                                <div class="circle-progress-width mx-2">
                                    <i class="menu-icon mdi mdi-account-box-outline icon-lg text-success"></i>
                                </div>
                                <div>
                                  <p class="text-small mb-2">Total User</p>
                                  <h4 class="mb-0 fw-bold">{{ $user }}</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <div class="row flex-grow">
                      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="d-flex  align-items-center mb-2 mb-sm-0">
                                  <div class="circle-progress-width mx-2">
                                    <i class="menu-icon mdi mdi-floor-plan icon-lg text-success"></i>
                                  </div>
                                  <div>
                                    <p class="text-small mb-2">Total Jenis Kategori</p>
                                    <h4 class="mb-0 fw-bold">{{ $jenis }}</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                  <div class="circle-progress-width mx-2">
                                    <i class="menu-icon mdi mdi-floor-plan icon-lg text-info"></i>
                                  </div>
                                  <div>
                                    <p class="text-small mb-2">Total Kategori</p>
                                    <h4 class="mb-0 fw-bold">{{ $kategori }}</h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    @endsection
</x-app-layout>
