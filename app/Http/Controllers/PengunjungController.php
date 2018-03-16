<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class PengunjungController extends Controller
{
    public function index(){
    	$berita = Berita::all();
    	// dd($berita);
    	return view('index',compact('berita'));
    }
   public function filter($id)
	{
		$budaya = Berita::where('kategori_id','=',$id)->get();
		return view('pengunjung.budaya',compact('budaya'));
	}

	 public function selengkapnya($id)
	{
		$budaya = Berita::find($id);
		return view('pengunjung.detailbudaya',compact('budaya'));
	}

}
