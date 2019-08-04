@extends('layouts.admin')
@section('title','My動画')
@section('content')
<?php
$crawler = Goutte::request('GET', 'https://ytranking.net/?p=3');
  $crawler->filter('ul.channel-list')->each(function ($ul){
    $ul->filter('li')->each(function($data){

      $data->filter('p')->each(function($item){
        $value = $item->text();
        $array = ["チャンネル登録者数 : " ,"動画再生回数 : " ,"動画本数 : "];
        $value = str_replace("people", "$array[0]", $value);
        $value = str_replace("play_circle_filled", "$array[1]", $value);
        $value = str_replace("videocam", "$array[2]", $value);
        echo $value."<br>";
      });
      echo "<br>";
    });
//    $ul->html();
  });
?>
<div class="pager">
  <ul class="pagination">
      <li class="pre"><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/3"><span>«</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/"><span>1</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/2"><span>2</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/3" class="active"><span>3</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/4"><span>4</span></a></li>
      <li><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/5"><span>5</span></a></li>
      <li class="next"><a href="https://a124070e1f4e4c5b94297a0e7c4594c2.vfs.cloud9.us-east-2.amazonaws.com/4"><span>»</span></a></li>
  </ul>
  </div>
@endsection