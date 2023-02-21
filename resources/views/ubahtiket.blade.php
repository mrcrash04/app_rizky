@extends('master')

@section('konten')
    <h3>Ubah Data Tiket</h3>
    @foreach ($tiket as $s)
        <form method="post" action="{{ route('updatetiket') }}">
            @csrf
            <input type="hidden" name="id_tiket" value="{{ $s->id_tiket }}">
            <div class="form-group">
                <label>no Tiket</label>
                <input type="text" name="no_tiket" value="{{ $s->no_tiket }}" class="form-control" placeholder="Nama Tiket"
                    required="">
            </div>
            <div class="form-group">
                <label>nama</label>
                <input type="text" name="nama" value="{{ $s->nama }}" class="form-control" placeholder="nama"
                    required="">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required="">{{ $s->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label>No. Hp</label>
                <input type="text" name="no_hp" value="{{ $s->no_hp }}" class="form-control" placeholder="No. Hp"
                    required="">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="">-- Pilih Status --</option>
                    <option value="1">Sudah Check in</option>
                    <option value="0">Belum Check in</option>
                </select>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
            </div>
        </form>
    @endforeach
@endsection
