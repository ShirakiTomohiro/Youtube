<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Goutte;
use App\Movie;

class Scraping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:scraping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      Movie::query()->delete();
  $url=['https://ytranking.net/','https://ytranking.net/?p=2','https://ytranking.net/?p=3','https://ytranking.net/?p=4','https://ytranking.net/?p=5']; 
  
    $goutte = new \Goutte\Client();
//ユーザーエージェント設定(設定してもしなくてもどちらでも大丈夫かも)
$goutte->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36 ');
//Youtubeランキングサイトへアクセス
foreach ($url as $value) {
$response = $goutte->request('GET', $value);
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

  foreach ((array)$rank as $ranks=>$index) {
     
      $movie= new Movie; //インスタンス宣言して20回保存を繰り返している
      $movie->rank=((array)$rank)[0];   
      $movie->thumbnail=((array)$thumbnail)[0];
      $movie->title=((array)$title)[0];
      $movie->regist_num=((array)$regist_num)[0];
      $movie->views_num=((array)$views_num)[0];
      $movie->video_num=((array)$video_num)[0];

      $movie->save(); 
  }
 });
  
 
   
    
    
    
}
}

}
