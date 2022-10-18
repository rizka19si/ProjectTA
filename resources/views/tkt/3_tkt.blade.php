@extends('tampilan.1_template')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function myCal() {
            $(document).ready(function() {

                var total = (($('#satu').val() + $('#dua').val() + $('#tiga').val()) / 3);
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
                        <td>Terdapat inisiasi proses penelitian dan pengembangan yang dilakukan secara aktif</td>
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
                        <td>Kelayakan ilmiah ditunjukan melalui studi analitik dan laboratorium.</td>
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
                        <td>Mencakup juga pengembangan dari lingkungan fungsi terbatas untuk memvalidasi sifat kritis dan
                            prediksi
                            analitis menggunakan : (1) komponen perangkat lunak yang tidak terintergrasi dan (2) sebagian
                            data yang
                            mewakili.</td>
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
