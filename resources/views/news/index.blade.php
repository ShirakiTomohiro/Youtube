@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="user_name">
                                    {{ $post->user_name }}
                                </div>
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ str_limit($post->title, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->body, 1500) }}
                                </div>
                                <div class="like">
                                    @if ($movie2->likes()->where('user_id', Auth::user()->id))
                                    <a href="{{ action('LikesController@destroy', ['id' => $movie2->id]) }}" class="btn btn-primary">いいねを解除する</a>
                                    @else
                                    <a href="{{ action('LikesController@store', ['id' => $movie2->id]) }}" class="btn btn-primary">いいねする</a>
                                    @endif
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image)
                                    <img src="{{ $post->image }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection