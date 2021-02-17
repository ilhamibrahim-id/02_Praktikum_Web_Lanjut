<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Praktikum3 extends Controller
{
    public function index() {
        return '<a href="https://www.educastudio.com/">Home</a>';
       }
       public function edugame(){ 
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Edugame</a>';
        }
        public function storybooks(){ 
            return '<a href="https://www.educastudio.com/category/riri-story-books">storybooks</a>';
        }
        public function kidsongs(){ 
            return '<a href="https://www.educastudio.com/category/kolak-kids-songs">kidsongs</a>';
       }
       public function friendkids(){ 
            return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">friendkids</a>';
       }

    public function about(){
        return '<a href="https://www.educastudio.com/about-us">about us</a>';
    }
    public function karir(){ 
        return '<a href="https://www.educastudio.com/program/karir">karir</a>';
        }
    public function magang(){ 
        return '<a href="https://www.educastudio.com/program/magang">magang</a>';
    }
    public function industri(){ 
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">industri</a>';
    }

        public function berita($isi){
            return '<a href="https://www.educastudio.com/'.$isi.'">Berita</a>';
        } 
}
