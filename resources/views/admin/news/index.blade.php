@extends('layouts.admin')
@section('title','チャンネル登録者数ランキング')

@section('content')

<ul> 
<div class=channel-list>
 <p class="rank">1</p>
 <p class="thumbnail"><img 
 data-echo="https://yt3.ggpht.com/a/AGF-l7-iP9dkqSTTt-ctYjsyxRckbFoJ0IeLwIkO4w=s288-mo-c-c0xffffffff-rj-k-no"alt
 ="はじめしゃちょー（hajime）"></p>
 <li>
     
     <a href = "{{ action('Admin\YoutubeController@playlists') }}" role="button" class= "title">はじめしゃちょー</a>
     
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>804万6918人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生回数">play_circle_filled</i><span>63億9623万1833回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1945本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">2</p>
        <p class="thumbnail"><img
        data-echo="https://yt3.ggpht.com/a-/AAuE7mAXMUlOXH07eDZjrg65k8HXZbSenTIMT-lN-Q=s88-mo-c-c0xffffffff-rj-k-no"
        alt="HikakinTV"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@videos') }}" role="button" class= "title">HikakinTV</a>
    
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>750万7080人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>60億7222万7630回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>2615本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
     <p class="rank">3</p>
         <p class="thumbnail"><img 
         data-echo="https://yt3.ggpht.com/a-/AAuE7mDm2vdAu-dPh8IPiMm9g8rz5AXb_fc4lWUCqw=s88-mo-c-c0xffffffff-rj-k-no"
         alt="Fischer's-フィッシャーズ"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@play2') }}" role="button" class=title>Fischer's-フィッシャーズ</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>563万460人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>72億3204万9858回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1858本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
     <p class="rank">4</p>
         <p class="thumbnail"><img
         data-echo="https://yt3.ggpht.com/a-/AAuE7mAeKLjwKNZplt7YJd-MkAi7OqH-tZEXa-QlsA=s88-mo-c-c0xffffffff-rj-k-no"
         alt="Yuka Kinoshita木下ゆうか"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@play3') }}" role="button" class=title>Yuka Kinoshita木下ゆうか</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>528万6115人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>18億5846万8525回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1715本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
      <p class="rank">5</p>
          <p class="thumbnail"><img
          data-echo="https://yt3.ggpht.com/a-/AAuE7mDA5aOcyiWQwS1k37_ubyrvmoh1iyF7qcF8HQ=s88-mo-c-c0xffffffff-rj-k-no"
          alt="avex"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play4') }}" role="button" class=title>avex</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>479万3176人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>73億5199万4489回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1万4137本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
      <p class="rank">6</p>
          <p class="thumbnail"><img
          data-echo="https://yt3.ggpht.com/a-/AAuE7mCs3Nd7Y4LEKXOsl0MKC21BPJHzMT7YSyrXpQ=s88-mo-c-c0xffffffff-rj-k-no"
          alt="東海オンエア"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play5') }}" role="button" class="title">東海オンエア</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>461万4087</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>42億6299万715回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1349本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
      <p class="rank">7</p>
          <p class="thumbnail"><img
          data-echo="https://yt3.ggpht.com/a-/AAuE7mD9rLoqAxaLmwd4P9x6R8na_a22qpBBIdCb-Q=s88-mo-c-c0xffffffff-rj-k-no"
          alt="HikakinGames"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@play6') }}" role="button" class="title">HikakinGames</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>427万1618人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>40億3244万3219回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1424本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
              
      <p class="rank">8</p>
          <p class="thumbnail"><img
          data-echo="https://yt3.ggpht.com/a-/AAuE7mDoGht-yfgjaWfejuKN5Rxgl_tK3SSGkQXNSw=s88-mo-c-c0xffffffff-rj-k-no"
          alt="SUSHI RAMEN【Riku】"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@play7') }}" role="button" class="title">SUSHI RAMEN【Riku】</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>416万5517人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>8億2895万9747回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>409本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
      <p class="rank">9</p>
          <p class="thumbnail"><img
          data-echo="https://yt3.ggpht.com/a-/AAuE7mDV16ZyHsnz7yI2QOsN6rYJUOJPitenCcD0WA=s88-mo-c-c0xffffffff-rj-k-no"
          alt="水溜りボンド"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play8') }}" role="button" class="title">水溜りボンド</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>402万109人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>26億1283万6565回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1698本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">10</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mCBpXK7Xz6ruDOxqKJP0AaGEAWfQcbytW6sLQ=s88-mo-c-c0xffffffff-rj-k-no"
    alt="JunsKitchen"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play9') }}" role="button" class="title">JunsKitchen</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>400万4人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>2億2536万398回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>26本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">11</p>
    <p class="thumbnail"><img 
    data-echo="https://yt3.ggpht.com/a/AGF-l78Si05g-ZchozyBiJkjczWHDfq0NLOb5r5dLg=s176-c-k-c0x00ffffff-no-rj"
    alt="米津玄師"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play10') }}" role="button" class="title">米津玄師</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>393万6721人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>19億9300万3769回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>51本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">12</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mBeDuRwJB_c8kCZ3cUPXeXcwLhN2RwvkF2yKA=s88-mo-c-c0xffffffff-rj-k-no"
    alt="AAAjoken toys"></p>
 <li>
     <p class="title">AAAjoken toys</p>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>387万6174人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>42億3548万1999回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1903本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">13</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mCaXsMZ_TNwvr42w9Xfqhzdo5vbdfHyGbbA3Q=s88-mo-c-c0xffffffff-rj-k-no"
    alt="Travel Thirsty"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@play12') }}" role="button" class="title">Travel Thirsty</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>379万8986人</span>
         </p>
        <p>
            <i class="material-icons" title="動画再生数">play_circle_filled</i><span>13億8744万6056回</span>
        </p>
        <p>
            <i class="material-icons" title="動画本数">videocam</i><span>454本</span>
        </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">14</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mC-G6ORK8BCtl8qmo7PXUWK_s7C0WNFSLdABQ=s88-mo-c-c0xffffffff-rj-k-no"
    alt="SeikinTV"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play13') }}" role="button" class="title">SeikinTV</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>361万2301人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>28億9264万8153回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1652本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">15</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mCjd6IEkf5zHGu9u8PcPUalKNE-x4uQqf-vzg=s88-mo-c-c0xffffffff-rj-k-no"
    alt="UNIVERSAL MUSIC JAPAN"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play14') }}" role="button" class="title">UNIVERSAL MUSIC JAPAN</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>349万5895人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>22億2413万165回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>6188本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">16</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mBOMJ0mDRkQ0dFvD-LIZoIZ2mojt6uKUgtPIQ=s88-mo-c-c0xffffffff-rj-k-no"
    alt="タキロン Takilong Kids' Toys"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play15') }}" role="button" class="title">タキロン Takilong Kids' Toys</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>343万7688人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>13億7720万5046回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>2155本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">17</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mDLzL0VZPZtwQ0CpOyauqqw5kZAjJ3oz05Gtw=s88-mo-c-c0xffffffff-rj-k-no"
    alt="ヒカル（Hikaru）"></p>
 <li>
     <a href ="{{ action('Admin\YoutubeController@play16') }}" role="button" class="title">ヒカル（Hikaru）</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>329万6686人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>20億4597万7485回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1078本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">18</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mD0nsyDTm1mOewuFudlulBsJw1lDkHxC6t_-g=s88-mo-c-c0xffffffff-rj-k-no"   
    alt="Miniature Space"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@play17') }}" role="button" class="title">Miniature Space</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>308万5365人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>4億8217万8506回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>336本</span>
         </p>
     </aside>
 </li>
</div>
<div class=channel-list>
    <p class="rank">19</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mCb8-0UYZbXzJt2EN2v9Vvsz-t5cae24ywCkg=s88-mo-c-c0xffffffff-rj-k-no"    
    alt="MosoGourmet 妄想グルメ"></p>
<li>
    <a href = "{{ action('Admin\YoutubeController@play18') }}" role="button" class="title">MosoGourmet 妄想グルメ</a>
    <aside>
        <p>
            <i class="material-icons" title="チャンネル登録者数">people</i>
            <span>279万3047人</span>
        </p>
        <p>
            <i class="material-icons" title="動画再生数">play_circle_filled</i><span>14億1440万141回</span>
        </p>
        <p>
            <i class="material-icons" title="動画本数">videocam</i><span>1441本</span>
        </p>
    </aside>
</li>
</div>
<div class=channel-list>
    <p class="rank">20</p>
    <p class="thumbnail"><img
    data-echo="https://yt3.ggpht.com/a-/AAuE7mBMQpLboc9GsWljpo40Q-pviWtVHg2Ju5rZBg=s88-mo-c-c0xffffffff-rj-k-no"
    alt="Kan & Aki's CHANNELかんあきチャンネル"></p>
 <li>
     <a href = "{{ action('Admin\YoutubeController@play19') }}" role="button" class="title">Kan & Aki's CHANNELかんあきチャンネル</a>
     <aside>
         <p>
             <i class="material-icons" title="チャンネル登録者数">people</i>
             <span>274万1033人</span>
         </p>
         <p>
             <i class="material-icons" title="動画再生数">play_circle_filled</i><span>58億7655万5943回</span>
         </p>
         <p>
             <i class="material-icons" title="動画本数">videocam</i><span>1222本</span>
         </p>
     </aside>
 </li>
</div>
</ul>


 
 
 
 

@endsection