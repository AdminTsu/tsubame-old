@extends('sites::layouts.master')

@section('styles')
@parent
@stop

@section('meta')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <!-- <meta name="keywords" content="@lang('技能実習生, 研修生, 外国人研修生, 送り出し機関, 外国人雇用, 日本語, インドネシア, 日本語研修, 人コンサルティング事業, profil')"> -->
    <meta name="description" content="@lang('外国人の技能実習生送り出し事業を中心に、インドネシアでの日本語研修や人材コンサルティング事業などを展開しています。日本の現場のニーズを的確にとらえ、実習生と受け入企業の最良なマッチングを実現しております。')">
    <meta property="og:title" content="@lang('インドネシア人技能実習生送り出し | LPKツバメ日本語研修センター')">
    <meta property="og:description" content="@lang('外国人の技能実習生送り出し事業を中心に、インドネシアでの日本語研修や人材コンサルティング事業などを展開しています。日本の現場のニーズを的確にとらえ、実習生と受け入企業の最良なマッチングを実現しております。')">
    <meta property="og:image" content="{{ asset('common/img/logo_tsubame-jltc.gif') }}">
    <meta property="og:type"  content ="@lang('ウェブサイト')">
    <meta property="og:url" content = "@lang('https://www.tsubame-jltc.com/overview')">
    <title>@lang('インドネシア人技能実習生送り出し | LPKツバメ日本語研修センター')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href= "@lang('https://www.tsubame-jltc.com/overview')" />   
@endsection
@section('content')
    <div class="row mx-0">
        <div class="col-sm-12 px-0">
                <div class="container">
                    <ol class="breadcrumb mt-2">
                        <li class="breadcrumb-item"><a href="/">@lang('ホーム')</a></li>
                        <li class="breadcrumb-item">@lang('会社概要')</li>
                    </ol>
                    <div class="page-title">
                        <h1 class="title">@lang('会社概要')</h1>
                        <p class="subtitle">{{__("会社概要")}}</p>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="row mx-0">
        <div class="col-sm-12 px-0">
            <div class="container overview-content-container">
                    <div class="lead-red mb-3">
                            <h3>{{__("ごあいさつ")}}</h3>
                        </div>
                        <p>{{__("この度は、ツバメ日本語研修センターのホームページを閲覧いただき誠にありがとうございます。当校は古くから友好関係の深い日本にインドネシア人の実習生を紹介させて頂いております。またインドネシア国内においては帰国した実習生への企業紹介など、総合的な人材サービスを展開しております。")}}</p>
                        <p>{{__("当校は首都ジャカルタより約19kmの西ジャワ州ブカシ県南ブカシという場所にあります。")}}</p>
                        <br>
                        <p class="fontRed fontBold">
                                {{ __("日本はインドネシアにとって主要な経済援助国であります。そのような経緯もありインドネシアの国民は日本に対して尊敬とあこがれを抱いており、日本の技能を学び、 帰国後、それらを活かして活躍したいと思う若い学生が沢山います。我々は日本語学校と送り出し機関を一括して運営することで生徒一人一人の学力から性格まで細かな情報を把握し、実習現場で自信をもって働ける実習生の育成を行っております。また、日本人が経営する学校であるが故に、日本の現場のニーズを的確にとらえ 実習生と受け入企業の最良なマッチングを実現しております。") }}
                        </p>
                        <p>
                                {{ __("日本国とインドネシア共和国の発展に貢献すべく最大限の努力をして参りますので 今後ともご支援頂きますようお願い申し上げます。") }}
                        </p>
                        <div class="text-right">
                                <div>
                                    {{ __("LPK ツバメ日本語研修センター 学校長") }}
                                </div>
                                <div class="owner-name pb-4" style='font-size:1.5rem; font-weight:bold; font-family:"Yu Mincho"'>
                                    {{ __("志賀亮平") }}
                                </div>
                        </div>
            </div>
                
        </div>
    </div>
    <div class="row mx-0 bg-light">
        <div class="col-sm-12 px-0">
            <div class="lead-red mb-3">
                <h2>{{__("会社情報")}}</h2>
            </div>
        </div>
    </div>
    <div class="row mx-0">
            <div class="col-sm-12 px-0">
            <div class="container">
                <style>
                    .th-w-100 {
                            min-width: 100px;
                    }
                    .break-word {
                        word-break: break-word;
                    }
                </style>
                    <table class="table table-responsive table-resp-settings" style="padding-top:30px" summary="会社概要">
                            <?php /* <tr>
                            <th class="th-w-100">{{__("会社名")}}</th>
                            <td class="break-word">PT. MAEKAWA MANDIRI INTERNASIONAL</td>
                            </tr> */ ?>
                            <tr>
                            <th class="th-w-100">@lang("学校名")<br><span class="text-secondary">{{__("英名")}}</span></th>
                            <td class="break-word">@lang("LPK ツバメ日本語研修センター")<br><span class="text-secondary">LPK TSUBAME JAPANESE LANGUAGE TRAINING CENTER</span></td>
                            </tr>
                            <tr>
                            <th class="th-w-100">@lang("所在地")</th>
                            <td class="break-word">
                                <dl class="listAddress">
                                <dt class="fontRed">@lang('インドネシア本校')</dt>
                                <dd>
                                    <ul class="listNormal">
                            <li>Grand Galaxy City RSA 3 No. 25-27, Kelurahan Pekayon Jaya, Kecamatan Bekasi Selatan, Kota Bekasi, Provinsi Jawa Barat, Indonesia, 17147</li>
                                    <li></li>
                                    <li class="mb0">TEL：(021) 82738730</li>
                                    </ul>
                                </dd>
                                <dt class="fontRed">@lang("日本駐在所")</dt>
                                <dd>
                                    <ul class="listNormal">
                                    <li> @lang('住所: 〒666-0025・兵庫県川西市加茂3丁目15-9 2F')</li>
                                    <li class="mb0">TEL: 072-744-5178</li>
                                    <li>FAX: 072-744-5179</li>
                                    </ul>
                                </dd>
                                </dl>
                            </td>
                            </tr>
                            <tr>
                            <th class="th-w-100">@lang("許可")</th>
                            <td class="break-word">
                                <ul class="listNormal">
                                <!-- <li>@lang('労働省許可番号') &hellip; @lang('560/KEP.1100/Disnaker.Latker号')</li>
                                <li>@lang('海外派遣許可') &hellip;&hellip; @lang('271/LATTAS/VIII/2018号')</li> -->

                                <li>@lang('企業登録番号(NIB)')  &hellip;  0220207762433 </li>
                                <li> @lang('労働省許可番号(海外派遣許可)')    </li>
                                <li>@lang('ブカシ県労働省許可') &hellip; @lang('569/06 – DPMPTSP.PPJU 号') </li>
                                <li>@lang('西ジャワ州労働省許可')    &hellip;  @lang('562.3/3/Ⅲ/ESDA 号')</li>
                                <li> @lang('ジャカルタ特別州労働省許可')   &hellip; @lang('2/632/HK.13/VIII/2020 号')</li>
                                </ul>
                            </td>
                            </tr>
                            <tr>
                            <th class="th-w-100">@lang('事業内容')</th>
                            <td class="break-word">
                                <ul class="listNormal">
                                <li>@lang('外国人技能実習生送り出し事業')</li>
                                <li>@lang('インドネシア国内における人材派遣、紹介事業')</li>
                                <li>@lang('インドネシア国内における人材コンサルティング事業')</li>
                                </ul>
                            </td>
                            </tr>
                            <tr>
                            <th class="th-w-100">@lang('問い合わせメール')</th>
                            <td class="break-word">@lang('日本駐在所担当者Eメールアドレス') <a href="mailto:info@tsubame-jltc.com">info@tsubame-jltc.com</a></td>
                            </tr>
                            <tr>
                            <th class="th-w-100">@lang('ホームページ')</th>
                            <td class="break-word"><a href="../">tsubame-jltc.com</a></td>
                            </tr>
                            </table>
                            <!-- // "ブカシ県労働省許可":"569/06 – DPMPTSP.PPJU",
  // "西ジャワ州労働省許可":"562.3/3/III/ESDA",
  // "ジャカルタ特別州労働省許可":"2/632/HK.13/VIII/2020",

  // "569/06 – DPMPTSP.PPJU 号":"Izin Pemberangkatan ke Luar Negeri",
  // "562.3/3/Ⅲ/ESDA 号":"Izin Pemberangkatan ke Luar Negeri",
  // "2/632/HK.13/VIII/2020 号":"Izin Pemberangkatan ke Luar Negeri" -->
            </div>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-sm-12 px-0">
            <div class="container">
                    <div class="lead-red mb-3">
                            <h3>@lang('本社アクセス')</h3>
                        </div>
                    <div class="w-160">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.910351455766!2d107.148128!3d-6.299482!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4dec5c01d1b6ceb!2sLPK+TSUBAME+JLTC!5e0!3m2!1sja!2sjp!4v1482291588232" style="width:100%; height:400px" frameborder="0" allowfullscreen></iframe>
                    </div>
        
            </div>
        </div>
        <div class="container">

        </div>
        
    </div>
    <div class="container">
            <div class="row mx-0 pt-4">
                    <div class="col-sm-6 px-0">
                        <h4 class="fontRed">@lang('インドネシア本校')</h4>
                        <dl>
                            <dd>Grand Galaxy City RSA 3 No. 25-27, Kelurahan Pekayon Jaya, Kecamatan Bekasi Selatan, Kota Bekasi, Provinsi Jawa Barat, Indonesia, 17147</dd>
                            <dd>TEL：+62 857-7046-0065</dd>
                            <dd>FAX：+62 21 2908 3775</dd>
                        </dl>
                    </div>
                    <div class="col-sm-6 px-0">
                        <div class="pl-4 overview-custom-img">
                            <picture>
                                <source srcset="{{ asset('_img/webp/img_access_01.webp') }}">
                                <img data-src="{{ asset('_img/img_access_01.jpg') }}" alt="@lang('LPK ツバメ日本語研修センター インドネシア本校')" class="img-fluid lazyload">
                            </picture>
                        </div>
                    </div>
                </div>
    </div>
    
    
</div>
@stop
