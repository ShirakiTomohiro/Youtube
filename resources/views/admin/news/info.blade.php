@extends('layouts.admin')
@section('title','My動画')
@section('content')

 <?php if ($response === false || isset($response['error'])) { ?>
        動画情報が取得できませんでした。
    <?php } elseif (count($response['items']) == 0) { ?>
        検索結果が0件でした。
    <?php } else { ?>
        <?php foreach ($response['items'] as $item) {
            $img = $item['snippet']['title']; // 画像情報 (default, medium, highの順で画像が大きくなります)
            $ty = $item ['snippet']['thumbnails']['default'];
            $bu = $item['snippet']['description'];
            $ct = $item['snippet']['channelTitle'];
            $ca = $item['snippet']['categoryId'];
            //$tag = $item['snippet.tags[]'];
            $ft = new DateTime($item['snippet']['publishedAt']);
            $ft->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $publishedAt = $ft->format('Y/m/d');
            $ti = $item['statistics']['viewCount'];
            $tt = number_format($ti);
            $tk = $item['statistics']['likeCount'];
            $kk = $item['statistics']['dislikeCount'];
            $rt = $item['statistics']['favoriteCount'];
            $cd = $item['contentDetails']['duration'];
            
           
           
          
  ?>
            
        <?php }?>
    <?php } ?>
   <ul>
         <h2>調査結果</h2>
       <p>タイトル :   {{ $img }}</p>
    </ul>
    <ul>
        <p>登録日 : {{ $publishedAt }}</p>
    </ul>
    <ul>
        <img src = $ty>
    </ul>
    <ul>
        <p>動画概要 : {{ $bu }}</p>
    </ul>
    <ul>
        <p>チャンネルタイトル : {{ $ct }}</p>
    </ul>
    <ul>
        <p>動画カテゴリ : {{ $ca }}</p>
    </ul>
    
    <ul>
        <p>再生回数 : {{ $tt }}回</p>
    </ul>
    <ul>
        <p>[高評価] : {{ $tk }}</p>
    </ul>
    <ul>
        <p>[低評価] : {{ $kk }}</p>
    </ul>
    <ul>
        <p>お気に入り : {{ $rt }}</p>
    </ul>
    <ul>
        <p>動画再生時間 : {{ $cd }}</p>
    </ul>
   
    


@endsection