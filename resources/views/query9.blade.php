@extends('layouts.base', ['title' => 'PBO | Q9'])
@section('content')
    <div class="container" style="margin-top: 12vh;">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $loopnumber = 1;
                @endphp
                @foreach ( $buku as $get )
                    <tr>
                        <th scope="row">{{ $loopnumber++ }}</th>
                        <td>{{ $get->judul }}</td>
                        <td>{{ $get->pengarang }}</td>
                        <td>{{ $get->penerbit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection