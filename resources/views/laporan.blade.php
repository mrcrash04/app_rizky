@extends('master')

@section('konten')
    <h3 style="text-align: center">Laporan Tiket Penonton</h3>
    <table class="table table-bordered table-hover">
        <tr>
            <th>no</th>
            <th>No Tiket</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>No. Hp</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($tiket as $s)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $s->no_tiket }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->no_hp }}</td>
                <td>{{ $s->status ? 'Sudah Check in' : 'Belum Check in' }}</td>

            </tr>
        @endforeach
    </table>
@endsection
