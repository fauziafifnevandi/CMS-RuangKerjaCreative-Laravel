@extends('layouts.lay_admin') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event Website</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Event Website</li>
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
                <a href="{{ url('dashboard/event/create') }}" class="btn btn-primary">Tambah Event</a>
                        <div class="card-tools">
                        </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 mt-2">
                    <table class="table table-head-fixed">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Sampul</th>
                                <th>Konten</th>
                                <th>aksi</>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0?>
                            @foreach($event_list as $event)
                            <tr>
                                <td>{{$i=$i+1}}
                                <td>{{ $event->judul }}</td>
                                <td><img src="{{ asset('img/event/gambar/'.$event->gambar_event) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/></td>
                                <td>{!! str_limit($event->konten, $limit = 150, $end = '...') !!}</td>                             
                                <td>
                                    <div class="btn-group">
                                <div class="box-button mr-1">
                                {{ link_to('event/' . $event->id,'Lihat', ['class' => 'btn btn-success btn-sm']) }}
                            </div>
                                <div class="box-button mr-1">
                                {{ link_to('dashboard/event/' . $event->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm' ]) }}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['EventController@destroy', $event->id]]) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
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
        {{ $event_list->links() }}
        </ul>
    </nav>
    

</div>
@endsection