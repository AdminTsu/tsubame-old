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
                <li class="breadcrumb-item">@lang('ツバメグループ教育機関')</li>
            </ol>
            <div class="page-title school-group-title">
                <h1 class="title">@lang('ツバメグループ教育機関  ')</h1>
                <p class="subtitle">@lang('ツバメグループ教育機関について')</p>
            </div>
        </div>
    </div>
</div>

<section class="school-group">
    <div class="row mx-0">
        <div class="col-sm-12 px-0">
            <div class="container">
                
                <img data-src="{{ asset('_img/school-group/school-group-map.jpg') }}" alt="School Group Tsubame" class="img-fluid lazyload school-group__mainvis">
                <div class="school-group__info">
                    
            
                <p>@lang('ツバメグループ教育機関は、インドネシア共和国内の日本語教育機関12校と協業させて頂いております。インドネシア共和国は、異なる言語を話す数百もの民族から構成されている多民族国家なので地域によって様々な特徴・文化があります。')</p>
                <p>@lang('弊社は、実習実施者様（受入れ企業様）、監理団体様の様々なニーズにお答えするためにインドネシア共和国内の様々なエリアからの人材募集を可能にしております。')</p>
                 </div>
            </div>
        </div>
    </div>

    <!-- <div class="row mx-0">
        <div class="col-sm-12 px-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <div class="school-group__filter">
                            <select class="school-group__dropdown">
                                <option value="">Semua Cabang</option>
                            </select>
                            <span class="school-group__dropdown-arrow">▼</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row mx-0">
        <div class="col-sm-12 px-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK SAKURA INDONESIA.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('サクラインドネシア日本語学校')</div>
                            <!-- <div class="school-group__location">Building Name</div> -->
                            <div class="school-group__address">Grasak, RT.03 / RW.04, Bago, Kradenan, Grasak, Bago, Kradenan, Kabupaten Grobogan, Jawa Tengah 58182</div>
                            <!-- <div class="school-group__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s</div>
                            <a href="#" class="school-group__link" data-toggle="modal" data-target="#popup1">See more</a> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK MARUNOGO.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('マルノゴ日本語学校')</div>
                            <div class="school-group__address">Jl. Raya Kalioso, Tagung, Guli, Kec. Nogosari, Kabupaten Boyolali, Jawa Tengah 57378</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK YUKIMAGA ABADI.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('ユキマガ　アバディ日本語学校')</div>
                            <div class="school-group__address">Jalan Gunung Slamet No.105, Mojosongo, Jebres, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK AKAMARU.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('アカマル日本語学校')</div>
                            <div class="school-group__address">Bangoan, RT/RW. 24/08, Ds. Bener, Kec. Ngrampal, Kab. Sragen, Prov. Jawa Tengah. Kode Pos: 57252</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK YAWATA.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('ヤワタ日本語学校')</div>
                            <div class="school-group__address">KATEGAN RT 04/04 GEMOLONG, GEMOLONG,SRAGEN,JAWA TENGAH</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK UENO.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('ウエノ日本語学校')</div>
                            <div class="school-group__address">Jl. Cimanuk Rt.002/023 Cantel Kulon, Sragen Kulon, Sragen, Jawa Tengah</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK YAMALAWU.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('ヤマラウ日本語学校')</div>
                            <div class="school-group__address">Popongan, Gerdu, Kec. Karangpandan, Kabupaten Karanganyar, Jawa Tengah 57791</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK IBARAKI.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('茨城日本語学校')</div>
                            <div class="school-group__address">Jl. Ki Hajar Dewantara, Jambon, Sabrang Lor, Kec. Trucuk, Kabupaten Klaten, Jawa Tengah 57467</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK KAZOKU MAJALENGKA.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('家族日本語学校')</div>
                            <div class="school-group__address">Jln. Raya Rajagaluh - Jatiwangi, Desa Trajaya, Palasah, Majalengka.</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK AKIRA.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('アキラ日本語学校')</div>
                            <div class="school-group__address">Krapyak RT/RW 01/10, Kartasura, Kartasura, Sukoharjo Jawa Tengah.</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK JIC INDRAMAYU.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('JIC日本語学校')</div>
                            <div class="school-group__address">Jalan Raya Kesambi Depan Gudang Bulog RT16 RW 17 Kec. Anjatan Kab. Indramayu</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="school-group__list">
                            <img data-src="{{ asset('_img/school-group/LPK Duta Dewata.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            <div class="school-group__name">@lang('ドゥタ デワタ バリ日本語学校')</div>
                            <div class="school-group__address">Jl Pudak Tegal Cangkring Kec.Mendoyo, Jembrana Bali 82261</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Popup 1 -->
    <div class="school-group__popup">
        <div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <img data-src="{{ asset('_img/school-group/LPK SAKURA INDONESIA.jpg') }}" alt="" class="img-fluid lazyload school-group__img">
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="school-group__popup-title">Cabang</div>
                                <div class="school-group__name">@lang('サクラインドネシア日本語学校')</div>
                                <div class="school-group__popup-title">Alamat</div>
                                <div class="school-group__location">Building Name</div>
                                <div class="school-group__address">Grasak, RT.03 / RW.04, Bago, Kradenan, Grasak, Bago, Kradenan, Kabupaten Grobogan, Jawa Tengah 58182</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="school-group__popup-title">Tentang Cabang Tsubame</div>
                                <div class="school-group__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                <div class="school-group__desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@stop
