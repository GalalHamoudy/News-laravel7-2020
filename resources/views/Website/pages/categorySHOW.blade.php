@extends('website.layouts.main')

@section('content')
    {{--######################################################################################--}}

        {{----------------- the start ----------------}}
        <div class="news-post-wrapper-sm ">
            <h1 class="text-center">
              {{ $category[LaravelLocalization::getCurrentLocale()."_name"] }}
            </h1>
            <div class="text-center">
                <a href="https://www.facebook.com/Sad-Vincent-106656187465284" class="btn btn-dark font-weight-bold mb-4">facebook</a>
            </div>
            <p class="fs-15 d-flex justify-content-center align-items-center m-0">
              {{now()}}
            </p>
            <p class="pt-4 pb-4 text-center">
                {{ $category[LaravelLocalization::getCurrentLocale()."_description"] }}</p>
          </div>
          {{----------------- the start ----------------}}







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
              @endforeach

            </div>
          </div>


          {{-- -------------------------------- --}}















          <div class="row">
            <div class="col-sm-12">
              <div class="d-flex position-relative float-right">
                <h3 class="section-title">{{__('website.cShow_news')}}</h3>
              </div>
            </div>
          </div>




          <div class="row d-flex justify-content-center text-center">
            @foreach ( $posts as $one)
            <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img src="{{asset('upload/post/'.$one->picture)}}" class="img-fluid" alt="world-news" style='height: 400px;'>
                <span class="thumb-title">{{$one->created_at}}</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                    {{$one[LaravelLocalization::getCurrentLocale()."_name"]}}
                </h1>
                <h2 class="font-weight-600 mt-3">
                    {{$one[LaravelLocalization::getCurrentLocale()."_summary"]}}
                </h2>
                <a href="{{ route('oneSHOW',$one->id) }}" class="font-weight-bold text-dark pt-2"
                    >
                    <button type="button" class="btn btn-warning">
                        {{__('website.cShow_reedAll')}}
                </button>
                    </a>
              </div>
              @endforeach
          </div>




    {{--######################################################################################--}}
@endsection
