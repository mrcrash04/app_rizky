@extends('master')

@section('konten')
    <h4>Data Pemesanan Tiket</h4>
    <form method="post" action="{{ route('simpantiket') }}">
        @csrf
        <div class="form-group">
            <label>No Tiket</label>
            <input type="text" name="no_tiket" class="form-control" placeholder="cth: TK001" required="">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required=""></textarea>
        </div>
        <div class="form-group">
            <label>No. Hp</label>
            <input type="text" name="no_hp" class="form-control" placeholder="No. Hp" required="">
        </div>

        <div class="form-group text-left">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
        </div>
    </form>
@endsection
