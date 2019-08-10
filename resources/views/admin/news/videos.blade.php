@extends('layouts.form')
@section('title','My動画')
@section('content')

<?php
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
function h($value, $encoding = 'UTF-8'){ return htmlspecialchars($value, ENT_QUOTES, $encoding); } // HTMlエスケープ出力用
function eh($value, $encoding = 'UTF-8') { echo h($value, $encoding); } // 同上



$response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'id',
    'forUsername' => 'HikakinTV',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU'
), true);
//print_r($response);
?>


    
    
    
        <?php foreach ($response['items'] as $item) {
            
         echo  $id = $item['id'];
            
           
            ?>
            
        <?php } ?>
   
@endsection

