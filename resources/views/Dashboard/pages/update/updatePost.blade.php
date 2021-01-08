@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">تعديل الخبر الحالي</h4>
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
            <form method="POST" action="{{route('updatePostID',$posts->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="header">
                    <h2>تعديل الخبر الحالي</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <h2 class="card-inside-title">معلومات الخبر باللغة العربية</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ar_name" required max="150" min="5" value="{{ $posts->ar_name }}">
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                    @error('ar_name')
                                        <label id="ar_name" class="error" for="ar_name">{{ $message }}</label>
                                    @enderror
                                    <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="ar_summary" required max="150" min="5" value="{{ $posts->ar_summary }}">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('ar_summary')
                                    <label id="ar_summary" class="error" for="ar_summary">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" name="ar_description" required min="20">{{ $posts->ar_description }}</textarea>
                                </div>
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('ar_description')
                                    <label id="ar_description" class="error" for="ar_description">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                            <h2 class="card-inside-title">News information in English</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="en_name" required max="150" min="5" value="{{ $posts->en_name }}">
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                    @error('en_name')
                                        <label id="en_name" class="error" for="en_name">{{ $message }}</label>
                                    @enderror
                                    <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="en_summary" required max="150" min="5" value="{{ $posts->en_summary }}">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('en_summary')
                                    <label id="en_summary" class="error" for="en_summary">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" name="en_description" required min="20">{{ $posts->en_description }}</textarea>
                                </div>
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('en_description')
                                    <label id="en_description" class="error" for="en_description">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                            <h2 class="card-inside-title"> حالة الخبر</h2>
                                <select name="status" required>
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                    @if ($posts->status == 1)
                                        <option value="1" selected>مفعل</option>
                                        <option value="0">غير مفعل</option>
                                    @elseif($posts->status == 0)
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
                            <h2 class="card-inside-title">القسم التابع له الخبر</h2>
                                <select name="category_id" required>
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                    @foreach ( $categories as $one)
                                        @if ($posts->category_id == $one->id )
                                            <option value="{{ $one->id }}" selected>{{ $one->name}}</option>
                                        @else
                                            <option value="{{ $one->id}}">{{ $one->name}}</option>
                                        @endif
                                    @endforeach
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                </select>
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                    @error('category_id')
                                        <label id="category_id" class="error" for="category_id">{{ $message }}</label>
                                    @enderror
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                <hr>
                                    <h2 class="card-inside-title"> صورة الرئيسية للمقال</h2>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLangHTML" name="newPicture">
                                        <input type="hidden" value="{{ $posts->picture }}" name="picture">
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
    {{-------------------  updateing form  ---------------------}}

{{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--}}
@endsection
