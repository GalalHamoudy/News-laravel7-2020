@extends('Dashboard.layouts.main')

@section('content')
    {{--######################################################################################--}}

    {{-------------------  statistics  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6">
            <div class="card text-center">
                <div class="body">
                    <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                    <span>عدد الانشطة</span>
                    <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ $lastActivity->count()}}" data-speed="2000" data-fresh-interval="700"></span></h3>
                    <small class="text-muted">جميع الانشطة  الحادثة في الموقع</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card text-center">
                <div class="body">
                    <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                    <span>عدد اقسام الموقع</span>
                    <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ App\models\categories::count() }}" data-speed="2000" data-fresh-interval="700"></span></h3>
                    <small class="text-muted">جميع الاقسام المفعلة و غير مفعلة</small>
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
                                <th>التاريخ</th>
                                <th>العضو</th>
                                <th>النشاط</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--++++++++++++++++++++++++++++++++++++-->
                            @foreach ($lastActivity as $one)
                                <tr>
                                    <td>{{$one->created_at}}</td>
                                    <td>{{\DB::table('users')->where('id',$one->causer_id)->value('name')}}</td>
                                    <td>{{$one->description	}}</td>

                                </tr>
                            @endforeach
                            <!--++++++++++++++++++++++++++++++++++++-->
                        </tbody>
                    </table>
                    <!--++++++++++++++++++++++++++++++++++++-->
                    {{ $lastActivity->links() }}
                    <!--++++++++++++++++++++++++++++++++++++-->
                </div>
            </div>
        </div>
    </div>
    {{-------------------  online Or offline  ---------------------}}


    {{--######################################################################################--}}
@endsection
