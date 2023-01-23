@extends('layouts.base', ['title' => 'PBO | Q2'])
@section('content')
    <div class="container" style="margin-top: 12vh;">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pengarang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $loopnumber = 1;
                @endphp
                @foreach ( $buku as $get )
                    <tr>
                        <td>{{ $loopnumber++ }}</td>
                        <td>{{ $get->pengarang }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection