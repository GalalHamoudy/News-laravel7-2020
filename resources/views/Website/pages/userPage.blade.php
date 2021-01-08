@extends('website.layouts.main')

@section('content')
    {{--######################################################################################--}}


<div class="contanier">

    {{----------------- the start ----------------}}
    <div class="news-post-wrapper-sm ">
        <h1 class="text-center">
            {{__('website.Know_title')}}
        </h1>
        <div class="text-center">
            <a href="https://www.facebook.com/Sad-Vincent-106656187465284" class="btn btn-dark font-weight-bold mb-4">facebook</a>
        </div>
        <p class="fs-15 d-flex justify-content-center align-items-center m-0">
          {{now()}}
        </p>
        <p class="pt-4 pb-4 text-center">
            {{__('website.Know_body')}}
        </p>
      </div>
      {{----------------- the start ----------------}}


      <div class="row d-flex justify-content-center text-center">
        @foreach ( $user as $one)

        <div class="col-md-4 mb-2">
            <div class="author-box border p-5">
                <div class="text-center">
                  <img style="width: 200px;height: 200px;" src="{{asset('upload/user/'.$one->picture)}}" alt="news" class="img-lg img-fluid img-rounded mb-3">
                  <p class="fs-12 m-0">
                    {{$one->hasRole('admin')? __('website.admin'):false}}
                    {{ $one->hasRole('supervisor')? __('website.supervisor'):false }}
                    {{ $one->hasRole('writer')? __('website.writer'):false }}
                    {{$one->hasRole('user')? __('website.user'):false }}
                  </p>
                <h5 class="mb-2 font-weight-medium">{{$one->name}}</h5>

                </div>
                <p class="fs-12 m-0">{{__('website.email')}}</p>
                <p>
                    {{ $one->email }}
                </p>
                <p class="fs-12 m-0">{{__('website.bio')}}</p>
                <p>
                    {{ $one->bio }}
                </p>
              </div>
        </div>
        @endforeach
      </div>

    </div>
    {{--######################################################################################--}}
@endsection
