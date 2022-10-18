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
                        <td>Setelah prinsip dasar teramati, berlanjut pada pembuatan aplikasi yang bersifat praktis.</td>
                        <td>
                            <div class="form-group">
                                <select name="satu" id="satu" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option>0%</option>
                                    <option>20%</option>
                                    <option>40%</option>
                                    <option>60%</option>
                                    <option>80%</option>
                                    <option>100%</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Aplikasi bersifat spekulatif, dan terdapat kemungkinan tidak memiliki bukti atau analisis rinci
                            untuk
                            mendukung asumsi yag ada/dilakukan.</td>
                        <td>
                            <div class="form-group">
                                <select name="dua" id="dua" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option>0%</option>
                                    <option>20%</option>
                                    <option>40%</option>
                                    <option>60%</option>
                                    <option>80%</option>
                                    <option>100%</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Contoh-contoh dibatas pada studi analitik dengan menggunakan data sintetis (buatan).</td>
                        <td>
                            <div class="form-group">
                                <select name="tiga" id="tiga" class="form-control" required>
                                    <option value="">-Pilih--</option>
                                    <option>0%</option>
                                    <option>20%</option>
                                    <option>40%</option>
                                    <option>60%</option>
                                    <option>80%</option>
                                    <option>100%</option>
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
