@extends('layouts.master')

@section('title')
  Alouh Futsal
@endsection

@section('content')


    <section class="heading-1">
        <div class="container">
            <div class="row text-center">
                <h1>Pesanan Anda</h1>
                <hr>
            </div>
        </div>
    </section>

    <section class="tabel-pesanan">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover ">
                    <thead>
                        <th>Kode</th>
                        <th>Nama Lapangan</th>
                        <th>Tanggal</th>
                        <th>Shift Jam Mulai</th>
                        <th>Shift Jam Berakhir</th>
                        <th>Diskon</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- row 1 -->
                            <td>--kode--</td>
                            <td>--nama Lapangan--</td>
                            <td>--Tanggal--</td>
                            <td>--Shift Jam Mulai--</td>
                            <td>--Shift Jam Berakhir--</td>
                            <td>--Diskon--</td>
                            <td>--Harga--</td>
                            <td>
                                <form action="">
                                    <a href="#">
                                        <span class="label label-danger">
                                            <i class="glyphicon glyphicon-trash  "> Pesan</i>
                                        </span>
                                    </a>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <!-- row 2 -->
                            <td>--kode--</td>
                            <td>--nama Lapangan--</td>
                            <td>--Tanggal--</td>
                            <td>--Shift Jam Mulai--</td>
                            <td>--Shift Jam Berakhir--</td>
                            <td>--Diskon--</td>
                            <td>--Harga--</td>
                            <td>
                                <form action="">
                                    <a href="#">
                                        <span class="label label-danger">
                                            <i class="glyphicon glyphicon-trash  "> Pesan</i>
                                        </span>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        

                        <tr>
                            <td>Total Bayar</td>
                            <td>=</td>
                            <td>Rp. 100.000,-</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        

            <div class="row">
                <div class="col-sm-2">
                    <button class="btn btn-primary">Tambah Pesanan</button>
                </div>
                <div class="col-sm-2 col-sm-offset-8">
                    <button class="btn btn-success">Lanjutkan untuk Memesan</button>
                </div>
            </div>
        </div>
    </section>

@endsection