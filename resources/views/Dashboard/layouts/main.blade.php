<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Made by mohammed galal">
        <title>Admin</title>
        <link rel="icon" type="image/png" href="{{asset('website/images/icons/favicon.png')}}" />

        {{-------------------  style files  ---------------------}}
        <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/morris.css')}}" />
        <link rel="stylesheet" href="{{asset('admin/assets/css/jquery-jvectormap-2.0.3.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/mg.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/color_skins.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        {{-- ----------------------------------------- --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
        {{-------------------  style files  ---------------------}}

    </head>
    <body class="theme-black rtl">
        {{-------------------  include  ---------------------}}
        @include('Dashboard.includes.sidebar')
        {{-------------------  include  ---------------------}}
        <section class="content home">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row clearfix">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <h2>لوحة التحكم</h2>
                                <ul class="breadcrumb padding-0">
                                    <li class="breadcrumb-item"><a><i class="zmdi zmdi-home"></i></a></li>
                                    <li class="breadcrumb-item active">لوحة التحكم</li>
                                </ul>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="input-group m-b-0">
                                    <input type="text" class="form-control" placeholder="بحث ...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-------------------  yield  ---------------------}}
                @yield('content')
                {{-------------------  yield  ---------------------}}
                </div>
        </section>
    </body>

    {{-------------------  script files  ---------------------}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{asset('admin/assets/js/libscripts.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/knob.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/jvectormap.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/morrisscripts.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/sparkline.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/doughnut.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/index.js')}}"></script>
    {{-- ----------------------------------------- --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>

    {{-------------------  script files  ---------------------}}
    {{-------------------  yield  ---------------------}}
    @yield('script')
    {{-------------------  yield  ---------------------}}
</html>
