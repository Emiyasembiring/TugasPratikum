<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $Genre;
    protected $Film;
    //step 3 membuat fungsi construct untuk inisiasi class model(filmmodel)
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Film = new FilmModel();
        $this -> Genre = new GenreModel();
    }

    public function index()
    {
        //step 4
        $data['data_Genre'] = $this -> Genre -> getGenre();
        return view("genre/index", $data);
    }

    //fungsi yang akan diakses pada url nanti
    public function all(){
        //memanggil fungsi get all data pada model
        //dd($this->Film -> getAllData()); 
    $data['semuagenre'] = $this -> Genre -> getAllData();
    return view("Genre/semuagenre", $data);
    }            

}