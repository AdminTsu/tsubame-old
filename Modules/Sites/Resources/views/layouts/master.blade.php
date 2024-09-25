<!DOCTYPE html>
<html lang="en">
    <head>
        @section('styles')
        @yield('meta')
        {{--  <link href="/common/css/base.css" rel="stylesheet" media="screen,print">
        <link href="/common/css/main.css" rel="stylesheet" media="screen,print">
        <link href="/common/css/page.css" rel="stylesheet" media="screen,print">  --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
        {{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">  --}}
        @show
        {{--  <script src="/common/js/jquery.js"></script>  --}}
        {{--  <script src="/common/js/common.js"></script>  --}}
        {{--  <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          
            ga('create', 'UA-99033312-1', 'auto');
            ga('send', 'pageview');
          </script>  --}}
       {{-- Laravel Mix - CSS File --}}
        <link rel="stylesheet" href="{{ asset('css/sites.css?ver=1.0.3') }}">       
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WCMDRT9');</script>
        <!-- End Google Tag Manager -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-C4FDNFKWZ3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-C4FDNFKWZ3');
        </script>
    </head>
    <body id="home">

      <!-- Script disable button -->

      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCMDRT9"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      <!-- Schema.org -->
      <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "https://www.tsubame-jltc.com/",
          "name": "LPK Tsubame Japanese Training Center",
          "logo": "https://www.tsubame-jltc.com/common/img/logo_tsubame-jltc.gif",
          "alternateName": "LPK Tsubame",
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "(021) 82738730",
              "contactType": "customer service",
              "email": "info@tsubame-jltc.com",
              "areaServed": "ID",
              "availableLanguage": "id"
            }
          ]
        }
      </script>
      <script type='application/ld+json'> 
        {
          "@context": "http://www.schema.org",
          "@type": "EducationalOrganization",
          "name": "LPK Tsubame",
          "url": "https://www.tsubame-jltc.com/",
          "logo": "https://www.tsubame-jltc.com/common/img/logo_tsubame-jltc.gif",
          "image": "https://www.tsubame-jltc.com/common/img/logo_tsubame-jltc.gif",
          "description": "Tsubame adalah salah satu lembaga pendidikan asal Jepang yang bertujuan untuk mencari siswa/i magang ke Jepang untuk bertukar pengalaman dan ilmu di negeri Sakura tersebut.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Grand Galaxy City RSA 3 No. 25-27, Kelurahan Pekayon Jaya",
            "postOfficeBoxNumber": "17147",
            "addressLocality": "Bekasi Selatan",
            "addressRegion": "Bekasi",
            "postalCode": "17147",
            "addressCountry": "Indonesia"
          },
          "hasMap": "https://www.google.com/maps/place/LPK+TSUBAME+JAPANESE+LANGUAGE+TRAINING+CENTER/@-6.2774519,106.9711991,17z/data=!4m12!1m6!3m5!1s0x0:0xd4dec5c01d1b6ceb!2sLPK+TSUBAME+JAPANESE+LANGUAGE+TRAINING+CENTER!8m2!3d-6.2774572!4d106.9733878!3m4!1s0x2e699ad80bfcd40b:0xd4dec5c01d1b6ceb!8m2!3d-6.2774572!4d106.9733878?hl=en-US",
          "openingHours": "Mo, Tu, We, Th, Fr, Sa 09:00-17:00",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62875890412",
            "contactType": "Handphone"
          }
        }
      </script>
      <!-- End Schema.org -->

        @include('sites::layouts.header')
            
        @yield('content')
        
        @include('sites::layouts.footer')
        
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ asset('js/sites.js') }}"></script> --}}
        @section('scripts')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js"></script>
        <script>

          $(function(){

            $('.dropdown-toggle').dropdown()
            $('#popover-contact-btn').popover({
                container: '#first-navbar',
                template: "<div class='popover popover-contact-wrapper'><div class='popover-body'></div></div>"
            })

            $('#popover-contact-btn-footer').popover({
                container: '#footerWrapper',
                template: "<div class='popover popover-contact-wrapper'><div class='popover-body'></div></div>",
            })
            $('#popover-contact-btn-footer').on('shown.bs.popover', function () {
                $('#popover-contact-btn-footer').popover('update')
            })
            
            $("body").on('click', function(e){
                if ($(e.target).data('toggle') !== 'popover' && $(e.target).parents('.popover.show').length === 0) { 
                    $('#popover-contact-btn').popover('hide');
                    $('#popover-contact-btn-footer').popover('hide');
                }
            })
          })
        </script>
        <script>
          $(function(){
            var widscreen = $('body').width();
              if (widscreen < 768){
                $('.btn-floating-register').removeClass('btnhide');
                $('.register-modal').removeClass('show');
              }
              $('.close-reg').click(function(){
                $('.register-modal').toggleClass('show');
                $('.btn-floating-register').removeClass('btnhide');
              });
              $('.btn-floating-register').click(function(){
                $('.register-modal').toggleClass('show');
                $(this).addClass('btnhide');
              });
              $('.showpass-toogle').click(function(){
                if('password' == $(this).siblings('.password-input').attr('type')){
                    $(this).siblings('.password-input').prop('type', 'text');
                }else{
                    $(this).siblings('.password-input').attr('type', 'password');
                }
                $(this).toggleClass('invis');
              })
            })
            </script>
        @show

        </body>

</html>
