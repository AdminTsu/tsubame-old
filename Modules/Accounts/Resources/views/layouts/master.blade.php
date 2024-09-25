<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Accounts</title>

       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="{{ asset('css/accounts.css') }}">
       @section('styles')
       @show
    </head>
    <body>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ asset('js/accounts.js') }}"></script> --}}
        @section('scripts')
        @show
    </body>
</html>
