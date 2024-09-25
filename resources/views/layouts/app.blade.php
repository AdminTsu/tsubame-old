<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LPK ツバメ日本語研修センター｜LPK TSUBAME JAPANESE TRAINING CENTER</title>

    <!-- Scripts -->
    @if( Request::segment(1)  == "register" )
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script></script>
    @else
    <script src="{{ asset('js/app.js') }}" defer></script>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <!-- End Schema.org -->
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
