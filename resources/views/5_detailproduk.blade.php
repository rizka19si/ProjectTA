@extends('tampilan.1_template')

@section('content')

 <a href="/produk" class="btn btn-primary btn-sm">Kembali</a>
 <br>
 <br>

    <table class="table table-bordered">
        <tr>
            <th width="100px"> Judul </th>
            <th>{{ $tambahproduk->judul }}</th>
        </tr>
        <tr>
            <th width="200px"> TKT </th>
            <th>{{ $tambahproduk->nilai_tkt }}</th>
        </tr>
        <tr>
            <th width="200px"> Kategori </th>
            <th>{{ $tambahproduk->kategori }}</th>
        </tr>
        <tr>
            <th width="200px"> Segmen Customer </th>
            <th>{{ $tambahproduk->segmen_customer }}</th>
        </tr>
        <tr>
            <th width="200px"> Key Partner </th>
            <th>{{ $tambahproduk->key_patner }}</th>
        </tr>
        <tr>
            <th width="200px"> Gambaran Pesaing </th>
            <th>{{ $tambahproduk->gambaran_pesaingan }}</th>
        </tr>
        <tr>
            <th width="200px"> Unique Selling Point </th>
            <th>{{ $tambahproduk->unique_selling_point }}</th>
        </tr>
        <tr>
            <th width="200px"> Gambar Produk </th>
            <th></th>
        </tr>
        <tr>
            <th width="200px"> Video Produk </th>
            <th></th>
        </tr>

    </table>

    <div class="col-7">
        <div class="card card-primary">
            <div class="card-header">
                <h4 class="card-title">Gallery </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox"
                            data-title="sample 1 - white" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2"
                                alt="white sample" />
                        </a>
                    </div>

                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox"
                            data-title="sample 2 - black" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2"
                                alt="black sample" />
                        </a>
                    </div>

                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox"
                            data-title="sample 3 - red" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2"
                                alt="red sample" />
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
