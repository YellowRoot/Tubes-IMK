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
        <h1 class="h3 mb-0 text-gray-800">Staff</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
    </div>

    <div class="row">
        <table class="col-xl-12 col-md-12 mb-8">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>No. Telp</th>
            </tr>
            <tr>
                <td>M1</td>
                <td>Andrew Williams</td>
                <td>087769662266</td>
            </tr>
        </table>
    </div>
    
@endsection