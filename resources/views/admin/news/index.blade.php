@extends('layouts.admin')
@section('title','My動画')
@section('content')

<ul class="channel-list">
                            @foreach($posts as $news)
                               
                                    
                                    <p>{{ $news->rank }}</p>
                                    
                                     <ul> <img src=$news></ul>
                                    
                                    <div>
                                    <ul class =title>{{ $news->title }}</ul>
                                    <aside>
                                    
                                    <ul>{{ $news->regist_num }}</ul>
                                    <ul>{{ $news->views_num }}</ul>
                                    <ul>{{ $news->video_num }}</ul>
                                    </aside>
                                   <div>
                            @endforeach
</ul>


{{ $posts->links() }}
@endsection