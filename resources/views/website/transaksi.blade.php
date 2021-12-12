@extends('layout.admin')

@section('staff')
    active
@endsection

@section('search')
    <!-- Topbar Search -->
    <form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
    </div>

    <div class="row">
        <table class="col-xl-12 col-md-12 mb-8">
            <tr>
                <th>ID</th>
                <th>Tipe</th>
                <th>Nilai</th>
                <th>Member</th>
                <th>Staff</th>
            </tr>
            <tr>
                <td>T2</td>
                <td>Simpan</td>
                <td>Rp300.000</td>
                <td>John Study</td>
                <td>Andrew Williams</td>
            </tr>
            <tr>
                <td>T1</td>
                <td>Simpan</td>
                <td>Rp300.000</td>
                <td>John Study</td>
                <td>Andrew Williams</td>
            </tr>
        </table>
    </div>
    
@endsection