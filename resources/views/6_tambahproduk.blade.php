 @extends('tampilan.1_template')

 @section('content')
     <form action="add" method="post" enctype="multipart/form-data">
         @csrf
         <section class="content">
             <div class="row">

                 <div class="col-md-6">
                     <div class="card card-primary">
                         <div class="card-header">
                             <h3 class="card-title">Tambah Produk</h3>

                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                     <i class="fas fa-minus"></i>
                                 </button>
                             </div>
                         </div>
                         <div class="card-body">

                             <div class="form-group">
                                 <label for="judul"> Judul </label>
                                 <textarea id="judul" class="form-control" rows="4"></textarea>
                             </div>


                             <div class="form-group">
                                 <label for="#">Mahasiswa</label>
                                 <input type="text" id="mahasiswa" class="form-control">
                             </div>


                             <div class="form-group">
                                 <label for="#">NIM</label>
                                 <input type="text" id="nim" class="form-control">
                             </div>


                             <div class="form-group">
                                 <label for="kategori">Kategori</label>
                                 <select id="kategori" class="form-control custom-select">
                                     <option selected disabled>Select one</option>
                                     <option>Kesehatan</option>
                                     <option>Transportasi</option>
                                     <option>Pertanian</option>
                                 </select>
                             </div>


                             <div class="form-group">
                                 <label for="segmen_customer">Segmen Customer</label>
                                 <select id="segmen_customer" class="form-control custom-select">
                                     <option selected disabled>Select one</option>
                                     <option>Umum</option>
                                     <option>Khusus</option>
                                 </select>
                             </div>


                             <div class="form-group">
                                 <label for="key_partner">Key Partner</label>
                                 <input type="text" id="key_partner" class="form-control">
                             </div>
                         </div>
                     </div>


                 </div>

                 <div class="col-md-6">
                     <div class="card card-primary">
                         <div class="card-header">
                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                     <i class="fas fa-minus"></i>
                                 </button>
                             </div>
                         </div>

                         <div class="card-body">
                             <label for="nilai_tkt">Nilai TKT</label>
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                     <a href="{{ url('/tkt/1_tkt')}}">
                                         <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                             data-bs-target="#exampleModal">Ukur</button>
                                     </a>
                                 </div>

                                 <input type="text" class="form-control">
                             </div>


                             <div class="form-group">
                                 <label for="'gambaran_pesaingan"> Gambaran Pesaingan </label>
                                 <textarea id="'gambaran_pesaingan" class="form-control" rows="4"></textarea>
                             </div>


                             <div class="form-group">
                                 <label for="exampleInputFile">Foto Produk</label>
                                 <div class="input-group">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="foto_produk">
                                         <label class="custom-file-label" for="foto_produk">Choose file</label>
                                     </div>
                                     <div class="input-group-append">
                                         <span class="input-group-text">Upload</span>
                                     </div>
                                 </div>
                             </div>


                             <div class="form-group">
                                 <label for="exampleInputFile">Video Produk</label>
                                 <div class="input-group">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="video_produk">
                                         <label class="custom-file-label" for="video_produk">Choose file</label>
                                     </div>
                                     <div class="input-group-append">
                                         <span class="input-group-text">Upload</span>
                                     </div>
                                 </div>
                             </div>



                             <div class="form-group">
                                 <label for="unique_selling_pointr">Unique Selling Point</label>
                                 <input type="text" id="unique_selling_point" class="form-control">
                             </div>
                         </div>
                     </div>

                 </div>

             </div>

             <div class="row">

                 <div class="col-12">
                     <a href="/produk" class="btn btn-secondary">Cancel</a>
                     <input type="submit" value="Tambah" class="btn btn-success float-right">
                 </div>

             </div>

         </section>

         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         ...
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Save changes</button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
 @endsection
