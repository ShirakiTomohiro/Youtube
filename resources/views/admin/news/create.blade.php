@extends('layouts.admin')

@section('title', '動画投稿')

@section('content')

<div class= "container">
    <div class = "row">
        <div class="col-md-8 mx-auto">
            <h2>動画投稿画面</h2>
            <form action ="{{ action('Admin\YoutubeController@create') }}"
            method="post" enctype="multipart/form-data">
                
                @if (count($errors) > 0)
                  <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                  </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="coment">コメント</label>
                    <div class="col-md-10">
                        <textarea class="form-control" 
                        name="coment" rows="20">{{ old('coment') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">動画</label>
                   <div class="col-md-10">
                       
                   </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </form>
        </div> 
    </div>
</div>
@endsection