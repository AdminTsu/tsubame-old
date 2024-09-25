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
    <link rel="stylesheet" href="{{ asset('coreui/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('coreui/vendors/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css"/>


@endsection

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) { var js, fjs=d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.src='https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0'; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<div id="container">
    <div class="row mx-0">
        <div class="col-md-12 px-0 featured-container">
            @if (App::isLocale('id'))
            <div id="myCarousel" class="d-none d-sm-block">
                <!-- Carousel items ID -->
                <!-- <div class="carousel-item active">
                    <img class="w-100" src="common/img/banner-corona-tsubame-ind.jpg" alt="Banner Tsubame" loading="lazy" >                  
                </div> -->
                <div class="carousel-item">
                    <div class="main-bg-container">
                        <picture>
                            <source  media="(min-width:577px)" srcset="_img/webp/bg_main.webp"  type="image/webp"> 
                            <source media="(max-width:576px)" srcset="_img/webp/bg_main-mobile.webp"  type="image/webp"> 
                            <img class="d-block w-100" src="common/img/bg_main.jpg" alt="Karakteristik Indonesia" loading="lazy" >
                        </picture>    
                    </div> 
                    <div class="text-center" style=" position:absolute; top: 40%; left: 50%; transform:translate(-50%,-50%);  ">
                        <picture>
                            <source srcset="_img/webp/img_main.webp"  type="image/webp"> 
                            <img src="img/img_main.png" alt="For The Future｜インドネシアのより良い未来のために" width="330" height="70" loading="lazy">
                        </picture>  
                    </div>              
                </div>
            </div>
            <div id="myCarouselMobile" class="d-sm-none">
                <!-- Carousel items -->
           
                <div class="carousel-item">
                    <div class="main-bg-container">
                        <img class="d-block w-100" src="common/img/bg_main-mobile.jpg" alt="Karakteristik Indonesia" loading="lazy" >
                    </div>           
                </div>
            </div>
            @else
            <div id="myCarousel" class="d-none d-sm-block">
                <!-- Carousel items JP -->
              
                <div class="carousel-item">
                    <div class="main-bg-container active">
                        <picture>
                            <source  media="(min-width:577px)" srcset="_img/webp/bg_main.webp"  type="image/webp"> 
                            <source media="(max-width:576px)" srcset="_img/webp/bg_main-mobile.webp"  type="image/webp"> 
                            <img class="d-block w-100" src="common/img/bg_main.jpg" alt="Karakteristik Indonesia" loading="lazy" >
                        </picture>    
                    </div> 
                    <div class="text-center" style=" position:absolute; top: 40%; left: 50%; transform:translate(-50%,-50%);">
                        <picture>
                            <source srcset="_img/webp/img_main.webp"  type="image/webp"> 
                            <img src="img/img_main.png" alt="For The Future｜インドネシアのより良い未来のために" width="330" height="70" loading="lazy">
                        </picture>  
                    </div>              
                </div>
            </div>
            <div id="myCarouselMobile" class="d-sm-none">
                <!-- Carousel items -->
                
                <div class="carousel-item">
                    <div class="main-bg-container">
                        <img class="d-block w-100" src="common/img/bg_main-mobile.jpg" alt="Karakteristik Indonesia" loading="lazy" >
                    </div>              
                </div>
            </div>
            @endif
            
        </div>
    </div>
    <div id='home-about' class="row mx-0">
        <div class="col-md-12 px-0 text-center">
            <div class="container">
                    <div class="p-2">
                            <h1 class="mt-4">{{__("ツバメについて ")}}</h1>
                            <!-- <h3>@lang('ツバメの職業訓練所機関')</h3> -->
                            <p>@lang('日本人が経営するツバメは。')
                                <br>
                                @lang('日本の現場のニーズを的確にとらえ、問題点を迅速に解決していきます。')
                            </p>
                    </div>
            </div>
            
        </div>
        <div class="col-md-12 px-0">
            <div class="container">
                    <div class="p-2 text-center">
                            <div class="lead-red mb-3">
                                    <h2>{{__('理念')}}</h2>
                                </div>
                                <p>{{__('インドネシアの志ある若者達が真に自立する為の「日本語教育」と「技能支援」を実施し インドネシア共和国、日本国、両国の社会の発展に貢献すること。')}}</p>
                    </div>
            </div>
           
        </div>
        <div class="col-md-12 px-0 text-center">
        @if (App::isLocale('id'))
            <a href='id/about' class="btn btn-outline-danger">MORE</a>
                    @else   
            <a href='/about' class="btn btn-outline-danger">MORE</a>
                    @endif
        </div>
        <div class="col-md-12 text-center pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                <div class="fb-page" data-href="https://facebook.com/TsubameJltc/" data-tabs="timeline" data-small-header="false" data-width='500' data-height='400' data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://facebook.com/TsubameJltc/" class="fb-xfbml-parse-ignore"><a href="https://facebook.com/TsubameJltc/">LPK Tsubame JLTC</a></blockquote></div>
                </div>
                <div class="col-sm-8">
                <div class="youtube" data-embed="EK4Z3_iY07s">
                    <div class="play-button"></div> 
                </div>
                </div>
            </div>
        </div>
            
            
        </div>
        <div class="col-md-12 px-0 text-center">
                <div class="row info-cards">
                        <div class="card_parent  col-md-3">
                            <div class="card bg-red h-100">
                                @if (App::isLocale('id'))
                            <a href="id/overview" class="text-light">
                                @else  
                            <a href="/overview" class="text-light"> 
                                @endif
                                <div class="head-image">
                                @if (App::isLocale('id')) 
                                    <picture>
                                        <source  srcset="_img/webp/icon_overview.webp"  type="image/webp"> 
                                        <img src="img/icon_overview.png"  alt="Profil Perusahaan" width="140" height="140" loading="lazy">
                                    </picture>  
                                @else
                                    <picture>
                                        <source  srcset="_img/webp/icon_overview.webp"  type="image/webp"> 
                                        <img src="_img/icon_overview.png" alt="会社概要" width="140" height="140" loading="lazy">
                                    </picture> 
                                     
                                @endif
                                    <div class="text-image">@lang('会社概要')</div>
                                </div>
                                <p class="fontBold p-4">{{__("基本理念、会社概要など、当社グループの会社情報をご紹介します。")}}</p>
                                <p class="more fontCentury">MORE</p>
                            </a>
                            </div>
                        </div>
                        <div class="card_parent col-md-3">
                            <div class="card bg-light-red h-100">
                                @if (App::isLocale('id'))
                            <a href="id/program" class="text-light">
                                @else  
                            <a href="/program" class="text-light"> 
                                @endif
                                    <div class="head-image">
                                @if (App::isLocale('id'))
                                    <picture>
                                        <source  srcset="_img/webp/icon_program.webp"  type="image/webp"> 
                                        <img src="_img/icon_program.png" alt="Praktek Magang" width="140" height="140" loading="lazy">
                                    </picture>  
                                @else 
                                <picture>
                                        <source  srcset="_img/webp/icon_program.webp"  type="image/webp"> 
                                        <img src="_img/icon_program.png" alt="技能実習生制度とは" width="140" height="140" loading="lazy">
                                    </picture>   
                                @endif
                                        <div class="text-image">@lang('技能実習生制度とは')</div>
                                    </div>
                                    <p class="fontBold p-4">{{__("インドネシアの若い学生を対象に語学研修、技術教育を優秀な教師陣の指導のもと実施致します。")}}</p>
                                    <p class="more fontCentury">MORE</p>
                                </a>
                                </div>
                        </div>
                        <div class="card_parent col-md-3">
                            <div class="card bg-red h-100">
                                @if (App::isLocale('id'))
                            <a href="id/program/#schedule" class="text-light">
                                @else  
                            <a href="/program/#schedule" class="text-light"> 
                                @endif
                                    <div class="head-image">
                                @if (App::isLocale('id'))
                                <picture>
                                        <source  srcset="_img/webp/icon_schedule.webp"  type="image/webp"> 
                                        <img src="_img/icon_schedule.png" alt="Jadwal Pengenalan" width="140" height="140" loading="lazy">
                                    </picture>  
                                       
                                @else
                                <picture>
                                        <source  srcset="_img/webp/icon_schedule.webp"  type="image/webp"> 
                                        <img src="_img/icon_schedule.png" alt="導入スケジュール" width="140" height="140" loading="lazy">
                                    </picture> 
                                       
                                @endif
                                        <div class="text-image">@lang('導入スケジュール')</div>
                                    </div>

                                    <p class="fontBold p-4">{{__("受入から修了まで、およそのスケジュールをご案内しております。")}}</p>
                                    <p class="more fontCentury">MORE</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_parent col-md-3">
                            <div class="card bg-light-red h-100">
                                @if (App::isLocale('id'))
                            <a href="id/indonesia" class="text-light">
                                @else  
                            <a href="/indonesia" class="text-light"> 
                                @endif
                                    <div class="head-image">
                                @if (App::isLocale('id'))
                                <picture>
                                        <source  srcset="_img/webp/icon_indonesia.webp"  type="image/webp"> 
                                        <img src="_img/icon_indonesia.png" alt="Karakteristik Indonesia" width="140" height="140" loading="lazy">
                                    </picture> 
                                        
                                @else
                                <picture>
                                        <source  srcset="_img/webp/icon_indonesia.webp"  type="image/webp"> 
                                        <img src="_img/icon_indonesia.png" alt="インドネシアの特色" width="140" height="140" loading="lazy">
                                    </picture> 
                                @endif
                                        <div class="text-image">@lang('インドネシアの特色')</div>
                                    </div>
                                    <p class="fontBold p-4">{{__("インドネシアの特徴や、教育事情をご紹介しております。")}}</p>
                                    <p class="more fontCentury">MORE</p>
                                </a>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-md-12 px-0 text-center">
            
            <div class="home-bottom">
                    <div class="main-bg-container">
                    <picture>
                        <source media="(min-width:421px)"  srcset="_img/webp/bg_about_02.webp"  type="image/webp"> 
                        <source media="(max-width:420px)"  srcset="_img/webp/bg_about_02-mobile.webp"  type="image/webp"> 
                        
                        <img src="img/bg_about_02.jpg" alt="Karakteristik Indonesia" loading="lazy" >
                    </picture>
                    </div>
                    <div style="position:absolute; top:0; right:0; left:0; bottom:0; z-index:10">
                <p class="text-light">{{ __("介護における新たな人材確保についての ・ご質問・ご相談は下記より、お問い合わせください。") }}</p>
</div>
            </div>
        </div>
    </div>
        
</div>
@stop

@section('scripts')

@parent
<script src="{{ asset('coreui/vendors/slick/slick.min.js') }}"></script>
<script>
      ( function() { 
      var youtube = document.querySelectorAll( ".youtube" ); 
      for (var i = 0; i < youtube.length; i++) { 
        var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/maxresdefault.jpg"; 
        var image = new Image();
            image.src = source;
            image.loading = 'lazy';
            image.width = '475';
            image.height = '267';
            image.addEventListener( "load", function() {
              youtube[ i ].appendChild( image );
            }( i ) ); 
            youtube[i].addEventListener( "click", function() { 
              var iframe = document.createElement( "iframe" ); 
                  iframe.setAttribute( "frameborder", "0" );
                  iframe.setAttribute( "allowfullscreen", "" );
                  iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

                  this.innerHTML = "";
                  this.appendChild( iframe );
            } );  
      }; 
      } )();
    $(function(){

        // Slider Desktop
        var slideshow = $('#myCarousel');
        var ImagePauses = [10000, 3000];

        // Init
        slideshow.slick({
            initialSlide: 0,
            autoplay: true,
            autoplaySpeed: ImagePauses[0],
            dots: false,
            arrows: true,
            pauseOnHover: false, 
            pauseOnFocus: false,
            prevArrow: "<span class='slick-prev'><i class='fas fa-chevron-left'></i></span>",
            nextArrow: "<span class='slick-next'><i class='fas fa-chevron-right'></i></span>"
        });

        // Sliding settings
        slideshow.on('afterChange', function(event, slick, currentSlide) {
            // Update autoplay speed according to slide index
            slideshow.slick('slickSetOption', 'autoplaySpeed', ImagePauses[currentSlide], true);
        });

        // Slider Mobile
        var slideshowMobile = $("#myCarouselMobile")
        
        slideshowMobile.slick({
            initialSlide: 0,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            arrows: true,
            pauseOnHover: false, 
            pauseOnFocus: false,
            prevArrow: "<span class='slick-prev'><i class='fas fa-chevron-left'></i></span>",
            nextArrow: "<span class='slick-next'><i class='fas fa-chevron-right'></i></span>"
        })
    })

</script>
@endsection