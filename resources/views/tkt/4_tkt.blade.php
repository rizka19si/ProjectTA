@extends('tampilan.1_template')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function myCal() {
            $(document).ready(function() {

                var total = (($('#satu').val() + $('#dua').val() + $('#tiga').val() + $('#empat').val() + $('#lima')
                    .val()) / 3);
                $('#total').html((total).toFixed(00));
            });
        }
    </script>

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
                        <th>Indikator</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Kompenen dasar dari perangkat lunak dasar terintergrasi bekerja secara bersam-sama.</td>
                        <td>
                            <div class="form-group">
                                <select name="satu" id="satu" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option value="0">0%</option>
                                    <option value="20">20%</option>
                                    <option value="40">40%</option>
                                    <option value="60">60%</option>
                                    <option value="80">80%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Relatif primitif bila sisi efisien dan kehandalan (robustness) dibandingkan dengan
                            sistem/produk.</td>
                        <td>
                            <div class="form-group">
                                <select name="dua" id="dua" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option value="">0%</option>
                                    <option value="20">20%</option>
                                    <option value="40">40%</option>
                                    <option value="60">60%</option>
                                    <option value="80">80%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Pengembangn arsitektur dimulai dengan cakupan isu-isu terkait
                            interoperabilitas, kehandalan, kemudahan pemeliharaan, kemampuan peningkatan, skalabilitas dan
                            keamanan.
                        </td>
                        <td>
                            <div class="form-group">
                                <select name="tiga" id="tiga" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option value="">0%</option>
                                    <option value="20">20%</option>
                                    <option value="40">40%</option>
                                    <option value="60">60%</option>
                                    <option value="80">80%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Terdapat usaha penyesuian dengan elemen(teknologi) terkini.</td>
                        <td>
                            <div class="form-group">
                                <select name="empat" id="empat" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option value="">0%</option>
                                    <option value="20">20%</option>
                                    <option value="40">40%</option>
                                    <option value="60">60%</option>
                                    <option value="80">80%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Prototipe yang ada dikembangkan untuk menunjukkan aspek yang berbeda pada sistem/produk.</td>
                        <td>
                            <div class="form-group">
                                <select name="lima" id="lima" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option value="">0%</option>
                                    <option value="20">20%</option>
                                    <option value="40">40%</option>
                                    <option value="60">60%</option>
                                    <option value="80">80%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td> Total: <span id="total">00</span>%
                            <button class="btn btn-primary btn-sm" id="demo" onclick="myCal()"> test </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
@endsection
