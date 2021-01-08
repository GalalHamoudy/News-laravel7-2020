@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">تعديل القسم الحالي</h4>
                </div>
            </div>
        </div>
    </div>
    {{-------------------  Main title of Page  ---------------------}}

    {{-------------------  updateing form  ---------------------}}
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
            <form method="POST" action="{{route('updateCategoryID',$categories->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="header">
                    <h2>تعديل القسم الحالي</h2>
                </div>
                <div class="body">
                    <h2 class="card-inside-title">اسم القسم و نبذه عن القسم باللغة العربية</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                            <input type="text" class="form-control" name="ar_name" required max="150" min="5" value="{{ $categories->ar_name }}">
                            <!--++++++++++++++++++++++++++++++++++++-->
                                @error('ar_name')
                                    <label id="ar_name" class="error" for="ar_name">{{ $message }}</label>
                                @enderror
                            <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ar_description" required min="20" value="{{ $categories->ar_description }}">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('ar_description')
                                    <label id="ar_description" class="error" for="ar_description">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title">The name and the description of the section in english</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                            <input type="text" class="form-control" name="en_name" required max="150" min="5" value="{{ $categories->en_name }}">
                            <!--++++++++++++++++++++++++++++++++++++-->
                                @error('en_name')
                                    <label id="en_name" class="error" for="en_name">{{ $message }}</label>
                                @enderror
                            <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="en_description" required min="20" value="{{ $categories->en_description }}">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('en_description')
                                    <label id="en_description" class="error" for="en_description">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title"> حالة القسم</h2>
                        <select name="status" required>
                            <!--++++++++++++++++++++++++++++++++++++-->
                            @if ($categories->status == 1)
                                <option value="1" selected>مفعل</option>
                                <option value="0">غير مفعل</option>
                            @elseif($categories->status == 0)
                                <option value="1">مفعل</option>
                                <option value="0" selected>غير مفعل</option>
                            @endif
                            <!--++++++++++++++++++++++++++++++++++++-->
                        </select>
                        <!--++++++++++++++++++++++++++++++++++++-->
                        @error('status')
                            <label id="status" class="error" for="status">{{ $message }}</label>
                        @enderror
                        <!--++++++++++++++++++++++++++++++++++++-->
                        <hr>
                        <h2 class="card-inside-title"> صورة القسم</h2>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML" name="newPicture">
                            <input type="hidden" value="{{ $categories->picture }}" name="picture">
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
            </form>
            </div>
        </div>
    </div>
    {{-------------------  updateing form  ---------------------}}

{{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--}}
@endsection
