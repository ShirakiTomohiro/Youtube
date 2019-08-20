@extends('layouts.admin')
@section('title','My動画')
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
            $img = $item['snippet']['thumbnails']['default']; // 画像情報 (default, medium, highの順で画像が大きくなります)
            $id = $item['id']['videoId'];
            
            $t = new DateTime($item['snippet']['publishedAt']);
            $t->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $publishedAt = $t->format('Y/m/d'); // 投稿日時 (日本時間)
            
            ?>
            
            <a href="https://www.youtube.com/watch?v=<?php eh($id) ?>"><img src="<?php eh($img['url']) ?>"></a><br>
            <a class="item-title" href="https://www.youtube.com/watch?v=<?php eh($id) ?>"><?php eh($item['snippet']['title']) ?></a><br>
            <span class="item-publishedAt"><?php eh($publishedAt) ?></span><br>
            <a href = "{{ action('Admin\YoutubeController@info' , ['videoId' => $id]) }}" role="button"
             class="btn btn-primary">解析</a>
            <hr>
        <?php }?>
    <?php } ?>

    
      
      




@endsection
