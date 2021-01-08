@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">التحكم في الاقسام</h4>
                </div>
            </div>
        </div>
    </div>
    {{-------------------  Main title of Page  ---------------------}}

    {{-------------------  show data in tables  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            {{-- ------------------------------------------- --}}
            @if (session()->has('done'))
            <div class="alert alert-success text-right">
                <strong>{{session('done')}} </strong>
            </div>
            @endif
            {{-- ------------------------------------------- --}}
            @foreach ( $categories as $one)
            <div class="card text-center">
                <div class="body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label> اسم القسم</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->ar_name }}"
                                    />
                                </div>
                                <label> حالة القسم</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->status == 1 ? 'مفعل':'غير مفعل' }}"
                                    />
                                </div>

                            </div>
                            <div class="col-md-4">
                                <label> نبذه عن القسم</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->ar_description }}"
                                    />
                                </div>

                            </div>
                            <div class="col-md-4">
                                <label>صورة الرئيسية للمقال</label>
                                <div class="form-group">
                                    <img
                                        class="img-thumbnail mx-auto d-block"
                                        style="width: 200px;height: 200px;"
                                        src="{{asset('upload/category/'.$one->picture)}}"
                                    />
                                </div>
                                <div class="m-auto">
                                    <a class="w" href="{{route('stautsCategory',$one->id)}}">
                                        <button
                                        type="button"
                                        class="btn btn-warning btn-success btn-round waves-effect"
                                        >
                                            @if ($one->status == 1)
                                            إلغاء تفعيل
                                            @elseif($one->status == 0)
                                            تفعيل
                                            @endif
                                        </button>
                                        </a>

                                        <a class="w" href="{{route('updateCategory',$one->id)}}">
                                        <button
                                            type="button"
                                            class="btn btn-success btn-round"
                                        >
                                            تعديل
                                        </button>
                                        </a>

                                        <a class="w" href="{{route('deleteCategory',$one->id)}}">
                                        <button
                                            type="button"
                                            class="btn btn-primary btn-round"
                                        >
                                        حذف
                                        </button>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
            <!--++++++++++++++++++++++++++++++++++++-->
            {{ $categories->links() }}
            <!--++++++++++++++++++++++++++++++++++++-->
        </div>
    </div>
    {{-------------------  show data in tables  ---------------------}}

{{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--}}
@endsection
