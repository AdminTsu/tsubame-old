@extends('sites::layouts.master')
@section('meta')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
   <!--  <meta name="keywords" content="@lang('技能実習生, 研修生, 外国人研修生, 送り出し機関, 外国人雇用, 日本語, インドネシア')"> -->
    <meta name="description" content="@lang('LPKツバメ日本語研修センターは、日本語教育・技能実習生への日本語研修、日本への送り出しを通じて、インドネシア・日本の両国の社会発展に貢献することを目指しております。外国人雇用やインドネシアでの日本語研修のニーズを的確にとらえ、問題点を迅速に解決してきました。')">
    <meta property="og:title" content="@lang('インドネシアの技能実習生派遣 | LPKツバメ日本語研修センター')">
    <meta property="og:description" content="@lang('LPKツバメ日本語研修センターは、日本語教育・技能実習生への日本語研修、日本への送り出しを通じて、インドネシア・日本の両国の社会発展に貢献することを目指しております。外国人雇用やインドネシアでの日本語研修のニーズを的確にとらえ、問題点を迅速に解決してきました。')">
    <meta property="og:image" content="{{ asset('common/img/logo_tsubame-jltc.gif') }}">
    <meta property="og:type"  content ="@lang('ウェブサイト')">
    <meta property="og:url" content = "@lang('https://www.tsubame-jltc.com/')">
    <title>@lang('インドネシアの技能実習生派遣 | LPKツバメ日本語研修センター')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href= "@lang('https://www.tsubame-jltc.com/')" />  
@endsection

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="container">
  <div class="row mx-0">
    <div class="col-sm-12 px-0">
        <div class="container">
          <ol class="breadcrumb mt-2">
              <li class="breadcrumb-item"><a href="/">@lang('ホーム')</a></li>
              <li class="breadcrumb-item">@lang('スタッフ紹介')</li>
          </ol>
          <div class="page-title">
              <h1 class="title">@lang('スタッフ紹介')</h1>
              <p class="subtitle">@lang('スタッフ紹介')</p>
          </div>
        </div>
    </div>
  </div>
  <!-- <div class="row mx-0 relative">
    <div class="col-12 px-0">
      <img src="{{asset("_img/lpk-logo-lg.jpg")}}" class="img-lpk-lg" alt=""/> 
      <div class="lead-black mb-3">
        <h3>@lang('サービス概要')</h3>
      </div>
    </div>
  </div> -->
  <div class="row mx-0">
    <div class="col-12 px-0">
      <div class="container">
        <div class="row mb-4">
          <div class="offset-3 col-6 offset-md-1 col-md-3">
            <img src="{{asset('_img/ryohei-pimpinan.jpg')}}" class="img-fluid mb-2" alt=""/>          
          </div>
          <div class="col-12 col-md-7">
              <p><span>@lang("名前")</span> : <strong> @lang("志賀　亮平")</strong></p>
              <p>@lang('ツバメ学校⻑及びマーケティング担当')</p>
              <p>@lang('略歴')</p>
              <ul>
                <li>@lang('LPKツバメ日本語研修センター 学校長就任')</li>
                <li>@lang('飲食店 立ち上げ及び運営')</li>
                <li>@lang('WaveEnergy株式会社 入社')</li>
                <li>@lang('富士大学卒業（経営法学科）')</li>
              </ul>
              <p>@lang('コメント')</p>
              <p>@lang('インドネシアは、両親の所得によって受けれる教育とゆうのが大きく変わってしまう教育格差のある国です。社会人になってからのキャリアにも大きく反映されます。本プログラムを通して日本の文化教育・日本語教育学校とゆう役割以上に実習生と寄り添い大きく変化する現代でどうキャリア形成していくかを一緒に考え、実習生のキャリアアップに貢献できる学校であることを目標に運営していきます。')</p>
              <p>@lang('また、受け入れ企業様には企業様の求める人材の最良なマッチングの提供と共に、企業様の発展に貢献できる人材を育てれる教育の定着・改善に尽力していきます。')</p>
          </div>
        </div>
        <hr class="mb-5 mt-0">
        <div class="row mb-4">
          <div class="offset-3 col-6 offset-md-1 col-md-3 text-center">
            <img src="{{asset('_img/tissa-pengawas.jpg')}}" class="img-fluid mb-2" alt=""/>
          </div>
          <div class="col-12 col-md-7">
              <p><span>@lang("名前")</span> : <strong>Tissa Mahadiani Maritza</strong></p>
              <p>@lang('ツバメ日本語教育担当及び同時通訳者')</p>
              <p>@lang('略歴')</p>
              <ul>
                <li>@lang('J L P TテストN１取得')</li>
                <li>@lang('静岡産業大学卒業（国際情報学科）')</li>
                <li>@lang('ダルマプルサダ大学卒業（日本語学科, GPA 3.80 (Cum Laude)）')</li>
              </ul>
              <p>@lang('現在、インドネシアの若者は海外で働くことに関心が高く、日本は関心のある国の１つです。一方、日本は若者層の労働者数が限られている状況です。')</p>
              <p>@lang('私たちLPKつばめ日本語研修センターは、未来をより良い方向に変える意欲の高い若者を対象に、日本語研修を教育・育成を提供することで、解決策となるよう努めています。')</p>
              <p>@lang('インドネシアの若者がプロの実習生になり、日本で働くことを受け入れ企業の期待に応えることができ、日本とインドネシアの協力を継続できるように願っています。')</p>
              <p>@lang('私たちが提供する教育は、日本に入国後に終了することではありません。日本滞在中、インドネシアに帰国後もサポートを提供し続けています。帰国後のキャリア支援・目標作成等、その生徒に合ったカウンセリングも実施していきます')</p>
          </div>
        </div>
        <hr class="mb-5 mt-0">
        <div class="row mb-4">
          <div class="offset-3 col-6 offset-md-1 col-md-3">
            <img src="{{asset('_img/ali-direktur.jpg')}}" class="img-fluid mb-2" alt=""/>          
          </div>
          <div class="col-12 col-md-7">

              <p><span>@lang("名前")</span> : <strong>Muhammad Ali Santoso</strong></p>
              <p>@lang('ツバメ代表取締役及び生徒募集担当')</p>
              <p>@lang('略歴')</p>
              <ul>
                <li>@lang('LP Kつばめ日本語研修センターの代表取締役社長に就任')</li>
                @if(App::isLocale('jp'))
                <li>@lang('L P Kつばめ日本語研修センター入社')</li>
                @endif
                <li>@lang('技能実習終了後（アイムジャパン）、LPK第一学校にて起業')</li>
              </ul>
              <p>@lang('コメント')</p>
              <p>@lang('インドネシアの文化の多様性、インドネシアの何百もの島々の異なる文化、その性質と習慣、これらの違いにより、私たちは日本の文化（生活の習慣）の理解しやすい環境ですが、基本的には文化から習慣を変えるには努力が必要です。')</p>
              <p>@lang('私は技能実習生として過ごした3年間の経験と10年に渡り職業訓練校の事業をやってきた経験から、実習生には的確にアドバイスをし問題解決していきます。')</p>
              <p>@lang('インドネシアの若者は礼儀正しく、友好的です。家族の経済がまだ非常に低いにもかかわらず、非常に勤勉で熱心です。生徒達は、日本で得たお金で家族に幸せにすること、起業や就職をしてステップアップする夢を持っているので私は彼らの力になるように尽力していきます。')</p>
          </div>
        </div>
        @if(App::isLocale('id'))
          <div class="row mb-4">
            <div class="col-12 text-center">
              <a href="https://chat.whatsapp.com/EbdKvwni43IJu76f5Uf3Dp" target="_blank">
                <img src="/_img/meeting-banner-id.jpg" class="img-fluid" alt="meeting">
              </a>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@stop

@section('scripts')

@parent

@endsection