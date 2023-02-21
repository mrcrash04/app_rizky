@extends('master')

@section('konten')
    <h4>Data Pemesanan Tiket</h4>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{-- <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-100 mb-3">
            <label for="search" class="d-block mr-2">Pencarian</label>
            <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                placeholder="Masukkan keyword">

            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form> --}}
    <form action="{{ url('search') }}" method="GET">
        {{ @csrf_field() }}
        <input type="text" name="search" placeholder="No Tiket" class="form-control"><br>
        <input type="submit" class="btn btn-md btn-primary">
    </form>
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
        @forelse($tiket as $s)
            <tr>
                <td>{{ $s->id_tiket }}</td>
                <td>{{ $s->no_tiket }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->no_hp }}</td>
                <td>{{ $s->status ? 'Sudah Check in' : 'Belum Check in' }}</td>
                <td>
                    <a href="/tiket/ubahtiket/{{ $s->id_tiket }}" class="btn btn-warning btn-sm"><i
                            class="fa fa-pencil"></i></a>
                    <a href="/tiket/hapus/{{ $s->id_tiket }}"
                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i
                            class="fa fa-trash"></i></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Data tidak ditemukan</td>
            </tr>
        @endforelse
    </table>
    {{ $tiket->links() }}
@endsection
