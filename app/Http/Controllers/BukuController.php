<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// pagination
// use Illuminate\Pagination\Paginator;
// use Illuminate\Support\Collection;
// use Illuminate\Pagination\LengthAwarePaginator;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::select('SELECT * FROM buku');
        return view('query1', ['buku' => $buku]);
        // $buku = DB::table('buku')->paginate(10);
        // return view('query1', ['buku' => $buku]);
    }

    public function query2()
    {
        $buku = DB::select('SELECT pengarang FROM buku;');
        return view('query2', ['buku' => $buku]);
    }

    public function query3()
    {
        $buku = DB::select('SELECT penerbit FROM buku;');
        return view('query3', ['buku' => $buku]);
    }

    public function query4()
    {
        $buku = DB::select('SELECT judul, penerbit FROM buku;');
        return view('query4', ['buku' => $buku]);
    }

    public function query5()
    {
        $buku = DB::select("SELECT * FROM buku WHERE tahun_terbit = '2014-07-01'");
        return view('query5', ['buku' => $buku]);
    }

    public function query6()
    {
        $buku = DB::select("SELECT * FROM buku WHERE stok < 30;");
        return view('query6', ['buku' => $buku]);
    }

    public function query7()
    {
        $buku = DB::select("SELECT * FROM buku WHERE tahun_terbit BETWEEN '2012-08-22' AND '2015-09-13'");
        return view('query7', ['buku' => $buku]);
    }

    public function query8()
    {
        $buku = DB::select("SELECT * FROM buku WHERE tahun_terbit BETWEEN '2019-01-1' AND '2022-01-1' AND stok < 100");
        return view('query8', ['buku' => $buku]);
    }

    public function query9()
    {
        $buku = DB::select("SELECT pengarang, penerbit, judul FROM buku WHERE YEAR(tahun_terbit) BETWEEN 2012 AND 2023");
        return view('query9', ['buku' => $buku]);
    }
}
