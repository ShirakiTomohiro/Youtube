@extends('layouts.admin')
@section('title','Youtubeanalysis')
@section('content')

<?php
  function h($value, $encoding = 'UTF-8') 
{ return htmlspecialchars($value, ENT_QUOTES, $encoding); } // HTMlエスケープ出力用
function eh($value, $encoding = 'UTF-8') 
{ echo h($value, $encoding); } // 同上?>
    <?php if ($response === false || isset($response['error'])) { ?>
        動画情報が取得できませんでした。
    <?php } elseif (count($response['items']) == 0) { ?>
        検索結果が0件でした。
    <?php } else { ?>
        <?php foreach ($response['items'] as $item) {
            $title = $item['snippet']['title'];
            $img = $item['snippet']['thumbnails']['default']; // 画像情報 (default, medium, highの順で画像が大きくなります)
            $id = $item['id']['videoId'];
            
            $t = new DateTime($item['snippet']['publishedAt']);
            $t->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $publishedAt = $t->format('Y/m/d'); // 投稿日時 (日本時間)
            
            ?>
            
            <div class="container">
                <div class="row">
                    <div class="list-news col-md-10 mx-auto">
                        <div class="row">
                            <div class= "movie-channel">
                                <p><img src="<?php eh($img['url']) ?>"></p>
                                <p><?php eh($title)?></p>
                                <p><?php $publishedAt ?></p>
                                <p><a href = "{{ action('Admin\YoutubeController@info' , ['videoId' => $id])}}" role="button"
             class="btn btn-primary">投稿</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        <?php }?>
    <?php } ?>

    
      
      




@endsection
