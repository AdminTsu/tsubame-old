@extends('sites::layouts.master')

@section('meta')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
   <!--  <meta name="keywords" content="@lang('技能実習生, 研修生, 外国人研修生, 送り出し機関, 外国人雇用, 日本語, インドネシア, 技能実習, 伝統的文化, indonesia')"> -->
    <meta name="description" content="@lang('インドネシアは親日国として知られ、素直でとても情が厚い国民性は、日本での技能実習現場でも活躍が非常に期待されます。')">
    <meta property="og:title" content="@lang('インドネシアの特色 | LPKツバメ日本語研修センター')">
    <meta property="og:description" content="@lang('インドネシアは親日国として知られ、素直でとても情が厚い国民性は、日本での技能実習現場でも活躍が非常に期待されます。')">
    <meta property="og:image" content="{{ asset('common/img/logo_tsubame-jltc.gif') }}">
    <meta property="og:type"  content ="@lang('ウェブサイト')">
    <meta property="og:url" content = "@lang('https://www.tsubame-jltc.com/indonesia')">
    <title>@lang('インドネシアの特色 | LPKツバメ日本語研修センター')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="canonical" href= "@lang('https://www.tsubame-jltc.com/indonesia')" />
@endsection

@section('content')

<div class="row mx-0">
    <div class="col-sm-12 px-0">
      <div class="container">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="/">@lang('ホーム')</a></li>
            <li class="breadcrumb-item">@lang('インドネシアの特色')</li>
        </ol>
        <div class="page-title">
            <h1 class="title">@lang('インドネシアの特色')</h1>
            <p class="subtitle">@lang('インドネシアの特色')</p>
        </div>
      </div>
    </div>
</div>
<div class="row mx-0">
      <div class="col-12 px-0">
          <div class="lead-black mb-3">
              <h3>@lang('インドネシアの特徴')</h3>
          </div>
          <div class="container">
              <div class="row pb-4">
                  <div class="col-8 indonesia__news pos-2">
                      <p class="mb20">@lang('一般的に親日家と言われるインドネシア人は、明るく、素直でとても情が厚い国民性といえます。困っている人には親切であり、関わる人と直ぐに仲良くなる柔軟さ、優しさがあります。')</p>
                      <p class="mb20">@lang('イスラム教徒が約9割となり、1日5回お祈りをします。')<br>@lang('日本での技能実習現場では企業様により様々ですので、自宅内でのお祈りのみで対応するように説明・指導しています。')<br>@lang('食べ物は制約がありますが、実習生は自分たちで食事(弁当含め)を用意します。')</p>
                      <p>@lang('特に若者達は男女問わず、日本で学びたい、働きたいという希望者が多く、日本の伝統的文化、若者文化への関心も非常に高い傾向にあります。')</p>
                    </div>
                    <div class="col-4 indonesia__news pos-1">
                    <picture>
                        <source  media="(min-width: 487px)"   srcset="{{ asset('_img/webp/img_feature_01.webp') }}"  type="image/webp"> 
                        <source media="(max-width: 486px)"  srcset="{{ asset('_img/webp/img_feature_01-mobile.webp') }}"  type="image/webp"> 
                        <img class="img-fluid lazyload" data-src="{{asset('_img/img_feature_01.jpg')}}" alt="@lang('インドネシア')">
                    </picture>
                     
                    </div>
              </div>
          </div>
      </div>
</div>
<div class="row mx-0 bg-light">
    <div class="col-12 px-0">
        <div class="lead-black mb-3">
            <h3>@lang('インドネシアの教育事情')</h3>
        </div>
        <div class="container">
            <p class="mb30">@lang('インドネシアの教育体系は教育文化省が管轄する一般の学校(スコラ)と宗教省が管轄するイスラム系の学校(マドラサ)の2本立てになっています。いずれの場合も小学校、中学校、高校の6.3.3制であり、このうち小中学校の9年間は義務教育となっています。')</p>
            <div class="row pb-4 img-photo">
                <div class="col-sm-4">
                    <picture>
                        <source   srcset="{{ asset('_img/webp/img_education_01.webp') }}"  type="image/webp"> 
                        <img class="img-fluid lazyload"  src="{{asset('_img/img_education_01.jpg')}}" alt="@lang('研修生')">
                    </picture>    
                </div>
                <div class="col-sm-4">
                    <picture>
                        <source   srcset="{{ asset('_img/webp/img_education_02.webp') }}"  type="image/webp"> 
                        <img class="img-fluid lazyload" data-src="{{asset('_img/img_education_02.jpg')}}" alt="@lang('外国人研修生')">
                    </picture>     
                </div>
                <div class="col-sm-4">
                    <picture>
                        <source   srcset="{{ asset('_img/webp/img_education_03.webp') }}"  type="image/webp"> 
                        <img class="img-fluid lazyload" data-src="{{asset('_img/img_education_03.jpg')}}" alt="@lang('送り出し機関')">
                    </picture>  
                </div>
              </div>
        </div>
    </div>
</div>

<div class="row mx-0">
    <div class="col-12 px-0">
        <div class="lead-black mb-3">
            <h2>@lang('インドネシアの概要')</h2>
        </div>
        <div class="container">
            <table class="table table-hover table-special" summary="インドネシアの概要">
                <tr>
                <th>@lang('国名')</th>
                <td>@lang('インドネシア共和国 (英語名：The Republic of Indonesia)')<img data-src="{{ asset('/img/img_about_01.jpg') }}" alt="インドネシア国旗" width="48" height="32" class="icon ml15 ml-3 lazyload" id="idnflag"></td>
                </tr>
                <tr>
                <th>@lang('首都')</th>
                <td>@lang('ジャカルタ (人口：1017万人 2015年インドネシア政府統計)')</td>
                </tr>
                <tr>
                <th>@lang('地理')</th>
                <td>@lang('国土面積は約189平方キロメートル。日本の約5倍。')</td>
                </tr>
                <tr>
                <th>@lang('気候')</th>
                <td>@lang('インドネシアの年間平均気温は約25℃。季節は5月～10月の乾期、11月～4月の雨季があります。')<br>@lang('雨季は午後になるとスコールのような大雨が降り、湿度も高くなります。')</td>
                </tr>
                <tr>
                <th>@lang('人口')</th>
                <td>@lang('約2億5千500万人 (2015年 インドネシア政府統計)<br>民族は大半がマレー系 (ジャワ、スンダ等 約300種族)')</td>
                </tr>
                <tr>
                <th>@lang('言語')</th>
                <td>@lang('日常会話はインドネシア語を使用しています。')<br>
                    @lang('観光地のホテルやレストランでは、英語が通じます。簡単な日本語も通じるところがあります。')</td>
                </tr>
                <tr>
                <th>@lang('宗教')</th>
                <td>@lang('イスラム 約88%、キリスト教 約9%、ヒンドゥーと仏教 約1.8%　仏教0.6%')</td>
                </tr>
                <tr>
                <th>@lang('通貨')</th>
                <td>@lang('ルピア(IDR)')
                  <ul class="listDisc mt5 font12">
                  <li>@lang('硬貨 50ルピア、100ルピア、200ルピア、500ルピア、1,000ルピア硬貨の5種類。')</li>
                  <li>@lang('紙幣 1,000ルピア、2,000ルピア、5,000ルピア、10,000ルピア、20,000ルピア、50,000ルピア、100,000ルピアの7種類。')</li>
                  </ul>
                </td>
                </tr>
                </table>
        </div>
    </div>
</div>

@stop
