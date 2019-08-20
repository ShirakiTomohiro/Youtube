@extends('layouts.admin')
@section('title','My動画')
@section('content')


  
    <?php if ($response === false || isset($response['error'])) { ?>
        動画情報が取得できませんでした。
    <?php } elseif (count($response['items']) == 0) { ?>
        検索結果が0件でした。
    <?php } else { ?>
        <?php foreach ($response['items'] as $item) {
            $ki = $item['snippet']['title']; // 画像情報 (default, medium, highの順で画像が大きくなります)
            $id = $item['id'];
            $ty = $item ['snippet']['thumbnails']['default'];
            $gu = $item['snippet']['description'];
            $ft = new DateTime($item['snippet']['publishedAt']);
            $ft->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $publishedAt = $ft->format('Y/m/d');
            $ti = $item['statistics']['viewCount'];
            $tt = number_format($ti);
            $ri = $item['statistics']['subscriberCount'];
            $ni = number_format($ri);
            $ji = $item['statistics']['videoCount'];
            $fi = number_format($ji);
            $hu = number_format($ti / $ji);
          
           
            ?>
            
        <?php }?>
    <?php } ?>
   
    <ul>
        
       <h2>{{ $ki }}</h2>
    </ul>
    <ul>
        <p>登録日 : {{ $publishedAt }}</p>
    </ul>
    <ul>
        <img src = $ty>
    </ul>
    <ul>
        <p>チャンネルURL : <a href="https://www.youtube.com/channel/{{$id}}" role="button">https://www.youtube.com/channel/{{$id}}</a></p>
    </ul>
  
    <ul>
        {{ $gu }}
    </ul>
    <ul>
        <p>再生回数 : {{ $tt }}回</p>
    </ul>
    <ul>
        <p>チャンネル登録者数 : {{ $ni }}人 </p>
    </ul>
    <ul>
        <p>動画本数 : {{ $fi }}本</p>
    </ul>
    <ul>
        <p>1動画あたりの</bn>動画再生回数 : {{ $hu }}</p>
    </ul>

@endsection

