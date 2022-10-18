@extends('tampilan.1_template')
@section('content')
    <a href="/addproduk" class="btn btn-primary btn-sm">Tambah Data</a>

    <br>
    <br>

    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success </h5>
            {{ session('pesan') }},
    @endif


    <div class="card">

        <div class="card-header">
            <h3 class="card-title">Produk Inovasi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Segmen Customer</th>
                        <th>Key Partner</th>
                        <th>Nilai TKT</th>
                        <th>Gambaran Pesaingan</th>
                        <th>Unique Selling Point</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($produks as $dataa)
                        <tr>
                            <td>{{ $no++ }} </td>
                            <td>{{ $dataa->judul }}</td>
                            <td>{{ $dataa->kategori }}</td>
                            <td>{{ $dataa->segmen_customer }}</td>
                            <td>{{ $dataa->key_patner }}</td>
                            <td>{{ $dataa->nilai_tkt }}</td>
                            <td>{{ $dataa->gambaran_pesaingan }}</td>
                             <td>{{ $dataa->unique_selling_point }}</td>
                            <td>
                                <a href="{{ url('/detail/' . $dataa->id) }}">
                                    <button type="submit" class="btn btn-primary"> detail </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
@endsection
