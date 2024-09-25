@extends('sites::layouts.master')

@section('meta')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <!-- <meta name="keywords" content="@lang('技能実習生, 研修生, 外国人研修生, 送り出し機関, 外国人雇用, 日本語, インドネシア, 技能支援, 日本語教育, 管理体制, 文化研修, about')"> -->
    <meta name="description" content="@lang('インドネシアから技能実習生の送り出しを行い、日本の受け入れ機関とコミュニケーションを密に行い、日本企業の外国人雇用・外国人研修生の受け入れを実現しています。')">
    <meta property="og:title" content="@lang('外国人研修生送り出し | LPKツバメ日本語研修センター')">
    <meta property="og:description" content="@lang('インドネシアから技能実習生の送り出しを行い、日本の受け入れ機関とコミュニケーションを密に行い、日本企業の外国人雇用・外国人研修生の受け入れを実現しています。')">
    <meta property="og:image" content="{{ asset('common/img/logo_tsubame-jltc.gif') }}">
    <meta property="og:type"  content ="@lang('ウェブサイト')">
    <meta property="og:url" content = "@lang('https://www.tsubame-jltc.com/about')">
    <title>@lang('外国人研修生送り出し | LPKツバメ日本語研修センター')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href= "@lang('https://www.tsubame-jltc.com/about')" />
@endsection

@section('content')
<div class="row mx-0">
    <div class="col-sm-12 px-0">
        <div class="container">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="/">@lang('ホーム')</a></li>
                <li class="breadcrumb-item">@lang('ツバメについて')</li>
            </ol>
            <div class="page-title">
                <h1 class="title">@lang('ツバメについて')</h1>
                <p class="subtitle">@lang('ツバメについて')</p>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0">
    <div class="col-sm-12 px-0">
      <div class="container">
          <p class="text-center">@lang('日本人が経営するツバメは。') <br>
            @lang('日本の現場のニーズを的確にとらえ、問題点を迅速に解決していきます。')</p>
      </div>
    </div>
</div>

<div class="row mx-0">
    <div class="col-sm-12 px-0">
        <div class="lead-black mb-3">
            <h3>@lang('ツバメの理念')</h3>
        </div>
    </div>
</div>

<div class="row mx-0">
    <div class="col-sm-12 px-0">
      <div class="container pb-4">
          <p class="text-center">@lang('インドネシアの志ある若い学生達が真に自立する為の「日本語教育」と「技能支援」を実施し')
              <br> @lang('インドネシア共和国、日本国、両国の社会の発展に貢献すること。')</p>
              <p class="text-center">
                  @lang('インドネシアは今まさに発展中の非常に勢いのある国です。')<br>
                  @lang('優秀な若者たちが先進国、日本で様々な技能や知識を取得し')<br>
                  @lang('インドネシアのより良い未来に貢献できるよう日々奮闘しています。')<br>
                  @lang('志ある若い学生達は国の宝です。')<br>
                  @lang('その志を実現できるよう全力で支援していくことが当校の使命です。')
              </p>
      </div>
      
    </div>
</div>

<div class="row mx-0 bg-light">
    <div class="col-sm-12 px-0">
        <div class="lead-black mb-3">
            <h2>@lang('ツバメの強み')</h2>
        </div>
    </div>
    <div class="col-sm-12 px-0">
      <div class="container">
        <div class="row mx-0">
          <div class="col-md-8 advantages-list-container">
              <div class="row mx-0">
                  <div class="col-md-6 px-0 relative">
                      <div style="width:250px" class="p-3 circle-item">
                            <div class="circular-box">
                                    <h3 class="left">01</h3>
                                    <div class="text-circular-box">
                                        <h5>@lang('日本人の駐在責任者の配属')</h5>
                                    </div>
                                </div>
                      </div>
                    
                  </div>
                  <div class="col-md-6 px-0">
                      <p class="fr pt50 w290">@lang('日本の受け入れ機関の方々と正確なコミュニケーションを取り、ニーズに合うように計画的に物事を進めていきます。')<br>@lang('問題は未然に防ぐ、を心がけ、問題が発生した場合も迅速に対処していきます。')</p>
                  </div>
              </div>
              <div class="row mx-0">
                  <div class="col-md-6 order-2 order-sm-1 px-0">
                      <p class="fr pt50 w290">@lang('送り出し機関の日本窓口を開設し、受入れ機関、企業様に安心して頂ける管理体制を構築しています。')</p>
                  </div>
                  <div class="col-md-6 order-1 order-sm-2 px-0">
                      <div style="width:250px" class="p-3  circle-item">
                            <div class="circular-box">
                                    <h3 class="right">02</h3>
                                    <div class="text-circular-box">
                                        <h5>@lang('日本事務所の開設')</h5>
                                    </div>
                                </div>
                      </div>
                  </div>
              </div>
              <div class="row mx-0">
                  <div class="col-md-6 px-0">
                    <div style="width:250px" class="p-3  circle-item">
                            <div class="circular-box">
                                    <h3 class="left">03</h3>
                                    <div class="text-circular-box">
                                        <h5>@lang('日本人教師の配属')</h5>
                                    </div>
                                </div>
                      </div>
                  </div>
                  <div class="col-md-6 px-0">
                      <p class="fr pt50 w290">@lang('インドネシア人日本語教師に対する研修、授業カリキュラムの作成、見直しを日本人教師が行い、教育の質の向上に努めています。')</p>
                  </div>
              </div>
              <div class="row mx-0">
                  <div class="col-md-6 order-2 order-sm-1 px-0">
                      <p class="fr pt50 w290">@lang('日本語教育はもとより、生活、文化研修、規律、団体行動研修、運動、体力づくりにも力を入れています。')</p>
                  </div>
                  <div class="col-md-6 order-1 order-sm-2 px-0">
                      <div style="width:250px" class="p-3  circle-item">
                            <div class="circular-box">
                                    <h3 class="right">04</h3>
                                    <div class="text-circular-box">
                                        <h5>@lang('テスト・トレーニングセンターの活用')</h5>
                                    </div>
                                </div>
                      </div>
                  </div>
              </div>
              <div class="row mx-0">
                  <div class="col-md-6 px-0">
                    <div style="width:250px" class="p-3  circle-item">
                            <div class="circular-box">
                                    <h3 class="left">05</h3>
                                    <div class="text-circular-box">
                                        <h5>@lang('豊富な人材')</h5>
                                    </div>
                                </div>
                      </div>
                  </div>
                  <div class="col-md-6 px-0">
                      <p class="fr pt50 w290">@lang('本校の周囲には現地学校が複数あり、日本で仕事に挑戦したという若い学生達が沢山います。')</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4 img-advantges-list">
              <ul class="listNormal">
                  <li><img class="img-fluid lazyload" data-src="{{ asset('_img/img_advantage_01.jpg') }}" alt="@lang('LPK ツバメ日本語研修センター')"></li>
                  <li><img data-src="{{ asset('_img/img_advantage_02.jpg') }}" alt="@lang('LPK ツバメ日本語研修センター')" class="img-fluid lazyload"></li>
                  <li><img data-src="{{ asset('_img/img_advantage_03.jpg') }}" alt="@lang('LPK ツバメ日本語研修センター')" class="img-fluid lazyload"></li>
                  <li><img data-src="{{ asset('_img/img_advantage_04.jpg') }}" alt="@lang('LPK ツバメ日本語研修センター')" class="img-fluid lazyload"></li>
                  <li><img data-src="{{ asset('_img/img_advantage_05.jpg') }}" alt="@lang('LPK ツバメ日本語研修センター')" class="img-fluid lazyload"></li>
                  <li><img data-src="{{ asset('_img/img_advantage_06.jpg') }}" alt="@lang('LPK ツバメ日本語研修センター')" class="img-fluid lazyload"></li>
                  </ul>
          </div>
        </div>
        
      </div>
    </div>
</div>
<div class="advantages-footer-container">
<div class="row mx-0">
    <div class="col-sm-12">
        <div class="w-100 text-center">
            <img data-src="@lang('/img/img_advantage_07.jpg')" alt="@lang('ツバメの循環型人材活用')" class="img-fluid lazyload">
        </div>
    </div>
  </div>
</div>
      
@stop
