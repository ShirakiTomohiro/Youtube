@extends('layouts.admin')
@section('title','Youtubeanalysis')
@section('content')

<div class="container">
    <div class="row">
      <h2>Youtuberチャンネル登録者数ランキング</h2>
    </div> 

 <div class="row">
  <div class="col-md-8">
   <form action="{{ action('Admin\YoutubeController@getData') }}" method="get">
    <div class="form-group row">
     <label class="col-md-2">チャンネル名</label>
     <div class="col-md-8">
      <input type="text" class="form-control" name="channel_title" value= "{{ $channel_title }}">
     </div>
     <div class="col-me-2">
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="検索">
     </div>
    </div>
   </form>
  </div>
 </div>
 <div class="row">
  <div class="list-news col-md-12 mx-auto">
   <div class="row">
      @foreach($posts as $news)
　　　<ul class="channel-list">
　　　 <li>
       <p>{{ $news->rank }}</p>
       <p><img src=$news></p>
      
       <p>{{ $news->title }}</p>
       <p>{{ $news->regist_num }}</p>
       <p>{{ $news->views_num }}</p>
       <p>{{ $news->video_num }}</p>
       <p><a href="{{ action('Admin\YoutubeController@playlists', ['channelId' => $news->channelId]) }}" role="button"
                                     class="btn btn-primary">動画一覧</a></p>
       </li>
      </ul>
      @endforeach
   </div>
  </div>
 </div>
 
 
   
 </div>

<ul class="pagination justify-content-center"> {{ $posts->links() }}</ul>
@endsection