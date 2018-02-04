<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $data = array(
            'title' => 'Bienvenue dans mon Projet',
            'page_title' => 'Page d\'Acceuil',
            'description' => ''
        );

        return view('pages.index')->with($data);
    }

    public function about() {
        $data = array(
            'title' => 'Mieux nous connaître',
            'page_title' => 'À propos',
            'description' => 'pour mieux nous connaître'
        );
        return view('pages.about')->with($data);
    }
}
