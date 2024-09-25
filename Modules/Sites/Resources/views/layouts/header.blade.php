<div id="headerWrapper" class="sticky-top">
      <nav id="first-navbar" class="navbar navbar-expand-md navbar-light bg-white d-flex">
                                
        @if (App::isLocale('id'))
          <a class="navbar-brand" href="/id">
        @else
          <a class="navbar-brand" href="/">
        @endif
            <picture>
                <source  srcset="{{ asset('_img/webp/logo_tsubame-jltc.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_tsubame-jltc.png') }}" id='img-logo' alt="LPK ツバメ日本語研修センター(LPK TSUBAME JAPANESE TRAINING CENTER)">
            </picture>
          </a>
          <div class="flex-auto"></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse1,#navbarCollapse2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto text-right flex-wrap justify-content-end">
                <li class="nav-item p-2" id="contacttop">
                    <div class="navbar-brand dropdown p-0 mr-0" href="#">
                        <button type="button" class="btn btn-danger" data-toggle="popover" data-placement="bottom" data-html="true" id="popover-contact-btn"
                        data-content='<div class="contact-popup">
                            <div class="contact-col d-none d-md-block">
                                <div class="contact-info contact-info-jp">
                                    <img src="{{ asset('common/img/icon_phone_on.png') }}" class="img-phone" alt="">
                                    <p class="contact-number">0875-89-0412</p>
                                </div>
                                <div class="contact-schedule contact-schedule-jp">
                                    <span class="badge-location">日本駐在所</span>
                                    <p class="work-time">受付時間 月〜土 9:00 〜 17:00</p>
                                </div>

                            </div>
                            <div class="contact-col d-none d-md-block">
                                <div class="contact-info">
                                    <img src="{{ asset('common/img/icon_phone_on.png') }}" class="img-phone" alt="">
                                    <p class="contact-number">(021) 82738730</p>
                                </div>
                                <div class="contact-schedule">
                                    <span class="badge-location">Indonesia</span>
                                    <p class="work-time">Sen - Jum | 09.00 - 17.00</p>
                                </div>
                            </div>
                            <div class="contact-img-wrapper d-block d-md-none">
                                <a href="tel:0875890412" class="d-block pb-1 border-bottom">
                                    <img src="{{asset('common/img/img_contact_jpn.png')}}" class="img-fluid" alt="">
                                </a>
                                <a href="tel:02182738730" class="d-block pt-1">
                                    <img src="{{asset('common/img/img_contact_ind.png')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>'><img src="{{ asset('common/img/icon_phone.svg') }}" width="15" alt=""> @lang('電話でのお問い合わせ')</button>
                        
                        {{-- @if (App::isLocale('id'))
                            <img src="{{ asset('common/img/img_contact_ind.png') }}" width="230px" style="margin-top: -4px; margin-bottom: -4px" alt="Telepon Kantor Perwakilan Jepang: +81875890412 (Jam Operasional Senin - Sabtu: 9.00 - 17.00)" class="img-fluid">
                        @else
                            <img src="{{ asset('common/img/img_contact_jpn.png') }}" width="230px" style="margin-top: -4px; margin-bottom: -4px" alt="日本駐住所電話番号- +81875890412  (受付時間 月～土 : 9:00 ~ 17:00)" class="img-fluid">
                        @endif --}}
                    </div>
                </li>
                <li class="nav-item p-2" id="phonetop">
                    <a href="mailto:lpktsubamejltc.id@gmail.com" id="btn_contact_nav" class="btn btn-danger ">
                    <img src="{{ asset('common/img/amail.svg') }}"  width="20"  style="  margin-right:5px"> {{ __("Inquiries (24 hour reception)") }}</a>
                </li>
                @if(App::isLocale('id'))
                <li class="nav-item p-2">
                    @if(Auth::user())
                        <a href="{{ route('sites.logout') }}" class="btn btn-outline-dark">Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary" id="login-link-button">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary" id="register-link-button">Register</a>
                    @endif
                </li>
                @endif
            </ul>
            
          </div>
        </nav>
        <nav id="second-navbar" class="navbar navbar-expand-md navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarCollapse2">
              <ul class="navbar-nav mx-auto text-right ">
                <li class="nav-item {{ Route::currentRouteNamed('sites.landing') || Route::currentRouteNamed('sites.landing.id') ? 'active' : '' }}">
                    @if (App::isLocale('id'))
                        <a class="nav-link" href="/id">{{ __('ホーム') }}</a>
                    @else
                        <a class="nav-link" href="/">{{ __('ホーム') }}</a>
                    @endif
                </li>
                <li class="nav-item {{ Route::currentRouteNamed('sites.overview') || Route::currentRouteNamed('sites.overview.id') ? 'active' : '' }}">
                    @if (App::isLocale('id'))
                        <a class="nav-link" href="/id/overview">{{ __('会社概要') }}</a>
                    @else
                        <a class="nav-link" href="/overview">{{ __('会社概要') }}</a>
                    @endif
                </li>
                    <li class="nav-item {{ Route::currentRouteNamed('sites.about') || Route::currentRouteNamed('sites.about.id') ? 'active' : '' }}">
                    @if (App::isLocale('id'))
                      <a class="nav-link" href="/id/about">{{ __('ツバメについて') }}</a>
                    @else
                      <a class="nav-link" href="/about">{{ __('ツバメについて') }}</a>
                    @endif

                    </li>

                    <li class="nav-item {{ Route::currentRouteNamed('sites.school-group') || Route::currentRouteNamed('sites.school-group.id') ? 'active' : '' }}">
                    @if (App::isLocale('id'))
                        <a class="nav-link" href="/id/school-group">{{ __('ツバメグループ教育機関') }}</a>
                    @else
                        <a class="nav-link" href="/school-group">{{ __('ツバメグループ教育機関') }}</a>
                    @endif
    
                    </li>

                    <li class="nav-item {{ Route::currentRouteNamed('sites.our-staff') || Route::currentRouteNamed('sites.our-staff.id') ? 'active' : '' }}">
                    @if (App::isLocale('id'))
                        <a class="nav-link" href="/id/our-staff">{{ __('スタッフ紹介') }}</a>
                    @else
                        <a class="nav-link" href="/our-staff">{{ __('スタッフ紹介') }}</a>
                    @endif
    
                    </li>
                    
                    <li class="nav-item {{ Route::currentRouteNamed('sites.program') || Route::currentRouteNamed('sites.program.id') ? 'active' : '' }}">
                    @if (App::isLocale('id'))
                        <a class="nav-link" href="/id/program">{{ __('技能実習生制度とは') }}</a>
                    @else
                        <a class="nav-link" href="/program">{{ __('技能実習生制度とは') }}</a>
                    @endif
                    </li>

                    <li class="nav-item {{ Route::currentRouteNamed('sites.indonesia') || Route::currentRouteNamed('sites.indonesia.id') ? 'active' : '' }}">
                    @if (App::isLocale('id'))
                        <a class="nav-link" href="/id/indonesia">{{ __('インドネシアの特色') }}</a>
                    @else
                        <a class="nav-link" href="/indonesia">{{ __('インドネシアの特色') }}</a>
                    @endif
                    </li>

                    <li class="nav-item dropdown lang-option">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">language</i>
                            <span>{{ strtoupper(App::getLocale()) }}</span>
                        </a>
                        <div style="width: auto;" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            @if (App::isLocale('id'))
                            <a class="dropdown-item" href="{{ route(substr(Route::currentRouteName(), 0, -3)) }}">(JP) Japanese</a>
                            @else
                            <a class="dropdown-item" href="{{ route(Route::currentRouteName().'.id') }}">(ID) Bahasa Indonesia</a>
                            @endif
                        </div>
                    </li>
                    @if(Auth::user())
                    <li class="nav-item {{ Route::currentRouteNamed('accounts.index') || Route::currentRouteNamed('accounts.index.id') ? 'active' : '' }}">
                            @if (App::isLocale('id'))
                                <a class="nav-link" href="{{ route('accounts.index.id') }}">{{ __('Account') }}</a>
                            @else
                                <a class="nav-link" href="{{ route('accounts.index') }}">{{ __('Account') }}</a>
                            @endif
                    </li>
                    @endif
                    @hasanyrole('super-admin|moderator')
                    <li class="nav-item {{ Route::currentRouteNamed('panels.index') ? 'active' : '' }}">
                        <a class="nav-link" href="/panels">Panels</a>
                    </li>
                    @endhasanyrole
              </ul>
            </div>
          </nav>
    
  </div>

  @section('scripts')
      @parent
      <script>
        
      </script>
  @endsection
