@extends('website.layouts.main')

@section('content')
    {{--######################################################################################--}}


          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img src="{{asset('upload/post/'.$posts->picture)}}" class="img-fluid" alt="world-news" style='height: 400px;'>
                <span class="thumb-title">{{$posts->created_at}}</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                    {{ $posts[LaravelLocalization::getCurrentLocale()."_name"] }}
                </h1>
                <h2 class="font-weight-600 mt-3">
                    {{$posts[LaravelLocalization::getCurrentLocale()."_summary"]}}
                </h2>
                <h3 class="font-weight-600 mt-3">
                    {{ $posts[LaravelLocalization::getCurrentLocale()."_description"] }}
                </h3>
              </div>
              {{--  --}}

              <div class="contact-wrap">
                  <hr>
                              <!--++++++++++++++++++++++++++++++++++++-->
            @if (session()->has('done'))
            <div class="alert alert-success text-right">
                <strong>{{session('done')}} </strong>
            </div>
            @endif
            <!--++++++++++++++++++++++++++++++++++++-->
                  <hr>
                  @if (Auth()->user())
                <div class="row">
                  <div class="col-lg-6  mb-5 mb-sm-2">
                    <form method="POST" action="/Dashboard/addComment" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea name="com" class="form-control textarea" placeholder="{{__('website.com1')}}" id="message"></textarea>
                          </div>
                        <!--++++++++++++++++++++++++++++++++++++-->
                        @error('com')
                            <label id="com" class="error" for="com">{{ $message }}</label>
                        @enderror
                        <input type="hidden" name="post_id" value="{{ $posts->id }}">
                        <!--++++++++++++++++++++++++++++++++++++-->
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-dark font-weight-bold">{{__('website.com2')}}</button>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>
                  <div class="col-lg-6 mb-2 mb-lg-2">
                    <div class="contact-right-padding">
                      <div class="row">
                        <div class="col-sm-12  mb-2 mb-lg-2">
                          <h1>{{__('website.com3')}}</h1>
                          <p class="mb-4 fs-15">
                            {{__('website.com4')}}
                          </p>
                          <p class="mb-0 font-weight-bold fs-14">
                            {{__('website.com5')}}
                          </p>
                          <p class="mb-4 font-weight-medium fs-14">
                            {{__('website.com6')}}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                <hr><hr>
              </div>
            {{--  --}}



{{--  --}}
          </div>
          <h1 style="text-align: center">{{__('website.com7')}}</h1>
          <hr>
          <div class="row text-center">
            @foreach ( $comments as $one)
            @if ($one->status == 0)
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('upload/user/'.$one->users->picture)}}" alt="{{ $one->users->name }}">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $one->users->name }}</h5>
                          <p class="card-text">{{ $one->comment }}</p>
                          <p class="card-text"><small class="text-muted">{{ $one->created_at }}</small></p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>



    {{--######################################################################################--}}
@endsection
