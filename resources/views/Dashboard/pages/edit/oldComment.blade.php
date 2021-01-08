@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">التحكم في التعليقات القديمة</h4>
                </div>
            </div>
        </div>
    </div>
    {{-------------------  Main title of Page  ---------------------}}


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
                        <!--++++++++++++++++++++++++++++++++++++-->
                        @if (session()->has('done'))
                        <div class="alert alert-success text-right">
                            <strong>{{session('done')}} </strong>
                        </div>
                        @endif
                        <!--++++++++++++++++++++++++++++++++++++-->
            <div class="card text-right">
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>العضو</th>
                                <th>عنوان الخبر</th>
                                <th>التعليق</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--++++++++++++++++++++++++++++++++++++-->
                            @foreach ( $comments as $one)
                                <tr>
                                    <td>{{ $one->users->name }}</td>
                                    <td>{{ $one->posts->ar_name }}</td>
                                    <td>{{ $one->comment }}</td>
                                    <td>
                                        <a class="w" href="{{route('statusComment',$one->id)}}">
                                        <button type="button" class="btn btn-success btn-round">
                                            إخفاء من الموقع
                                        </button>
                                        </a>
                                    </td>


                                </tr>
                            @endforeach
                            <!--++++++++++++++++++++++++++++++++++++-->
                        </tbody>
                    </table>
                    <!--++++++++++++++++++++++++++++++++++++-->
                    {{-- {{ $comments->links() }} --}}
                    <!--++++++++++++++++++++++++++++++++++++-->
                </div>
            </div>
        </div>
    </div>






    {{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--}}
@endsection
