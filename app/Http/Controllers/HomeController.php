<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = $this->getNoticias();

        return view('home', compact('noticias'));
    }

    private function getNoticias(){
        $noticias = [];

        $url = "http://tecnologia.uol.com.br/ultnot/index.xml";
        $noticiasObj = simplexml_load_file($url);
        foreach($noticiasObj->channel->item as $noticia){
            $novaNoticia = [];

            $novaNoticia["link"]  = trim((string) $noticia->link);
            $novaNoticia["title"] = (string) $noticia->title;

            $noticias[] = (object) $novaNoticia;
        }

        return $noticias;
    }
}
