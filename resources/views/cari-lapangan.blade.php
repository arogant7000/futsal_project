@extends('layouts.master')

@section('title')
  Cari Lapangan 
@endsection

@section('content')


    <section class="heading-1">
        <div class="container">
            <div class="row text-center">
                <h1>Cari Lapangan</h1>
                <hr>
            </div>
            
            <div class="row" style="margin-top:30px;">
                <form action="">
                    <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy/mm/dd">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </div>
                            <input type="date" class="form-control">
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>   
                    </div>
                    <button class="btn btn-danger">Cari Lapangan!</button>
                </form> 
            </div>

        <h3>Daftar Lapangan pada Tanggal 8 Januari 2018 </h3>
        </div>
    </section>

    <section class="tabel">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover ">
                    <thead>
                        <th>Kode</th>
                        <th>Lapangan</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
                        <th>Diskon</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                                <!-- row 1 -->
                                <td>SHF0001</td>
                                <td>Lapangan 1</td>
                                <td>13:00</td>
                                <td>14:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0002</td>
                                <td>Lapangan 1</td>
                                <td>14:00</td>
                                <td>15:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0003</td>
                                <td>Lapangan 1</td>
                                <td>15:00</td>
                                <td>16:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0004</td>
                                <td>Lapangan 1</td>
                                <td>15:00</td>
                                <td>16:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0005</td>
                                <td>Lapangan 1</td>
                                <td>16:00</td>
                                <td>17:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0006</td>
                                <td>Lapangan 1</td>
                                <td>17:00</td>
                                <td>18:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>
                        

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0007</td>
                                <td>Lapangan 1</td>
                                <td>19:00</td>
                                <td>20:00</td>
                                <td>0%</td>
                                <td>Rp. 120000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0008</td>
                                <td>Lapangan 1</td>
                                <td>20:00</td>
                                <td>21:00</td>
                                <td>0%</td>
                                <td>Rp. 120000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0009</td>
                                <td>Lapangan 1</td>
                                <td>21:00</td>
                                <td>22:00</td>
                                <td>0%</td>
                                <td>Rp. 120000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0001</td>
                                <td>Lapangan 2</td>
                                <td>13:00</td>
                                <td>14:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0002</td>
                                <td>Lapangan 2</td>
                                <td>14:00</td>
                                <td>15:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0003</td>
                                <td>Lapangan 2</td>
                                <td>15:00</td>
                                <td>16:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0004</td>
                                <td>Lapangan 2</td>
                                <td>15:00</td>
                                <td>16:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0005</td>
                                <td>Lapangan 2</td>
                                <td>16:00</td>
                                <td>17:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0006</td>
                                <td>Lapangan 2</td>
                                <td>17:00</td>
                                <td>18:00</td>
                                <td>0%</td>
                                <td>Rp. 100000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>
                        

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0007</td>
                                <td>Lapangan 2</td>
                                <td>19:00</td>
                                <td>20:00</td>
                                <td>0%</td>
                                <td>Rp. 120000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0008</td>
                                <td>Lapangan 2</td>
                                <td>20:00</td>
                                <td>21:00</td>
                                <td>0%</td>
                                <td>Rp. 120000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                        <tr>
                                <!-- row 1 -->
                                <td>SHF0009</td>
                                <td>Lapangan 2</td>
                                <td>21:00</td>
                                <td>22:00</td>
                                <td>0%</td>
                                <td>Rp. 120000</td>
                                <td>
                                    <form action="">
                                            <a href="{{ url('lihat-pesanan')}}">
                                                <span class="label label-success">
                                                    <i class="glyphicon glyphicon-envelope  "> Pesan</i>
                                                </span>
                                            </a>
                                    </form>
                                </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="paginate text-center">
        <a href="">
            <button disabled="disabled" class="btn btn-danger">Prev</button>
        </a>
        <a href="">
            <button class="btn btn-default">1</button>
        </a>
        <a href="">
            <button class="btn btn-default">2</button>
        </a>
        <a href="">
            <button class="btn btn-default">...</button>
        </a>
        <a href="">
            <button class="btn btn-default">7</button>
        </a>
        <a href="">
            <button class="btn btn-success">Next</button>
        </a>
    </section>


@endsection