@extends('layouts.admin')
@section('title','Youtubeanalysis')
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
            $title = ($item['snippet']['title']);
            $img = ($item['snippet']['thumbnails']['medium']); // 画像情報 (default, medium, highの順で画像が大きくなります)
           
?>
<?php }?>
    <?php } ?>
 <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投稿する</h2>
                <form action="{{ action('Admin\YoutubeController@info_create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-10" for="body">{{ $user_name }}</label>
                        <input type="hidden" name="user_name" class="user" value="{{ $user_name }}"/>
                        
                        <label class="col-md-2" for="body"></label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <ul>
                             <p><img src="<?php eh($img['url']) ?>" name="image"></p>
                             <p><?php eh($title)?></p>
                        </ul>
                        <input type="hidden" name="title" class="title" value="{{ eh($title) }}"/>
                        <input type="hidden" name="image" value="{{ eh($img['url']) }}"/>
                          <!--<input type="file" name="image" />-->
                    </div>
                    {{ csrf_field() }}
                    <div class="btn-container" style="text-align: right;">
                        <input type="submit" class="btn btn-primary" value="送信">
                    </div>
                    
                </form>
            </div>
        </div>
  </div>  
                      
                    


@endsection