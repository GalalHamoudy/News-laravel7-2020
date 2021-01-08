@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">إضافة خبر جديد</h4>
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
            <form method="POST" action="/Dashboard/addPost" enctype="multipart/form-data">
                @csrf
                <div class="header">
                    <h2>إضافة خبر جديد</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <h2 class="card-inside-title">معلومات الخبر باللغة العربية</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ar_name" required max="150" min="5" placeholder="عنوان الخبر">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('ar_name')
                                <label id="ar_name" class="error" for="name">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="ar_summary" required max="150" min="5" placeholder="نبذه عن الخبر">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('ar_summary')
                                <label id="ar_summary" class="error" for="summary">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" name="ar_description" required min="20" placeholder="الخبر كاملا"></textarea>
                                </div>
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('ar_description')
                                <label id="ar_description" class="error" for="description">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                            <h2 class="card-inside-title">News information in English</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="en_name" required max="150" min="5" placeholder="News title">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('en_name')
                                <label id="en_name" class="error" for="name">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="en_summary" required max="150" min="5" placeholder="summary about the news">
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('en_summary')
                                <label id="en_summary" class="error" for="summary">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" name="en_description" required min="20" placeholder="The whole news"></textarea>
                                </div>
                                <!--++++++++++++++++++++++++++++++++++++-->
                                @error('en_description')
                                <label id="en_description" class="error" for="description">{{ $message }}</label>
                                @enderror
                                <!--++++++++++++++++++++++++++++++++++++-->
                            </div>
                            <h2 class="card-inside-title"> حالة الخبر</h2>
                                <select name="status" required>
                                    <option value="1" selected>مفعل</option>
                                    <option value="0">غير مفعل</option>
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
                                        <option value="{{ $one->id }}">{{ $one->ar_name}}</option>
                                    @endforeach
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                </select>
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                    @error('category_id')
                                    <label id="category_id" class="error" for="category_id">{{ $message }}</label>
                                    @enderror
                                    <!--++++++++++++++++++++++++++++++++++++-->
                                <hr>
                                <h2 class="card-inside-title"> صورة الرئيسية للخبر</h2>
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
                                <button type="submit" class="btn btn-success">نشر الخبر</button>
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
