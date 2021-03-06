@extends('template')

@section('judul')
Data Buku
@stop

@section('content')

    <div class="box">
        <div class="box-header">
        <a href="{{ url('buku/add') }}"><button class="btn btn-primary" ><i class="fa fa-book"></i> Tambah</button></a>
        </div>
    <!-- /.box-header -->
        <div class="box-body">
            <table id="data" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Kategori</th>
                        <th>Halaman</th>
                        <th>Edisi</th>
                        <th>ISBN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <!-- menampilkan data -->
                @foreach($buku as $rsBuku)
                    <tr>
                        <td>{{ $rsBuku->kd_buku }}</td>
                        <td>{{ $rsBuku->judul }}</td>
                        <td>{{ $rsBuku->nama_pengarang }}</td>
                        <td>{{ $rsBuku->nama_penerbit .'/'.$rsBuku->tempat_terbit. '/' .$rsBuku->tahun_terbit  }}</td>
                        <td>{{ $rsBuku->nama_kategori  }}</td>
                        <td>{{ $rsBuku->halaman }}</td>
                        <td>{{ $rsBuku->edisi }}</td>
                        <td>{{ $rsBuku->ISBN }}</td>
                        <td>
                        <a href="{{ url('buku/edit' , $rsBuku->kd_buku) }}"><button class="btn bg-yellow btn-flat" ><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('buku/delete' , $rsBuku->kd_buku) }}"><button class="btn btn-danger btn-flat" ><i class="fa fa-trash"></i></button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            
            </table>
        </div>
    </div>

@stop