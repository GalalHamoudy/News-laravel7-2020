@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">التحكم في الاعضاء</h4>
                </div>
            </div>
        </div>
    </div>
    {{-------------------  Main title of Page  ---------------------}}

    {{-------------------  show data in tables  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <!--++++++++++++++++++++++++++++++++++++-->
            @if (session()->has('done'))
            <div class="alert alert-success text-right">
                <strong>{{session('done')}} </strong>
            </div>
            @endif
            <!--++++++++++++++++++++++++++++++++++++-->
            @foreach ( $users as $one)
            <div class="card text-center">
                <div class="body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label> اسم العضو</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->name }}"
                                    />
                                </div>
                                <label> حالة العضو</label>
                                <div class="form-group">
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                    @if (\DB::table('role_user')->where('user_id',$one->id)->value('role_id') == 1)
                                        <input type="text" class="form-control" disabled value="مسئول"/>
                                    @elseif(\DB::table('role_user')->where('user_id',$one->id)->value('role_id') == 2)
                                        <input type="text" class="form-control" disabled value="مشرف"/>
                                    @elseif(\DB::table('role_user')->where('user_id',$one->id)->value('role_id') == 3)
                                        <input type="text" class="form-control" disabled value="محرر"/>
                                    @elseif(\DB::table('role_user')->where('user_id',$one->id)->value('role_id') == 4)
                                        <input type="text" class="form-control" disabled value="مستخدم"/>
                                    @endif
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                </div>
                                <label>البريد الالكتروني</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->email }}"
                                    />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label> نبذه عن العضو</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->bio }}"
                                    />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>صورة  العضو</label>
                                <div class="form-group">
                                    <img
                                        class="img-thumbnail mx-auto d-block"
                                        style="width: 200px;height: 200px;"
                                        src="{{asset('upload/user/'.$one->picture)}}"
                                    />
                                </div>
                                @if (Auth()->user()->isAbleTo('THEadmin'))
                                <div class="m-auto">
                                    <a class="w" href="{{route('updateUser',$one->id)}}">
                                    <button
                                        type="button"
                                        class="btn btn-raised btn-success btn-round waves-effect"
                                    >
                                        تعديل
                                    </button>
                                    </a>
                                    <a class="w" href="{{route('deleteUser',$one->id)}}">
                                    <button
                                        type="button"
                                        class="btn btn-raised btn-primary btn-round waves-effect"
                                    >
                                        حذف
                                    </button>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
            <!--++++++++++++++++++++++++++++++++++++-->
            {{ $users->links() }}
            <!--++++++++++++++++++++++++++++++++++++-->
        </div>
    </div>
    {{-------------------  show data in tables  ---------------------}}

{{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--}}
@endsection
