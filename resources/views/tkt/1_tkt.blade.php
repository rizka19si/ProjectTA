@extends('tampilan.1_template')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function myCal() {
            $(document).ready(function() {

                var total = (($('#satu').val() + $('#dua').val() + $('#tiga').val()) / 300 );
                $('#total').html((total).toFixed(00));
            });
        }

    </script>

    <!-- <script>

        function myCal(satu,dua,tiga) {
            var x = satu + dua + tiga;
            var z = x/300 * 100
            return z;
        }
            var total = myCal;
    </script> -->


    <div class="card">

        <div class="card-header">
            <h3 class="card-title">Indikator 1 </h3>
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
                        <td>Merupakan tingkat terendah dari kesiapan teknologi perangkat lunak.</td>
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
                        <td>Merupakan ranah baru dalam perangkat lunak yang sedang didalami oleh komunitas riset dasar.</td>
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
                        <td>Mencakup juga pengembangan dari penggunaan tingkat dasar, sifat dasar dari arsitektur perangkat
                            lunak,
                            formulasi matematika dan algoritma umum.</td>
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
                        <td></td>
                        <td> Total: <span id="total">00</span>%

                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" id="demo" onclick="myCal()" >Ukur</button>
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>

    </div>
@endsection
