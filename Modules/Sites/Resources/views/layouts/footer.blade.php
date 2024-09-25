<div id="footerWrapper" class="row mx-0">
    <div class="col-md-4 px-0">
      <div class="p-4">
          <p class="logo">
        @if (App::isLocale('id'))
          <a href="/id">
        @else
          <a href="/">
        @endif
          
          <picture>
                <source  srcset="{{ asset('_img/webp/logo_tsubame-jltc.webp') }}"  type="image/webp"> 
                <img class="img-fluid" src="{{ asset('common/img/logo_tsubame-jltc.png') }}" alt="LPK ツバメ日本語研修センター(LPK TSUBAME JAPANESE TRAINING CENTER)" width="410" height="85"></a>
            </picture></p>
        @if (App::isLocale('id'))
          <strong>Tentang Kami</strong>
          <p style="font-size: 12px; margin-bottom: 0;">Tsubame merupakan lembaga pelatihan kerja magang ke Jepang resmi yang diakui oleh Indonesia. Sebelum diberangkatkan, kami akan memberikan pelatihan bahasa dan pendidikan teknis dengan kurikulum yang sesuai agar peserta berhasil ketika tiba di Jepang. Diharapkan dengan program magang ini, peserta mendapat keterampilan yang berguna di negara mereka sendiri. Kami juga mengembangkan layanan SDM komprehensif termasuk pengenalan perusahaan kepada para pekerja magang yang telah kembali ke tanah air.</p>
        @else
          <p style="font-size: 12px; margin-bottom: 0;">LPK日本語研修センターは「日本語教育」「技能支援」を通じ、インドネシア・日本両国の社会の発展に貢献することを理念に活動しております。外国人技能実習制度に基づくインドネシア政府の認定送り出し機関として日本の受け入れ機関のサポートを行うほか、インドネシア国内で語学研修や技能研修等を行っております。</p>
        @endif
      </div>
    </div>
    <div class="col-md-4 px-0">
      <div class="p-4">
          <ul class="list-group list-group-flush text-center text-md-left">
              <li class="list-group-item">
              @if (App::isLocale('id'))
              <a class="text-dark" href="/id">{{ __('ホーム') }}</a>
              @else
              <a class="text-dark" href="/">{{ __('Home') }}</a>
              @endif
              </li>
              <li class="list-group-item">
              @if (App::isLocale('id'))
              <a class="text-dark" href="/id/overview">{{ __('会社概要') }}</a>
              @else
              <a class="text-dark" href="/overview">{{ __('Overview') }}</a>
              @endif
              </li>
              <li class="list-group-item">
              @if (App::isLocale('id'))
              <a class="text-dark" href="/id/about">{{ __('ツバメについて') }}</a>
              @else
              <a class="text-dark" href="/about">{{ __('About') }}</a>
              @endif
              </li>
              <li class="list-group-item">
              @if (App::isLocale('id'))
              <a class="text-dark" href="/id/program">{{ __('技能実習生制度とは') }}</a>
              @else
              <a class="text-dark" href="/program">{{ __('Program') }}</a>
              @endif
              </li>
              <li class="list-group-item">
              @if (App::isLocale('id'))
              <a class="text-dark" href="/id/indonesia">{{ __('インドネシアの特色') }}</a>
              @else
              <a class="text-dark" href="/indonesia">{{ __('Indonesia') }}</a>
              @endif
              </li>
          </ul>
      </div>
    </div>
    <div class="col-md-4 px-0">
      <div class="p-4 text-center">
          <dl>
            <dd>
              <button type="button" class="btn btn-danger btn-sm btn-contact-footer" data-toggle="popover" data-placement="top" data-html="true" id="popover-contact-btn-footer" data-content='<div class="contact-popup">
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
            </dd>
       
              <dt><a href="mailto:lpktsubamejltc.id@gmail.com"  class="btn btn-sm btn-danger btn-contact-footer" >
              <img src="{{ asset('common/img/amail.svg') }}" width="20" class="mail-icon" style="    display: inline-block;margin-right:5px !important"> {{ __("Inquiries (24 hour reception)") }}</a></dt>
            </dl>
      </div>
      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          <div class="col-4 col-md-2 text-center">
            <a class="menu-footer-social" href="https://www.facebook.com/TsubameJltc/" target="_blank">
              <img src="{{ asset('common/img/socialmedia/facebook.svg') }}" class="m-auto" height="42px" alt="Facebook">
            </a>
          </div>
          <div class="col-4 col-md-2 text-center">
            <a class="menu-footer-social" href="https://www.instagram.com/lpk_tsubame_jltc/" target="_blank">
              <img src="{{ asset('common/img/socialmedia/instagram.svg') }}" class="m-auto" height="42px" alt="Instagram">
            </a>
          </div>
          <div class="col-4 col-md-2 text-center">
            <!-- <a class="menu-footer-social" href="https://www.youtube.com/channel/UC-5gs4LUO-vYkVIeQKSKfgg" target="_blank"> -->
            <a class="menu-footer-social" href="https://youtu.be/EK4Z3_iY07s" target="_blank">
              <img src="{{ asset('common/img/socialmedia/youtube.svg') }}" class="m-auto" height="42px" alt="Youtube">
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div id="footerBanner" class="row justify-content-center mx-0">
          <a class="otitimg" href="https://www.otit.go.jp/" target="_blank">
            <picture>
                <source srcset="{{ asset('_img/webp/logo_otit.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_otit.jpg') }}" loading="lazy"  alt="otit">
            </picture>
          </a>
          <a class="bp2miimg" href="https://bp2mi.go.id/" target="_blank">
            <picture>
                <source  srcset="{{ asset('_img/webp/logo_bp2mi.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_bp2mi.jpg') }}" loading="lazy"  alt="BP2MI">
            </picture>
          </a>
          <a class="jitcoimg" href="https://www.jitco.or.jp/" target="_blank">
            <picture>
                <source  srcset="{{ asset('_img/webp/logo_jitco.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_jitco.jpg') }}" loading="lazy"  alt="JITCO｜公益財団法人 国際研修協力機構">
            </picture>
          </a>
          <a class="mofaimg" href="https://www.mofa.go.jp/mofaj/area/indonesia/" target="_blank">
            <picture>
                <source  srcset="{{ asset('_img/webp/logo_mofa.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_mofa.jpg') }}" loading="lazy"  alt="外務省">
            </picture>
          </a>
          <a class="mhlwimg" href="https://www.mhlw.go.jp/index.html" target="_blank">
            <picture>
                <source  srcset="{{ asset('_img/webp/logo_mhlw.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_mhlw.jpg') }}" loading="lazy"  alt="外務省">
            </picture>
          </a>
          <a class="mojimg" href="http://www.moj.go.jp/isa/index.html" target="_blank">
            <picture>
                <source  srcset="{{ asset('_img/webp/logo_moj.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_moj.jpg') }}" loading="lazy"  alt="外務省">
            </picture>
          </a>
          <a class="kemnakerimg" href="https://kemnaker.go.id/" target="_blank">
            <picture>
                <source  srcset="{{ asset('_img/webp/logo_kemnaker.webp') }}"  type="image/webp"> 
                <img src="{{ asset('common/img/logo_kemnaker.jpg') }}" loading="lazy"  alt="外務省">
            </picture>
          </a>
    </div>
	<div itemscope itemtype="https://schema.org/CreativeWork" >
		<div id="footerArea" class="row justify-content-center mx-0">
			<p id="copyright" class="fontCentury">
				COPYRIGHT &copy; {{ now()->year }}
				<span itemprop="copyrightHolder" itemscope itemtype="https://schema.org/Organization">
					<span itemprop="name">ALL RIGHTS RESERVED.</span>
				</span>
			</p>
		</div>
	</div>
  @if(App::isLocale('id'))
 
        @if(Auth::user())
             
        @else
           
        <button type="button" class="btn btn-primary btn-floating-register btnhide">
         Register
        </button>
            <!-- The Modal -->
        <div class="register-modal show" id="registerModal"> 
          <div class="register-form-container">
          <div class="register-header text-center">
            <button type="button" class="close close-reg" data-dismiss="modal">&times;</button> 
              <a href="/">
              <!-- jpeg -->
              <picture>
                <source media="(max-width: 576px)" srcset="{{ asset('common/img/register-modal-logo.png') }}" type="image/png">
                <source media="(min-width: 576px)" srcset="{{ asset('common/img/logo-register-desktop.png') }}" type="image/png">
                <img  src="{{ asset('common/img/register-modal-logo.png') }}"  class="img-fluid" alt="Tsubame Logo" width="75" heigh="81">
              </picture>
                
              </a>
          </div>
          <div class="reg-popup-body">
            <h3 class="">Pendaftaran</h3>
            <div class="reg-description">
              Ingin bekerja di Jepang?<br>Daftar di sini dan dapatkan informasi selengkapnya
            </div>
            <hr>
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" id="registerform">
              {{ csrf_field() }}
                <div class="form-group row">  
                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" pattern="[a-zA-Z][a-zA-Z ]{2,}"  title="Gunakan Huruf dan min 3 huruf"   name="name" value="{{ old('name') }}"  placeholder="{{ __('Name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> 
                <div class="form-group row"> 
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="{{ __('E-Mail Address') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> 
                <div class="form-group row"> 
                    <div class="col-md-12">
                      <div class="passwod-container">
                        <input id="password" type="password" class="password-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" pattern=".{6,}" title="Minimal 6 character"  name="password"  placeholder="{{ __('Password') }}" required> 
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="showpass-toogle"></div>
                      </div>
                    </div>
                </div> 
                <div class="form-group row"> 
                    <div class="col-md-12">
                      <div class="repassword-container">
                          <input id="password-confirm" type="password" class="password-input form-control " name="password_confirmation" pattern=".{6,}" title="Minimal 6 character"  placeholder="{{ __('Confirm Password') }}"  required>
                          <div class="showpass-toogle"></div>
                      </div>
                        
                    </div>
                </div> 
                <div class="form-group row mb-0  ">
                    <div class="col-md-12 text-center">
                        <button type="submit" id="registerbtn"   class="btn btn-primary btn-reg-submit" required>
                            {{ __('Register') }}
                        </button>
                        <div class="text-center reg-submit-info pt-3">
                        Silakan lengkapi formulir yang tampil setelah Anda mendaftar
                        </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="reg-footer text-center">
              <div>Already have an account? click <a class="btn btn-info btn-sm" href="{{ route('login') }}"> login</a> </div>
              <div>or click <a href='{{ route("sites.landing") }}'>here</a> to go back to landing page</div>
          </div> 
        </div>  
        </div>
        @endif
    @endif
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
      "url": "https://www.tsubame-jltc.com/",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Jawa Barat, Indonesia",
				"postalCode": "17147",
				"streetAddress": "Grand Galaxy City RSA 3 No. 25-27, Kelurahan Pekayon Jaya, Kecamatan Bekasi Selatan, Kota Bekasi"
			},
			"logo": "https://www.tsubame-jltc.com/common/img/logo_tsubame-jltc.gif",
			"email": "info(at)tsubame-jltc.com",
			"telephone": "(021)82738730"
		}
	</script>