<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\MyHelper;

class HomeController extends Controller
{
    public $path = "";
    //
    public function index()
    {
        $this->path = "terbaru";
        $berita = MyHelper::get('cnn/terbaru/');
        $news = $berita['data']['posts'][0];
        // dd($news);
        // berita 3 teratas diambil 3
        $firstNews = [];
        for ($i = 1; $i < 4; $i++) {
            $firstNews[] = $berita['data']['posts'][$i]; // Tambahkan elemen ke array $beritas
        }
        // berita setalah 3 teratas diambil 3
        $secondNews = [];
        for ($i = 4; $i < 7; $i++) {
            $secondNews[] = $berita['data']['posts'][$i]; // Tambahkan elemen ke array $secondeNews
        }
        $thirdNews = [];
        for ($i = 7; $i < 12; $i++) {
            $thirdNews[] = $berita['data']['posts'][$i]; // Tambahkan elemen ke array $secondeNews
        }
        return view('pages.home', [
            'homeTitle' => $berita['data']['title'],
            'news' => $news,
            'firstNews' => $firstNews,
            'secondNews' => $secondNews,
            'thirdNews' => $thirdNews
        ]);
    }
    public function detail($slug)
    {
        // $slug = "BMKG waspadai potensi peningkatan curah hujan saat libur Isra Mi'raj dan Imlek";
        $berita = MyHelper::get('cnn/terbaru');
        $find = [];
        for ($i = 0; count($berita['data']['posts']); $i++) {
            if ($berita['data']['posts'][$i]['title'] === $slug) {
                $find = $berita['data']['posts'][$i];
                break;
            }
        }
        $beritas = [];
        for ($i = 0; $i < 3; $i++) {
            $beritas[] = $berita['data']['posts'][$i]; // Tambahkan elemen ke array $beritas
        }
        return view('pages.view', [
            'detail' => $find,
            'relateds' => $beritas
        ]);
    }
    public function category($category)
    {
        $this->path = $category;
        $berita = MyHelper::get('cnn/' . $category);
        $news = $berita['data']['posts'][0];
        // dd($news);
        // berita 3 teratas
        $firstNews = [];
        for ($i = 1; $i < 4; $i++) {
            $firstNews[] = $berita['data']['posts'][$i]; // Tambahkan elemen ke array $beritas
        }
        // berita setalah 3 teratas
        $secondNews = [];
        for ($i = 4; $i < 7; $i++) {
            $secondNews[] = $berita['data']['posts'][$i]; // Tambahkan elemen ke array $secondeNews
        }
        $thirdNews = [];
        for ($i = 7; $i < 12; $i++) {
            $thirdNews[] = $berita['data']['posts'][$i]; // Tambahkan elemen ke array $secondeNews
        }
        return view('pages.home', [
            'homeTitle' => $berita['data']['title'],
            'news' => $news,
            'firstNews' => $firstNews,
            'secondNews' => $secondNews,
            'thirdNews' => $thirdNews
        ]);
    }
}
