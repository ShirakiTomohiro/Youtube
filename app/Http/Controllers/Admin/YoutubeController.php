<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Alaouy\Youtube\Facades\Youtube
use App\Youtube;
use Goutte;

class YoutubeController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }
   public function scrape() {
       $url = 'https://ytranking.net/';
       function dbsave($url) {
           
           $crawler = Goutte::request('GET', $url);
           $crawler->filter('ul.channel-list')->each(function($ul) {
             echo $ul->html(); 
           });
           if($ul != ''){
               $youtube = new Youtube;
               $youtube->rank = $ul;
               $youtube->save();
           }
       }
   } 
  

   
    public function videos()
    {
        return view('admin.news.videos');
    }
    public function playlists()
    {
        return view('admin.news.play');
    }
    public function index()
    {
        return view('admin.news.index');
    }
    public function index2()
    {
        return view('admin.news.index2');
    }
    public function index3()
    {
        return view('admin.news.index3');
    }
    public function index4()
    {
        return view('admin.news.index4');
    }
    public function index5()
    {
        return view('admin.news.index5');
    }
    public function play2()
    {
        return view('admin.news.play2');
    }
    
    public function play3()
    {
        return view('admin.news.play3');
    }
    
    public function play4($channel_id, $id)
    {
        return view('admin.news.play4');
    }
    
    public function play5()
    {
        return view('admin.news.play5');
    }
    
    public function play6()
    {
        return view('admin.news.play6');
    }
    
    public function play7()
    {
        return view('admin.news.play7');
    }
    
    public function play8()
    {
        return view('admin.news.play8');
    }
    
    public function play9()
    {
        return view('admin.news.play9');
    }
    
    public function play10()
    {
        return view('admin.news.play10');
    }
    
    public function play11()
    {
        return view('admin.news.play11');
    }
    
    public function play12()
    {
        return view('admin.news.play12');
    }
    
    public function play13()
    {
        return view('admin.news.play13');
    }
    
    public function play14()
    {
        return view('admin.news.play14');
    }
    
    public function play15()
    {
        return view('admin.news.play15');
    }
    
    public function play16()
    {
        return view('admin.news.play16');
    }
    
    public function play17()
    {
        return view('admin.news.play17');
    }
    
    public function play18()
    {
        return view('admin.news.play18');
    }
    
    public function play19()
    {
        return view('admin.news.play19');
    }
    
    public function kk()
    {
        return view('admin.news.kk');
    }
}
