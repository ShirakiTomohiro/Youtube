@extends('layouts.form')
@section('title','My動画')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="{{ action('Admin\YoutubeController@videos') }}"
            method = "post" enctype="mutipart/form-data">
                @if (count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                          <li>{{ $e }}</li>
                       @endforeach
                   </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-5" for="cond_title">https://www.youtube.com/channel/</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="cond_title" value="{{ old('cond_title') }}">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="解析">
            </form>
        </div>
    </div>
</div>


@endsection
