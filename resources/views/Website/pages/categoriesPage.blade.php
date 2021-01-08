@extends('website.layouts.main')

@section('content')
    {{--######################################################################################--}}

        {{----------------- the start ----------------}}
        <div class="news-post-wrapper-sm ">
            <h1 class="text-center">
                {{__('website.Section_title')}}

            </h1>
            <div class="text-center">
                <a href="https://www.facebook.com/Sad-Vincent-106656187465284" class="btn btn-dark font-weight-bold mb-4">facebook</a>
            </div>
            <p class="fs-15 d-flex justify-content-center align-items-center m-0">
              {{now()}}
            </p>
            <p class="pt-4 pb-4 text-center">
                {{__('website.Section_body')}}
            </p>
          </div>
          {{----------------- the start ----------------}}


          <div class="world-news text-right">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative float-right">
                  <h3 class="section-title">{{__('website.tellSection')}}</h3>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">

              @foreach ( $categories as $one)
              @if ($one->type == 0 && $one->status == 1)
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2 text-center">
                <div class="position-relative image-hover">
                  <img
                    src="{{asset('upload/category/'.$one->picture)}}"
                    class="img-fluid"
                    alt="world-news"
                    style='height: 200px;'
                  />
                  <span class="thumb-title">{{ $one[LaravelLocalization::getCurrentLocale()."_name"] }}</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  {{ $one[LaravelLocalization::getCurrentLocale()."_description"] }}
                </h5>
                <p class="fs-15 font-weight-normal">
                    {{__('website.countSections')}}
                    <span class="MG_count"> [ {{ App\models\categories::where('type',$one->id)->where('status',1)->count() }} ] </span>
                  </p>
                  <p class="fs-15 font-weight-normal">
                    {{__('website.countPosts')}}
                    <span class="MG_count"> [ {{ App\models\posts::where('category_id',$one->id)->where('status',1)->count() }} ] </span>
                    </p>
                  <a href="{{ route('categorySHOW',$one->id) }}" class="font-weight-bold text-dark pt-2"
                    >
                    <button type="button" class="btn btn-warning">
                    {{__('website.seeSection')}}
                </button>
                    </a>
              </div>
              @endif
              @endforeach

            </div>

          </div>


          {{-- -------------------------------- --}}
          <hr>
          {{-- -------------------------------- --}}



          <div class="world-news text-right">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative float-right">
                  <h3 class="section-title">{{__('website.tellSection2')}}</h3>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">

              @foreach ( $categories as $one)
              @if ($one->type != 0 && $one->status == 1)
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2 text-center">
                <div class="position-relative image-hover">
                  <img
                    src="{{asset('upload/category/'.$one->picture)}}"
                    class="img-fluid"
                    alt="world-news"
                    style='height: 200px;'
                  />
                  <span class="thumb-title">{{ $one[LaravelLocalization::getCurrentLocale()."_name"] }}</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  {{ $one[LaravelLocalization::getCurrentLocale()."_description"] }}
                </h5>
                  <p class="fs-15 font-weight-normal">
                    {{__('website.countPosts')}}
                    <span class="MG_count"> [ {{ App\models\posts::where('category_id',$one->id)->where('status',1)->count() }} ] </span>
                    </p>
                  <a href="{{ route('categorySHOW',$one->id) }}" class="font-weight-bold text-dark pt-2"
                    >
                    <button type="button" class="btn btn-warning">
                    {{__('website.seeSection')}}
                </button>
                    </a>
              </div>
              @endif
              @endforeach

            </div>
          </div>


    {{--######################################################################################--}}
@endsection
