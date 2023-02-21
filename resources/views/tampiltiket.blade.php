@extends('master')

@section('konten')
    <a href="{{ route('tambahtiket') }}" class="btn btn-warning btn-sm">pemesanan tiket</a>
    <h3>Data Tiket</h3>
    <br>
    <table class="table table-bordered table-hover">
        <tr>
            <th>no</th>
            <th>No tiket</th>
            <th>nama</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>No. Hp</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($tiket as $s)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $s->no_tiket }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->status ? 'Sudah Check in' : 'Belum Check in' }}</td>
                <td>{{ $s->no_hp }}</td>
                <td>
                    <a href="/tiket/ubahtiket/{{ $s->id_tiket }}" class="btn btn-warning btn-sm"><i
                            class="fa fa-pencil"></i></a>
                    <a href="/tiket/hapus/{{ $s->id_tiket }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
