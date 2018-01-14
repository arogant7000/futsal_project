@extends('layouts.master')

@section('title')
  Cek Pemesanan
@endsection

@section('content')

 

    <section class="cek-pemesanan">
        <div class="container">
            <div class="row text-center">
                <h1>Cek Pemesanan Anda</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control input-cek" placeholder="masukkan kode pemesanan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-cek" placeholder="masukkan nomor handphone">
                        </div>
                        <button type="submit" class="btn btn-danger" style="height:50px; width:200px; font-size:20px; margin-top:30px; border:1px dashed aquamarine;">
                            Cek Pemesanan!
                        </button>
                    
                    </form>
                </div>
            </div>
        </div>
    </section>

    
@endsection