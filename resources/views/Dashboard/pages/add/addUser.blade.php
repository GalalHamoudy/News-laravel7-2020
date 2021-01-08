@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">إضافة عضو جديد</h4>
                </div>
            </div>
        </div>
    </div>
    {{-------------------  Main title of Page  ---------------------}}

    {{-------------------  adding form  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <!--++++++++++++++++++++++++++++++++++++-->
            @if (session()->has('done'))
            <div class="alert alert-success text-right">
                <strong>{{session('done')}} </strong>
            </div>
            @endif
            <!--++++++++++++++++++++++++++++++++++++-->
            <div class="card text-right">
            <form method="POST" action="/Dashboard/addUser" enctype="multipart/form-data">
                @csrf
                <div class="header">
                    <h2>إضافة عضو جديد</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <h2 class="card-inside-title">اسم عضو</h2>
                            <div class="form-group">
                            <input type="text" class="form-control" name="name" required min="5" max="150" value="{{old('name')}}">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('name')
                                    <label id="name" class="error" for="name">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <h2 class="card-inside-title">البريد الالكتروني</h2>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required min="5" max="150" value="{{old('email')}}">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('email')
                                    <label id="email" class="error" for="email">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <h2 class="card-inside-title">كلمة المرور</h2>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" required min="6" max="150" >
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('password')
                                    <label id="password" class="error" for="password">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <h2 class="card-inside-title">وصف العضو</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="bio" required min="5" max="150" value="{{old('bio')}}">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('bio')
                                    <label id="bio" class="error" for="bio">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <h2 class="card-inside-title"> نوع العضو</h2>
                                <select name="role" required>
                                    @if (Auth()->user()->isAbleTo('THEadmin'))
                                    <option value="admin">مسئول</option>
                                    <option value="supervisor">مشرف</option>
                                    @endif

                                    @if (Auth()->user()->isAbleTo('THEsupervisor'))
                                    <option value="writer">محرر</option>
                                    <option value="user" selected>مستخدم</option>
                                    @endif
                                </select>
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('role')
                                    <label id="role" class="error" for="role">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            <hr>
                            <h2 class="card-inside-title"> صورة العضو</h2>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLangHTML" name="picture" required>
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="إضافة صورة"></label>
                            </div>
                            <!--++++++++++++++++++++++++++++++++++++-->
                            @error('picture')
                                <label id="picture" class="error" for="picture">{{ $message }}</label>
                            @enderror
                            <!--++++++++++++++++++++++++++++++++++++-->
                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">إضافة</button>
                            </div>
                    </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    {{-------------------  adding form  ---------------------}}

{{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--}}
@endsection
