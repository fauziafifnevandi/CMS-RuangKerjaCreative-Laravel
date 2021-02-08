@extends('layouts.lay_admin') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Konfigurasi Website</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Konfigurasi Website</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                        <div class="card-tools">
                        </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Logo</th>
                                <th>Favicon</th>
                                <th>Meta Keyword</th>
                                <th>Meta Description</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($konfigurasi as $konfigurasis)
                            <tr>
                                <td>{{ $konfigurasis->nama }}</td>
								<td><img src="{{ asset('img/konfigurasi/logo/'.$konfigurasis->logo) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/></td>
                                <td><img src="{{ asset('img/konfigurasi/favicon/'.$konfigurasis->favicon) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/></td>
                                <td>{{ $konfigurasis->meta_keyword }}</td>
                                <td>{{ $konfigurasis->meta_description }}</td>
                                <td>{{ $konfigurasis->facebook }}</td>
                                <td>{{ $konfigurasis->instagram }}</td>
                                <td>
                                <div class="box-button">
                                {{ link_to('dashboard/konfigurasi/' . $konfigurasis->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                            </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
            </li>
        </ul>
    </nav>

</div>
@endsection