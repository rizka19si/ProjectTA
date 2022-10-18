@extends('tampilan.1_template')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function myCal() {
            $(document).ready(function() {

                var total = (($('#satu').val() + $('#dua').val() + $('#tiga').val() + $('#empat').val() + $('#lima')
                    .val() + $('#enam').val()) / 3);
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

                    <!-- satu -->
                    <tr>
                        <td>1</td>
                        <td>Merupakan tingkat dimana teknologi perangkat lunak tersebut siap untuk dikembangkan
                            maupun dipakai secara berulang (rapid develpment/re-use)</td>
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

                    <!-- dua -->
                    <tr>
                        <td>2</td>
                        <td>Perangkat lunak berbasis teknologi yang sepenuhnya terintergrasi degan perangkat keras/lunak
                            dari sistem
                            operasional</td>
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

                    <!-- tiga -->
                    <tr>
                        <td>3</td>
                        <td>Semua dokumentasi perangkat lunak telah diverifikasi </td>
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

                    <!-- empat -->
                    <tr>
                        <td>4</td>
                        <td>Memiliki pengalaman sukses dari sisi operasional</td>
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

                    <!-- lima -->
                    <tr>
                        <td>5</td>
                        <td>Terdapat dukungan berkelanjutan terhadap rekayasa perangkat lunak</td>
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

                    <!-- enam -->
                    <tr>
                        <td>6</td>
                        <td>Terdapat dukungan berkelanjutan terhadap rekayasa perangkat lunak</td>
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
