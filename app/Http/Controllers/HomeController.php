<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredNews = News::published()->latest()->take(2)->get();
        $popularNews = News::published()->orderBy('hits', 'desc')->take(5)->get();
        $recentNews = News::published()->latest()->take(6)->get();
        
        return view('home', compact('featuredNews', 'popularNews', 'recentNews'));
    }

    public function profil()
    {
        return view('profil');
    }

    public function sejarah()
    {
        return view('profil.sejarah');
    }

    public function visiMisi()
    {
        return view('profil.visi-misi');
    }

    public function struktur()
    {
        return view('profil.struktur');
    }

    public function sambutan()
    {
        return view('profil.sambutan');
    }

    public function dosen()
    {
        return view('profil.dosen');
    }

    public function akreditasi()
    {
        return view('profil.akreditasi');
    }

    public function academic()
    {
        return view('academic');
    }

    public function publication()
    {
        return view('publication');
    }

    public function student()
    {
        return view('student');
    }

    public function information()
    {
        return view('information');
    }

    public function contact()
    {
        return view('contact');
    }
}

