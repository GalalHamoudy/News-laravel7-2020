@extends('Dashboard.layouts.main')

@section('content')
    {{--######################################################################################--}}

    {{-------------------  statistics  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-4 col-md-6">
            <div class="card text-center">
                <div class="body">
                    <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                    <span>عدد اعضاء الموقع</span>
                    <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ App\user::count() }}" data-speed="2000" data-fresh-interval="700"></span></h3>
                    <small class="text-muted">المستخدمين و المشرفين علي الموقع</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card text-center">
                <div class="body">
                    <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                    <span>عدد اقسام الموقع</span>
                    <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ App\models\categories::count() }}" data-speed="2000" data-fresh-interval="700"></span></h3>
                    <small class="text-muted">جميع الاقسام المفعلة و غير مفعلة</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card text-center">
                <div class="body">
                    <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                    <span>عدد مقالات الموقع</span>
                    <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ App\models\posts::count() }}" data-speed="2000" data-fresh-interval="700"></span></h3>
                    <small class="text-muted">جميع المقالات المفعلة و غير مفعلة</small>
                </div>
            </div>
        </div>
    </div>
    {{-------------------  statistics  ---------------------}}

    {{-------------------  online Or offline  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card text-right">
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>البريد الالكتروني</th>
                                <th>الحالة</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!--++++++++++++++++++++++++++++++++++++-->
                            @foreach ($users as $one)
                                <tr>
                                    <td><img class="img-thumbnail d-block" style="width: 100px;height: 100px;" src="{{asset('upload/user/'.$one->picture)}}"></td>
                                    <td>{{$one->name}}</td>
                                    <td>{{$one->email}}</td>
                                    <td>
                                        @if ($one->isOnline())
                                            نشط الان
                                            @else
                                            غير نشط
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            <!--++++++++++++++++++++++++++++++++++++-->
                        </tbody>
                    </table>
                    <!--++++++++++++++++++++++++++++++++++++-->
                    {{ $users->links() }}
                    <!--++++++++++++++++++++++++++++++++++++-->
                </div>
            </div>
        </div>
    </div>
    {{-------------------  online Or offline  ---------------------}}


    {{--######################################################################################--}}
@endsection
