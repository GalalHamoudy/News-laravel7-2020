<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Made by mohammed galal">
        <title>World Vision</title>

        {{-------------------  style files  ---------------------}}
        <link rel="stylesheet" href="{{asset('website/assets/vendors/mdi/css/materialdesignicons.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('website/assets/vendors/aos/dist/aos.css/aos.css')}}" />
        <link rel="stylesheet" href="{{asset('website/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('website/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
        {{-------------------  style files  ---------------------}}

  </head>

  <body>
    <div class="container-scroller">
        <div class="main-panel">
    {{-------------------  include  ---------------------}}
    @include('website.includes.navbar')
    {{-------------------  yield  ---------------------}}
    <div class="container">
        @yield('content')
    </div>
    {{-------------------  yield  ---------------------}}
    @include('website.includes.footer')
    {{-------------------  include  ---------------------}}
        </div>
    </div>
    {{-------------------  script files  ---------------------}}
    <script src="{{asset('website/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('website/assets/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('website/assets/js/demo.js')}}"></script>
    {{-------------------  script files  ---------------------}}

</body>
</html>
