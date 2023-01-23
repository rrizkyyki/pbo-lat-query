@extends('layouts.base', ['title' => 'Home | Q1'])
@section('content')

    <div class="container" style="margin-top: 12vh;">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">kd_buku</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Terbit</th>
                    <th scope="col">Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $buku as $get )
                    <tr>
                        <th scope="row">{{ $get->kd_buku}}</th>
                        <td>{{ $get->barcode }}</td>
                        <td>{{ $get->judul }}</td>
                        <td>{{ $get->deskripsi }}</td>
                        <td>{{ $get->pengarang }}</td>
                        <td>{{ $get->penerbit }}</td>
                        <td>{{ $get->stok }}</td>
                        <td>{{ $get->tahun_terbit }}</td>
                        <td>{{ $get->kategori }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- paginations --}}
        {{-- <br> --}}
        {{-- {{ $buku->links() }} --}}
    </div>
@endsection