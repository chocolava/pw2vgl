<?php 

namespace controller;

use app\Controller;
use app\View;
use model\Mahasiswa;
use model\Kategori;
/**
* 
*/
class SiteController extends Controller
{
	
	public function actionindex()
	{
		$mahasiswa = new Mahasiswa();
		$namaku = $mahasiswa->ambilSemua();

		View::render('utama',['nama'=>$namaku]);
	}

	public function actioncoba()
	{
		$namasaya="Viva";
		$namadia="Michelle";
		View::render('coba',['namasaya'=>$namasaya,'namadia'=>$namadia]);
	}
	public function actionlistkategori(){
		$kategori = new Kategori();
		$data_kategori = $kategori->ambilSemua();
		View::render('listkategori',['data_kategori'=>$data_kategori]);
	}
}
?>