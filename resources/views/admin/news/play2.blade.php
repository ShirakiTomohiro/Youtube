@extends('layouts.admin')
@section('title','Youtubeanalysis')
@section('content')
<div class="container">
    <div class="row">
        <h2>投稿一覧</h2>
    </div>
    <div class="row">
        <div class="list-news col-md-12 mx-auto">
            <div class="row">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="20%">タイトル</th>
                            <th width="20%">画像</th>
                            <th width="50%">コメント</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $news)
                        <tr>
                            <th>{{ $news->user_id }}</th>
                            <td>{{ str_limit($news->title, 30) }}</td>
                            <td><img src="{{ $news->image }}"></td>
                            <td>{{ str_limit($news->body, 250) }}</td>
                            <td>
                                <div>
                                    <a href="{{ action('Admin\YoutubeController@edit',['user_id' => $news->user_id])  }}" role="button" class="btn btn-primary">編集</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
