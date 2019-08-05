<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Alaouy\Youtube\Facades\Youtube
use App\Movie;
use Goutte;

class YoutubeController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }
    
    
   public function scrape() {
       $goutte = new \Goutte\Client();
//ユーザーエージェント設定(設定してもしなくてもどちらでも大丈夫かも)
$goutte->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36 ');
//Youtubeランキングサイトへアクセス
$response = $goutte->request('GET', "https://ytranking.net/");
//スクレイピングでデータ取得

$response->filter("ul.channel-list li")->each(function($li){
$rank    = $li->filter("p.rank")->text();    //順位
$thumbnail    = $li->filter("p.thumbnail img")->attr("src"); //サムネイルURL
$title    = $li->filter("p.title")->text();    //チャンネル名
$regist_num = "";
$views_num = "";
$video_num = "";
$li->filter("aside p")->each(function($p, $i) use(&$regist_num, &$views_num, &$video_num){
$array = ["チャンネル登録者数 : " ,"動画再生回数 : " ,"動画本数 : "];
//登録者数
if( $i == 0 ){
$regist_num = str_replace("people", "$array[0]", $p->text());
}
//再生回数
if( $i == 1 ){
$views_num = str_replace("play_circle_filled", "$array[1]", $p->text());
}
//動画本数
if( $i == 2 ){
$video_num = str_replace("videocam", "$array[2]", $p->text());
}

});
echo "{$rank}.<br><img src={$thumbnail}> .<br> {$title}.<br>{$regist_num}.<br> {$views_num}.<br> {$video_num}.<br>";

$movie = new Movie;
         $movie->title = "aaaaaaa";
         $movie->regist_num = 1;
         $movie->views_num;
         $table->string('video_num');
         
         $table->string('ranking');
$movie->save();

  });
  
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
