<?php
namespace App\Http\Controllers;
use Dotenv\Result\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProdukController extends Controller
{
    public function index() {
        return "Testing";
    }
    public function insertProduk()
    {
        return view('form');
    }

    public function prosesinsert(Request $request)
    {
        $input = $request->validate([
            'namaProduk' => 'required|min:5',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',

        ]);
        $namaProduk = $input['namaProduk'];
        $kategori = $input['kategori'];
        $harga = $input['harga'];
        $deskripsi = $input['deskripsi'];
        $jumlah = $input['jumlah'];
        $result = DB::insert("INSERT into produk (namaProduk, kategori, harga, deskripsi, jumlah) values ('$namaProduk', '$kategori', $harga, $deskripsi, $jumlah,)");
        dump($result);
    }
    public function selectProduk(){
        $result = DB::select('select * from produk');
        return view('tampilproduk',['produk'=>$result]);
    }
    public function updateProduk(){
        $result = DB::update("UPDATE produk SET namaProduk = 'test', harga='test' WHERE id=3");
        dump($result);
    }
    public function deleteProduk(){
        $result = DB::delete("DELETE FROM produk WHERE id=3");
        dump($result);
    }
}