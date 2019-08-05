@extends('layouts.admin')
@section('title','My動画')
@section('content')

<?php
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
  });
  
?>


<div class="pager">
  <ul class="pagination">
      <li class="pre"><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/"><span>«</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/" class="active"><span>1</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/2"><span>2</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/3"><span>3</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/4"><span>4</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/5"><span>5</span></a></li>
      <li class="next"><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/2"><span>»</span></a></li>
  </ul>
</div>
@endsection