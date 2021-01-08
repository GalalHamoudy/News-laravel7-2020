@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">إنشاء حساب جديد</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-right">الاسم</label>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="bio" type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') }}" required autocomplete="bio" autofocus>
                            </div>
                            <label for="bio" class="col-md-4 col-form-label text-md-right">نبذه عنك</label>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right">البريد الالكتروني</label>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right">كلمة المرور</label>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تاكيد كلمة المرور</label>

                        </div>


                        <hr>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLangHTML" name="picture">
                                    <label class="custom-file-label" for="customFileLangHTML" data-browse="click here"></label>
                                </div>
                            </div>
                            <label for="picture" class="col-md-4 col-form-label text-md-right">صورتك الشخصية</label>

                        </div>

                        <hr>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    إنشاء الحساب
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
