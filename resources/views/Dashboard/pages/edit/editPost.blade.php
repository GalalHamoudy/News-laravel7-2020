@extends('Dashboard.layouts.main')

@section('content')
{{--######################################################################################--}}

    {{-------------------  Main title of Page  ---------------------}}
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="body">
                    <h4 class="margin-0">التحكم في المقالات</h4>
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
            @foreach ( $posts as $one)
            <div class="card text-center">
                <div class="body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label> اسم المقال</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->ar_name }}"
                                    />
                                </div>
                                <label> حالة المقال</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->status == 1 ? 'مفعل':'غير مفعل' }}"
                                    />
                                </div>
                                <label> القسم التابع له المقال</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->categories->ar_name }}"
                                    />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label> نبذه عن المقال</label>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        disabled=""
                                        value="{{ $one->ar_summary }}"
                                    />
                                </div>
                                <label> المقال كاملا</label>
                                <div class="form-group">
                                    <textarea
                                        rows="4"
                                        class="form-control no-resize"
                                        disabled
                                    >{{ $one->ar_description }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>صورة الرئيسية للمقال</label>
                                <div class="form-group">
                                    <img
                                        class="img-thumbnail mx-auto d-block"
                                        style="width: 200px;height: 200px;"
                                        src="{{asset('upload/post/'.$one->picture)}}"
                                    />
                                </div>
                                <div class="m-auto">
                                    <a class="w" href="{{route('stautsPost',$one->id)}}">
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

                                    <a class="w" href="{{route('updatePost',$one->id)}}">
                                    <button
                                        type="button"
                                        class="btn btn-success btn-round"
                                    >
                                        تعديل
                                    </button>
                                    </a>

                                        <a class="w" href="{{route('deletePost',$one->id)}}">
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
            {{ $posts->links() }}
            <!--++++++++++++++++++++++++++++++++++++-->
        </div>
    </div>
    {{-------------------  show data in tables  ---------------------}}

{{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--}}
@endsection
