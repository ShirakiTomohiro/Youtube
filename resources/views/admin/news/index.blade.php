@extends('layouts.admin')
@section('title','My動画')
@section('content')

<div class="container">
    <div class="row">
      <h2>Youtube解析ツール</h2>
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
    <table class="table table-light">
     <tbody>
      @foreach($posts as $news)
      <tr>
       <th>{{ $news->rank }}</th>
       <td><img src=$news></td>
       <td>{{ $news->title }}</td>
       <td>{{ $news->regist_num }}</td>
       <td>{{ $news->views_num }}</td>
       <td>{{ $news->video_num }}</td>
       <td><a href="{{ $news -> channel_url }}" role="button"
                                     class="btn btn-primary">Youtubeへ</a></td>
      
      </tr>
      @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </div>
 
 
   
 </div>
</div>
<ul class="pagination justify-content-center"> {{ $posts->links() }}</ul>
@endsection