@extends('sites::layouts.master')

@section('meta')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <!-- <meta name="keywords" content="@lang('技能実習生, 研修生, 外国人研修生, 送り出し機関, 外国人雇用, 日本語, インドネシア, 技術教育, 語学研修, program')"> -->
    <meta name="description" content="@lang('当校は、インドネシア政府の認定送り出し機関として、インドネシア人の若い学生を対象に語学研修、技術教育を優秀な教師陣の指導のもと実施いたします。')">
    <meta property="og:title" content="@lang('インドネシア政府認定送り出し機関 | LPKツバメ日本語研修センター')">
    <meta property="og:description" content="@lang('当校は、インドネシア政府の認定送り出し機関として、インドネシア人の若い学生を対象に語学研修、技術教育を優秀な教師陣の指導のもと実施いたします。')">
    <meta property="og:image" content="{{ asset('common/img/logo_tsubame-jltc.gif') }}">
    <meta property="og:type"  content ="@lang('ウェブサイト')">
    <meta property="og:url" content = "@lang('https://www.tsubame-jltc.com/program')">
    <title>@lang('インドネシア政府認定送り出し機関 | LPKツバメ日本語研修センター')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="canonical" href= "@lang('https://www.tsubame-jltc.com/program')" />
@endsection
@section('content')
<div class="row mx-0">
  <div class="col-sm-12 px-0">
    <div class="container">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="/">@lang('ホーム')</a></li>
            <li class="breadcrumb-item">@lang('技能実習生制度とは')</li>
        </ol>
        <div class="page-title">
          <h1 class="title">@lang('技能実習生制度とは')</h1>
          <p class="subtitle">@lang('技能実習生制度とは')</p>
        </div>
    </div>
  </div>
</div>

<div class="row mx-0 title-program-container">
    <div class="col-sm-12 px-0">
        <div class="lead-black mb-3">
            <h3>@lang('外国人技能実習生について')</h3>
        </div>
    </div>
</div>

<div class="row mx-0 content-program-container">
    <div class="col-sm-12 px-0">
      <div class="container">
          <p class="">@lang('ツバメ日本語研修センターは外国人技能実習制度に基づくインドネシア政府の認定送り出し機関として、インドネシアの若い学生(20-29歳)を対象に語学研修、技術教育を優秀な教師陣の指導のもと実施致します。')</p>
          <p>@lang('技能実習生を送り出すまでに、当校の教育施設にて少人数制の授業と研修を集中的に行い、来日時に成果を上げられるようなカリキュラムとなっております。当校の厳しい基準をクリアした人材のみを推薦、ご紹介させて頂きます。')</p>
          <p class="text-center"><a href="https://www.jitco.or.jp/system/seido_enkakuhaikei.html" target="_blank" class="bt02 w420"><span class="iconWindow">@lang('JITCO「外国人技能実習制度のあらまし」')</span></a></p>
      </div>
    </div>
</div>
<div class="row mx-0 bg-light title-program-container">
    <div class="col-sm-12 px-0">
      <div class="container">
          <div class="lead-black mb-3">
              <h3>@lang('外国人技能実習生について')</h3>
          </div>
      </div>
    </div>
    <div class="col-12">
      <div class="container content-program-container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
              <p>@lang('諸外国(発展途上国等)の若い学生を一定期間日本の産業界に受け入れて、進んだ技能、技術、知識等を修得してもらい、自国の経済発展、産業振興に貢献できる人材になるよう育成することが目的です。')</p>
              <p>@lang('技能実習生制度は我が国の国際協力・国際貢献の大変重要な一翼を担っています。')</p>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
             
              <picture>
                <source  srcset="{{ asset('_img/webp/img_system_01.webp') }}"  type="image/webp">  
                <img class="img-fluid" src="{{asset('_img/img_system_01.jpg')}}" alt="@lang('インドネシア')" loading="lazy">
            </picture>
          </div>
        </div>
      </div>

    </div>
    <div class="col-12">
      <div class="container bg-white content-section-container">
          <div class="lead-red-long text-center">
            <h4>@lang('外国人技能実習生受け入れ方式')</h4>
          </div>
          <p class="mb35">@lang('外国人技能実習生を、受け入れる方式には、次の二つのタイプがあります。')</p>
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-4">
                <div class="bg-light p-4">
                    <h4 class="fontRed">@lang('企業単独型')</h4>
                    <p>@lang('本邦の企業等(実習実施機関)が海外の現地法人、合弁企業や取引先企業の職員を受け入れ技能実習を実施。')</p>
                </div>
                
              </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-4">
                    <div class="bg-light p-4">
                      <h4 class="fontRed">@lang('団体監理型')</h4>
                      <p>@lang('商工会や中小企業団体等営利を目的としない団体(監理団体)が技能実習生を受け入、傘下の企業等(実習実施機関)で技能実習を実施。')</p>
                    </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-12 py-4">
        <div class="container bg-white content-program-container">
            <div class="lead-red-long text-center">
                <h4>@lang('技能実習1号(1年目)から技能実習2号(2・3年目)への移行')</h4>
              </div>
              <div class="pb-2">
                  <p class="mb50">@lang('技能実習生は、技能実習1号終了時に移行対象職種・作業について技能検定基礎2級等に合格し、在留資格変更許可を受けると技能実習２号へ移行することができます。この場合、技能実習1号で技能等を修得した実習実施機関と同一の機関で、かつ同一の技能等について習熟するための活動を行わなければなりません。')</p>
                  <p class="text-center"><a href="/pdf/type-of-occupation.pdf" target="_blank" class="bt02 w420"><span class="iconWindow">@lang('外国人技能実習機構「技能実習2号移行対象職種」')</span></a></p>
              </div>
        </div>
    </div>
  
</div>
<div class="row mx-0">
    <div class="col-sm-12 px-0">
        <div class="lead-black mb-3">
            <h3>@lang('制度の主な特徴')</h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <h4 class="mb20"><img src="/img/ti_point_02.gif" alt="Point 1" width="320" height="25" loading="lazy"></h4>
                <p class="ml10">@lang('技能実習生は1年目から実習実施機関との雇用契約で技能実習を受けます。労働関係法令の保護が及びます。')</p>
      
            </div>
            <div class="col-md-4">
                <h4 class="mb20"><img src="/img/ti_point_03.gif" alt="Point 2" width="320" height="25" loading="lazy"></h4>
                <p class="ml10">@lang('実習実施機関(企業単独型のみ)又は監理団体による、技能実習生に対する講習(日本語教育、技能実習生の法的保護に必要な講義等)の実施は義務とされています。')</p>
      
            </div>
            <div class="col-md-4">
                <h4 class="mb20"><img src="/img/ti_point_04.gif" alt="Point 3" width="320" height="25" loading="lazy"></h4>
                <p class="ml10">@lang('監理団体による実習実施機関に対する指導、監督(巡回等)および支援体制の強化が求められるようになりました。')</p>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="row mx-0 bg-light">
    <div class="col-sm-12 px-0">
        <div class="lead-black mb-3">
            <h3>@lang('導入スケジュール')</h3>
        </div>
        <div class="text-center">
            <div class="boxed-text mb-4">
                <h4>@lang('入国前')</h4>
            </div>
        </div>
        <div class="container">
            <div id="schedule" class="section02 mb50">
                <div class="mAuto w1020">
                  <div class="scheduleBox">
                    
                    <div class="row bg-white p-2">
                      <div class="col-md-2">
                          <h5 class="title">6 @lang('ヶ月前')</h5>
                      </div>
                      <div class="col-md-6">
                          <div class="text">
                              <ul class="listDisc">
                              <li>@lang('実習生受入要望書(送り出し機関へ)作成、現地にて候補者募集')</li>
                              </ul>
                            </div>
                      </div>
                      <div class="col-md-4">
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                          <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                        </div>
                    </div>

                    <div class="row bg-white p-2">
                        <div class="col-md-2">
                            <h5 class="title">5 @lang('ヶ月前')</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <ul class="listDisc">
                                <li>@lang('学校にて面接、人員選抜')</li>
                                </ul>
                              </div>
                        </div>
                        <div class="col-md-4">
                             

                            <picture>
                                <source  srcset="{{ asset('_img/webp/img_advantage_05.webp') }}"  type="image/webp">  
                                <img class="img-fluid lazyload"  src="{{ asset('_img/img_advantage_05.jpg') }}" alt="@lang('日本語')" loading="lazy">
                            </picture>
                        </div>
                      </div>
  
                      <div class="row">
                          <div class="col-12 text-center">
                            <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                          </div>
                      </div>

                      <div class="row bg-white p-2">
                          <div class="col-md-2">
                              <h5 class="title">4 @lang('ヶ月前')</h5>
                          </div>
                          <div class="col-md-6">
                              <div class="text">
                                  <ul class="listDisc">
                                  <li>@lang('雇用契約締結')</li>
                                  <li>@lang('「技能実習計画認定申請書」  作成開始')</li>
                                  </ul>
                                </div>
                          </div>
                          <div class="col-md-4">
                              
                          </div>
                        </div>
    
                        <div class="row">
                            <div class="col-12 text-center">
                              <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                            </div>
                        </div>
                        <div class="row bg-white p-2">
                            <div class="col-md-2">
                                <h5 class="title">4 @lang('ヶ月前')</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="text">
                                    <ul class="listDisc fl w60p">
                                        <li>
                                            @lang('受入機関より外国技能実習機構へ「技能実習計画認定申請書」交付申請書類送付')
                                        </li>
                                        <li>
                                                @lang('外国人技能実習機構にて書類点検・申請取次ぎ')
                                            </li>
                                            <li>
                                                @lang('技能実習計画認定後、「在留資格認定証明書」(入国許可)交付を入国管理局に申請')
                                            </li>

                                        <li>@lang('入国管理局にて書類審査(入管審査期間は約1ヶ月の幅で変動することがあります)')</li>
                                        </ul>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-2" style="background-color:#DDDDDD;">
                                    <p class="fontBold">@lang('この間、現地にて事前教育')<br>@lang('(日本語、生活・ 法律に関する知識)')</p>
                                  </div>
                            </div>
                          </div>
      
                          <div class="row">
                              <div class="col-12 text-center">
                                <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                              </div>
                          </div>
                          <div class="row bg-white p-2">
                              <div class="col-md-2">
                                  <h5 class="title">1 @lang('ヶ月前')</h5>
                              </div>
                              <div class="col-md-6">
                                  <div class="text">
                                          <ul class="">
                                              <li>@lang('入国管理局より「在留資格認定証明書」の交付')</li>
                                              <li>@lang('送り出し機関へ「在留資格認定証明書」の送付、インドネシア大使館へビザ申請')</li>
                                              <li>@lang('寮の本契約、初期備品の準備等')</li>
                                              <li>@lang('入国日の調整')</li>
                                              </ul>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                  
                              </div>
                            </div>
        
                    
                    
                  </div>
                  <div class="text-center mt-4">
                      <div class="boxed-text mb-4">
                          <h4>@lang('入国後')</h4>
                      </div>
                  </div>
                  <div class="text-center mt-2 mb-2">
                      <h5>@lang('技能実習1号')</h5>
                  </div>


                  <div class="scheduleBox mb30">
                      <div class="row bg-white p-2">
                          <div class="col-md-2">
                              <h5 class="title">1 @lang('ヶ月目')</h5>
                          </div>
                          <div class="col-md-6">
                              <div class="text">
                                      <ul class="">
                        <li>@lang('入国・講習施設にて集合講習開始(約1ヶ月)')</li>
                                          </ul>
                                </div>
                          </div>
                          <div class="col-md-4">
                              
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                              <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                            </div>
                        </div>
                        <div class="row bg-white p-2">
                            <div class="col-md-2">
                                <h5 class="title">2 @lang('ヶ月目')</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="text">
                                        <ul class="">
                        <li>@lang('技能実習開始')</li>
                                            </ul>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-12 text-center">
                                <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                              </div>
                          </div>
                          <div class="row bg-white p-2">
                              <div class="col-md-2">
                                  <h5 class="title">8～9 @lang('ヶ月目')</h5>
                              </div>
                              <div class="col-md-6">
                                  <div class="text">
                                          <ul class="">
                        <li>@lang('技能試験勉強')</li>
                                              </ul>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                  
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                  <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                                </div>
                            </div>     
                            <div class="row bg-white p-2">
                                <div class="col-md-2">
                                    <h5 class="title">10 @lang('ヶ月目')</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="text">
                                            <ul class="">
                        <li>@lang('技能試験受験(技能実習1号終了3ヶ月前)')</li>
                                                </ul>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-12 text-center">
                                    <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                                  </div>
                              </div>
                              <div class="row bg-white p-2">
                                  <div class="col-md-2">
                                      <h5 class="title">11 @lang('ヶ月目')</h5>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="text">
                                              <ul class="">
                        <li>@lang('在留資格変更許可申請(技能実習1号終了2ヶ月前)')</li>
                                                  </ul>
                                        </div>
                                  </div>
                                  <div class="col-md-4">
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                      <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                                    </div>
                                </div>
                                <div class="row bg-white p-2">
                                    <div class="col-md-2">
                                        <h5 class="title">12 @lang('ヶ月目')</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text">
                                                <ul class="">
                        <li>@lang('在留資格変更許可')</li>
                                                    </ul>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-12 text-center">
                                        <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                                      </div>
                                  </div>
                
                  </div>
                  
                  <div class="pt-4 pb-2 text-center">
                    <h5>@lang('技能実習2号1年目')</h5>
                  </div>
                  <div class="scheduleBox mb30">
                      <div class="row bg-white p-2">
                          <div class="col-md-2">
                              <h5 class="title">23 @lang('ヶ月目')</h5>
                          </div>
                          <div class="col-md-6">
                              <div class="text">
                                      <ul class="">
                        <li>@lang('在留期間更新許可申請(技能実習2号1年目終了2ヶ月前)')</li>
                                          </ul>
                                </div>
                          </div>
                          <div class="col-md-4">
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                              <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                            </div>
                        </div>
                        <div class="row bg-white p-2">
                            <div class="col-md-2">
                                <h5 class="title">24 @lang('ヶ月目')</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="text">
                                        <ul class="">
                        <li>@lang('在留期間(技能実習2号ロ2年目)変更許可')</li>
                                            </ul>
                                  </div>
                            </div>
                            <div class="col-md-4">
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-12 text-center">
                                <img class="" src="/img/img_arrow.gif" alt="&darr;" width="11" height="21" loading="lazy">
                              </div>
                          </div>
                    
                  </div>
                  <div class="pt-4 pb-2 text-center">
                    <h5>@lang('技能実習2号2年目')</h5>
                  </div>
                  <div class="scheduleBox pb-4">
                      <div class="row bg-white p-2">
                          <div class="col-md-2">
                              <h5 class="title">36 @lang('ヶ月目')</h5>
                          </div>
                          <div class="col-md-6">
                              <div class="text">
                                      <ul class="">
                        <li>@lang('技能実習修了証書の交付、帰国')</li>
                                          </ul>
                                </div>
                          </div>
                          <div class="col-md-4">
                          </div>
                        </div>
                   
                  </div>
                </div>
                </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mx-0">
      <div class="col-12">
          <div class="lead-black mb-3">
              <h3>@lang('「団体監理型受入れができる」監理団体')</h3>
          </div>
      </div>
      <div class="col-12">
        <ul class="row listIcon02" id="leftcontent">
            <li class="col-sm-6">@lang('商工会議所又は商工会')</li>
            <li class="col-sm-6">@lang('中小企業団体')</li>
            <li class="col-sm-6">@lang('職業訓練法人')</li>
            <li class="col-sm-6">@lang('農業協同組合、漁業協同組合')</li>
            <li class="col-sm-6">@lang('公益社団法人、公益財団法人')</li>
            <li class="col-sm-6">@lang('法務大臣が告示をもって定める監理団体')</li>
        </ul>
      </div>
      <div class="col-12">
            <dl class="pl-4 clear">
                <dd>※ @lang('技能実習生を受け入れ可能な監視団体は、営利を目的とするものは認められません')</dd>
            </dl> 
      </div>
    </div>
</div>

<div class="row mx-0 bg-light">
    <div class="col-12">
        <div class="container">
            <div class="lead-black mb-3">
                <h3>@lang('技能実習生に係る要件')</h3>
            </div>
            <ul class="listIcon02" id="leftcontent">
                <li>@lang('修得しようとする技能等が単純作業でないこと')</li>
                <li>@lang('母国で修得することが困難である技能等を修得するものであること。')</li>
                <li>@lang('18歳以上で、帰国後に日本で修得した技能等を生かせる業務に就く予定があること。')</li>
                <li>@lang('日本で受ける技能実習と同種の業務に従事した経験等を有すること。')</li>
                <li>@lang('本国の国、地方公共団体等からの推薦を受けていること。')</li>
                <li>@lang('技能実習生が、送出し機関、監理団体、実習実施機関等から、保証金などを徴収されないこと。')<br>@lang('又、労働契約の不履行に係る違約金を定める契約が締結されていないこと。')</li>
              </ul>
        </div>

        
    </div>
</div>  
<div class="row mx-0">
    <div class="col-12">
        <div class="lead-black mb-3">
            <h3>@lang('技能実習生の受入れ人数枠')</h3>
        </div>
        <div class="container">
            <table class="table text-center" summary="技能実習生の受入れ人数枠">
                <thead>
                  <tr>
                  <th class="w50p">@lang('実習実施機関の常勤職員総数')</th>
                  <th class="fontRed">@lang('技能実習生の人数')<sup>※ @lang('注')</sup></th>
                  </tr>
                </thead>
                <tr>
                <th>301 @lang('人以上')</th>
                <td class="fontRed">@lang('常勤職員総数の20分の1')</td>
                </tr>
                <tr>
                <th>201 @lang('人以上')　300 @lang('人以下')</th>
                <td class="fontRed">15 @lang('人')</td>
                </tr>
                <tr>
                <th>101 @lang('人以上') 200 @lang('人以下')</th>
                <td class="fontRed">10 @lang('人')</td>
                </tr>
                <tr>
                <th>51 @lang('人以上') 100 @lang('人以下')</th>
                <td class="fontRed">6 @lang('人')</td>
                </tr>
                <tr>
                <th>41 @lang('人以上') 50 @lang('人以下')</th>
                <td class="fontRed">5 @lang('人')</td>
                </tr>
                <tr>
                    <th>31 @lang('人以上') 40 @lang('人以下')</th>
                    <td class="fontRed">4 @lang('人')</td>
                </tr>
                <tr>
                    <th>30 @lang('人以下')</th>
                    <td class="fontRed">3 @lang('人')</td>
                </tr>
                </table>
        </div>
        <div class="container">
            <dl class="font-size-small">
                <dt class="fontRed d-inline-block">※</dt>
                <dd class="d-inline-block">@lang('技能実習生(1号)の人数が、常勤職員の総数を超えないこと。')</dd>
                <br>
                <dt class="fontRed d-inline-block">※</dt>
                <dd class="d-inline-block">@lang('船上漁業の場合は、技能実習生(1号及び2号)の人数が、各漁船につき乗組員(技能実習生を除く)の人数を超えないこと。')</dd>
                <br>
                <dt class="fontRed d-inline-block">※</dt>
                <dd class="d-inline-block">@lang('30名以下の企業様の場合、1年目で3名受け入れ、2・3年目も受け入れ可能なので、3年間でトータル9名を受け入れることができます。')</dd>
              </dl>
        </div>
    </div>
</div>  
@stop
