@extends('tampilan.1_template')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/11.png"
                                    alt="User profile picture" style={{}}>
                            </div>

                            <h3 class="profile-username text-center">Ardianto Wibowo, S.Kom., M.T.</h3>

                            <p class="text-muted text-center">078517</p>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #234374">
                            <h3 class="card-title">About</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Email </strong>

                            <p class="text-muted">
                                ardie@pcr.ac.id
                            </p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Kompetensi </strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">Visual Programming</span>
                                <span class="tag tag-success">Project Management</span>
                            </p>

                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                </div>

                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <!-- // tabel -->

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Mahasiswa</th>
                                        <th>NIM</th>
                                        <th>Nilai TKT</th>
                                        <th>Kategori </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                 
                                </tbody>
                            </table>
                        </div><!-- /.card-header -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
