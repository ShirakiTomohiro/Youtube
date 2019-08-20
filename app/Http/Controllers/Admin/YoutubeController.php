<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Khill\Lavacharts\Laravel\ LavachartsServiceProvider;
//use Alaouy\Youtube\Facades\Youtube
use App\Movie;

use Goutte;

class YoutubeController extends Controller
{
    public function add(Request $request)
    {
        //$posts = DB::table('movie')->paginate(20);
      //return view('admin.news.create', ['posts' => $posts
      //]);
      
      $channel_title = $request->channel_title;
      if ($channel_title != '') {
          $result = Movie::where('title', $channel_title)->paginate(20);
      }else {
          $result = DB::table('movie')->paginate(20);
      }
      return view('admin.news.create', ['result' => $result, 'channel_title' => $channel_title]);
      
    }
    
    public function getData(Request $request)
    {
    $channel_title = $request->channel_title;
      if ($channel_title != '') {
          $posts = Movie::where('title', $channel_title)->paginate(20);
      }else {
          $posts = DB::table('movie')->paginate(20);
      }
      return view('admin.news.index', ['posts' => $posts, 'channel_title' => $channel_title
      ]);
       
    
    }
   
    public function videos(Request $request)
    {
        define('AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU', ''); // APIキー (Google Developer Consoleから取得したものをセットしてください)

function json_get($url, $query = array(), $assoc = false) { // JSONデータ取得用
    if ($query) $url .= ('?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986));

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url); // URL
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // リクエスト先が https の場合、証明書検証をしない (環境によって動作しない場合があるため)
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // curl_exec() 経由で応答データを直接取得できるようにする
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10); // 接続タイムアウトの秒数
    $responseString = curl_exec($curl); // 応答データ取得
    curl_close($curl);
    return ($responseString !== false) ? json_decode($responseString, $assoc) : false;
}
function h($value, $encoding = 'UTF-8') 
{ return htmlspecialchars($value, ENT_QUOTES, $encoding); } // HTMlエスケープ出力用
function eh($value, $encoding = 'UTF-8') 
{ echo h($value, $encoding); } // 同上


$response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
    'id' => $request->input('channelId'), // チャンネルID (チャンネルで絞り込む場合)
    // 'q' => 'テスト', // 検索キーワード (キーワードで絞り込む場合)
    
    'part' => 'snippet,statistics'// 取得するデータの種類 (タイトルや画像を含める場合はsnippet)
     
), true);



return view('admin.news.videos', ['response' => $response]);
    }
    
    
    public function playlists(Request $request)
    {
        
define('AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU', ''); // APIキー (Google Developer Consoleから取得したものをセットしてください)

function json_get($url, $query = array(), $assoc = false) { // JSONデータ取得用
    if ($query) $url .= ('?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986));

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url); // URL
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // リクエスト先が https の場合、証明書検証をしない (環境によって動作しない場合があるため)
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // curl_exec() 経由で応答データを直接取得できるようにする
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10); // 接続タイムアウトの秒数
    $responseString = curl_exec($curl); // 応答データ取得
    curl_close($curl);
    return ($responseString !== false) ? json_decode($responseString, $assoc) : false;
}
function h($value, $encoding = 'UTF-8') 
{ return htmlspecialchars($value, ENT_QUOTES, $encoding); } // HTMlエスケープ出力用
function eh($value, $encoding = 'UTF-8') 
{ echo h($value, $encoding); } // 同上


$response = json_get('https://www.googleapis.com/youtube/v3/search', array(
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
    'channelId' => $request->input('channelId'), // チャンネルID (チャンネルで絞り込む場合)
    // 'q' => 'テスト', // 検索キーワード (キーワードで絞り込む場合)
    'part' => 'snippet', // 取得するデータの種類 (タイトルや画像を含める場合はsnippet)
    'order' => 'viewCount', // 日時降順
    'maxResults' => 50, // 検索数 (5～50)
    'type' => 'video', // 結果の種類 (channel,playlist,video)
    
), true);

return view('admin.news.play', ['response' => $response]);

$result = $response['items'];
$ID = $result['id']['videoId'];
$remove = json_get('https://www.googleapis.com/youtube/v3/videos', array(
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
    'id' => $ID->input('videoId'),
    'part' => 'contentDetails',
    ),true);
return view('admin.news.play', ['remove' => $remove]);

    }
    
    public function info(Request $request)
    {
       define('AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU', ''); // APIキー (Google Developer Consoleから取得したものをセットしてください)

function json_get($url, $query = array(), $assoc = false) { // JSONデータ取得用
    if ($query) $url .= ('?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986));

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url); // URL
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // リクエスト先が https の場合、証明書検証をしない (環境によって動作しない場合があるため)
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // curl_exec() 経由で応答データを直接取得できるようにする
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10); // 接続タイムアウトの秒数
    $responseString = curl_exec($curl); // 応答データ取得
    curl_close($curl);
    return ($responseString !== false) ? json_decode($responseString, $assoc) : false;
}
function h($value, $encoding = 'UTF-8') 
{ return htmlspecialchars($value, ENT_QUOTES, $encoding); } // HTMlエスケープ出力用
function eh($value, $encoding = 'UTF-8') 
{ echo h($value, $encoding); } // 同上


$response = json_get('https://www.googleapis.com/youtube/v3/videos', array(
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
    'id' => $request->input('videoId'), // チャンネルID (チャンネルで絞り込む場合)
    // 'q' => 'テスト', // 検索キーワード (キーワードで絞り込む場合)
    'part' => 'snippet,statistics,contentDetails', // 取得するデータの種類 (タイトルや画像を含める場合はsnippet)
), true);

return view('admin.news.info', ['response' => $response]);


    }
    
    
    public function play2()
    {
        return view('admin.news.play2');
    }
    
   
    
    public function play()
    {
         $url=['https://ytranking.net/','https://ytranking.net/?p=2','https://ytranking.net/?p=3','https://ytranking.net/?p=4','https://ytranking.net/?p=5']; 
  
    $goutte = new \Goutte\Client();
//ユーザーエージェント設定
$goutte->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36 ');
//Youtubeランキングサイトへアクセス
foreach ($url as $value) {
$response = $goutte->request('GET', $value);
//スクレイピングでデータ取得




$response->filter("ul.channel-list li")->each(function($li) {

$channelId = $li->filter("p.more a")->attr("href");
$goutte2 = new \Goutte\Client();
$goutte2->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36 ');
$detail_response = $goutte2->request('GET', "https://ytranking.net".$channelId);
$channel_url = $detail_response->filter("header.header a")->attr("href");
$channelId = strrchr($channel_url,"/");
$channelId = substr($channelId,1);

$rank    = $li->filter("p.rank")->text();    //順位
$thumbnail    = $li->filter("p.thumbnail img")->attr("src"); //サムネイルURL
$title    = $li->filter("p.title")->text();//チャンネル名
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



echo ".<br>{$rank}.<br><img src={$thumbnail}> .<br> {$title}.<br>{$regist_num}.<br> {$views_num}.<br> {$video_num}.<br> <a href='{$channel_url}'>click</a>.<br> {$channelId}";

  
 });
 
}


    }
    
   
    
}
