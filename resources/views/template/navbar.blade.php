<nav class="navbar navbar-expand-sm navbar-light px-3">
    <div class="container-fluid">
      <img src="{{ asset('assets/icon.png') }}" alt="logo" class="navbar-brand img-fluid me-5" style="width: 80px;">
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="fw-semibold navbar-nav me-auto mt-2 mt-lg-0 gap-3">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('welcome') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('product.index') }}">Barang</a>
              </li>
              <li class="nav-item">
                @can('isAdmin') {{-- admin == supplier --}}
                <a class="nav-link" href="{{ route('incoming-product.index') }}">Barang Masuk</a>
                @endcan
                @can('isUser') {{-- user == agen --}}
                <a class="nav-link" href="{{ route('exit-product.index') }}">Barang Keluar</a>
                @endcan
                @can('isManager') {{-- manager == admin --}}
                <a class="nav-link" href="{{ route('laporan.index') }}">Laporan</a>
                @endcan
              </li>
          </ul>
          <form class="d-flex my-2 my-lg-0">
              <a class="fw-semibold btn btn-danger my-2 my-sm-0" href="{{ route('logout') }}">Logout</a>
          </form>
      </div>
</div>
</nav>
