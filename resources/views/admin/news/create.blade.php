@extends('layouts.admin')

@section('title', '動画投稿')

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



$response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCgMPP6RRjktV7krOfyUewqw',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);


?>
    

    <div class=channel-list>
     <p class="rank">1</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a/AGF-l7-iP9dkqSTTt-ctYjsyxRckbFoJ0IeLwIkO4w=s288-c-k-c0xffffffff-no-rj-mo"
         alt="はじめしゃちょー（hajime）"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@playlists') }}" role="button" class=title>はじめしゃちょー（hajime）</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCZf__ehlCEBPop-_sldpBUQ',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">2</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mAXMUlOXH07eDZjrg65k8HXZbSenTIMT-lN-Q=s88-mo-c-c0xffffffff-rj-k-no"
         alt="HikakinTV"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@videos') }}" role="button" class=title>HikakinTV</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>人</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>人</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 
  <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCibEhpu5HP45-w7Bq1ZIulw',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">3</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mDm2vdAu-dPh8IPiMm9g8rz5AXb_fc4lWUCqw=s88-mo-c-c0xffffffff-rj-k-no"
         alt="Fischer's-フィッシャーズ"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play2') }}" role="button" class=title>Fischer's-フィッシャーズ</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCFTVNLC7ysej-sD5lkLqNGA',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">4</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mAeKLjwKNZplt7YJd-MkAi7OqH-tZEXa-QlsA=s88-mo-c-c0xffffffff-rj-k-no"
         alt="Yuka Kinoshita木下ゆうか"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play3') }}" role="button" class=title>Yuka Kinoshita木下ゆうか</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UC1oPBUWifc0QOOY8DEKhLuQ',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">5</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mDA5aOcyiWQwS1k37_ubyrvmoh1iyF7qcF8HQ=s88-mo-c-c0xffffffff-rj-k-no"
         alt="avex"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play4') }}" role="button" class=title>avex</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
  <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCutJqz56653xV2wwSvut_hQ',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">6</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mCs3Nd7Y4LEKXOsl0MKC21BPJHzMT7YSyrXpQ=s88-mo-c-c0xffffffff-rj-k-no"
         alt="東海オンエア"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play5') }}" role="button" class=title>東海オンエア</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCX1xppLvuj03ubLio8jslyA',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">7</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mD9rLoqAxaLmwd4P9x6R8na_a22qpBBIdCb-Q=s88-mo-c-c0xffffffff-rj-k-no"
         alt="HikakinGames"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play6') }}" role="button" class=title>HikakinGames</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCljYHFazflmGaDr5Lo90KmA',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">8</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mDoGht-yfgjaWfejuKN5Rxgl_tK3SSGkQXNSw=s88-mo-c-c0xffffffff-rj-k-no"
         alt="SUSHI RAMEN【Riku】"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play7') }}" role="button" class=title>SUSHI RAMEN【Riku】</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCpOjLndjOqMoffA-fr8cbKA',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">9</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mDV16ZyHsnz7yI2QOsN6rYJUOJPitenCcD0WA=s88-mo-c-c0xffffffff-rj-k-no"
         alt="水溜りボンド"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play8') }}" role="button" class=title>水溜りボンド</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCRxAgfYexGLlu1WHGIMUDqw',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">10</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mCBpXK7Xz6ruDOxqKJP0AaGEAWfQcbytW6sLQ=s88-mo-c-c0xffffffff-rj-k-no"
         alt="JunsKitchen"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play9') }}" role="button" class=title>JunsKitchen</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCUCeZaZeJbEYAAzvMgrKOPQ',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">11</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a/AGF-l78Si05g-ZchozyBiJkjczWHDfq0NLOb5r5dLg=s176-c-k-c0x00ffffff-no-rj"
         alt="米津玄師"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play10') }}" role="button" class=title>米津玄師</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>


<?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCHhXSfCzQYAAFkpdxr7QsaA',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">12</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mBeDuRwJB_c8kCZ3cUPXeXcwLhN2RwvkF2yKA=s88-mo-c-c0xffffffff-rj-k-no"
         alt="AAAjoken toy"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play11') }}" role="button" class=title>AAAjoken toy</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCHKVXtT1YBCYUnnr4apqXfg',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">13</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mCaXsMZ_TNwvr42w9Xfqhzdo5vbdfHyGbbA3Q=s88-mo-c-c0xffffffff-rj-k-no"
         alt="Travel Thirsty"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play12') }}" role="button" class=title>Travel Thirsty</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCg4nOl7_gtStrLwF0_xoV0A',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">14</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mC-G6ORK8BCtl8qmo7PXUWK_s7C0WNFSLdABQ=s88-mo-c-c0xffffffff-rj-k-no"
         alt="SeikinTV"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play13') }}" role="button" class=title>SeikinTV</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCl2aT0nRejTCQO_LHZAftBw',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">15</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mCjd6IEkf5zHGu9u8PcPUalKNE-x4uQqf-vzg=s88-mo-c-c0xffffffff-rj-k-no"
         alt="UNIVERSAL MUSIC JAPAN"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play14') }}" role="button" class=title>UNIVERSAL MUSIC JAPAN</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCU7cVpD6RJIiWw7LUZVMuCQ',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">16</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mBOMJ0mDRkQ0dFvD-LIZoIZ2mojt6uKUgtPIQ=s88-mo-c-c0xffffffff-rj-k-no"
         alt="タキロン Takilong Kids' Toys"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play15') }}" role="button" class=title>タキロン Takilong Kids' Toys</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCaminwG9MTO4sLYeC3s6udA',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">17</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mDLzL0VZPZtwQ0CpOyauqqw5kZAjJ3oz05Gtw=s88-mo-c-c0xffffffff-rj-k-no"
         alt="ヒカル（Hikaru）"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play16') }}" role="button" class=title>ヒカル（Hikaru）</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCTFT5NbDl0Fa_fE9Cz_yOAA',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">18</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mD0nsyDTm1mOewuFudlulBsJw1lDkHxC6t_-g=s88-mo-c-c0xffffffff-rj-k-no"
         alt="Miniature Space"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play17') }}" role="button" class=title>Miniature Space</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UC2zXd5Kq9Hu-_bwO1H7CD0g',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">19</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mCb8-0UYZbXzJt2EN2v9Vvsz-t5cae24ywCkg=s88-mo-c-c0xffffffff-rj-k-no"
         alt="MosoGourmet 妄想グルメ"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play18') }}" role="button" class=title>MosoGourmet 妄想グルメ</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
 
  <?php
 
 $response = json_get('https://www.googleapis.com/youtube/v3/channels', array(
    'part' => 'statistics',
    'id' => 'UCNHqosTdwFPSK5OQsjFoS5g',
    'key' => 'AIzaSyDjdXsXm2J4-K78FdXCcroM8ZNbtpu-ENU',
), true);
 ?>
 
 <div class=channel-list>
     <p class="rank">20</p>
         <p class="thumbnail"><img
         src="https://yt3.ggpht.com/a-/AAuE7mBMQpLboc9GsWljpo40Q-pviWtVHg2Ju5rZBg=s88-mo-c-c0xffffffff-rj-k-no"
         alt="Kan & Aki's CHANNELかんあきチャンネル"></p>
         <li>
     <a href = "{{ action('Admin\YoutubeController@play19') }}" role="button" class=title>Kan & Aki's CHANNELかんあきチャンネル</a>
     <aside>
        
 <p>
             <i class="material-icons">チャンネル登録者数</i>
   <?php
   
   foreach ($response["items"] as $item) {
       echo $item['statistics']['subscriberCount']; 
    }?><span>人</span> 
 </p>
 <p>
             <i class="material-icons">動画再生数</i>
   <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['viewCount']; 
    }?><span>回</span>      
 </p> 
 <p>
             <i class="material-icons">動画本数</i>
 <?php
    foreach ($response["items"] as $item) {
       echo $item['statistics']['videoCount']; 
    }?><span>本</span>      
 </p> 
 </li>
 </div>
 
 
 
@endsection