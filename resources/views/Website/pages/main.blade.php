@extends('website.layouts.main')

@section('content')
    {{--######################################################################################--}}
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-theme" id="main-banner-carousel">
              <div class="item text-center">
                <div class="carousel-content-wrapper mb-2">
                  <div class="carousel-content">
                    <h1 class="font-weight-bold">
                        {{__('website.mainSlide')}}
                    </h1>
                    <h5 class="font-weight-normal m-0">
                        {{__('website.slide1')}}
                    </h5>
                  </div>
                  <div class="carousel-image">
                    <img src="{{asset('website/assets/images/dashboard/banner.jpg')}}" alt="" />
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="carousel-content-wrapper mb-2">
                  <div class="carousel-content">
                    <h1 class="font-weight-bold">
                        {{__('website.mainSlide')}}

                    </h1>
                    <h5 class="font-weight-normal m-0">
                        {{__('website.slide2')}}
                    </h5>
                  </div>
                  <div class="carousel-image">
                    <img src="{{asset('website/assets/images/dashboard/banner_1.jpg')}}" alt="" />
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="carousel-content-wrapper mb-2">
                  <div class="carousel-content">
                    <h1 class="font-weight-bold">
                        {{__('website.mainSlide')}}
                    </h1>
                    <h5 class="font-weight-normal m-0">
                        {{__('website.slide3')}}
                    </h5>
                  </div>
                  <div class="carousel-image">
                    <img src="{{asset('website/assets/images/dashboard/banner_2.jpg')}}" alt="" />
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="carousel-content-wrapper mb-2">
                  <div class="carousel-content">
                    <h1 class="font-weight-bold">
                        {{__('website.mainSlide')}}
                    </h1>
                    <h5 class="font-weight-normal m-0">
                        {{__('website.slide4')}}
                    </h5>
                  </div>
                  <div class="carousel-image">
                    <img src="{{asset('website/assets/images/dashboard/banner_3.jpg')}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- -------------------------------------------- -->
          <!-- -------------------------------------------- -->
        </div>
        <!-- ---------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------- -->
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
                  <span>
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
            <div class="row d-flex justify-content-center">
            <!--++++++++++++++++++++++++++++++++++++-->
            {{ $categories->links() }}
            <!--++++++++++++++++++++++++++++++++++++-->
          </div>
        </div>
    </div>


    {{--######################################################################################--}}
@endsection
