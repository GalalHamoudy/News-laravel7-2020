@extends('website.layouts.main')

@section('content')
    {{--######################################################################################--}}



    {{----------------- the start ----------------}}
    <div class="news-post-wrapper-sm ">
        <h1 class="text-center">
            {{__('website.contact_title')}}
        </h1>
        <div class="text-center">
          <a href="https://www.facebook.com/Sad-Vincent-106656187465284" class="btn btn-dark font-weight-bold mb-4">facebook</a>
        </div>
        <p class="fs-15 d-flex justify-content-center align-items-center m-0">
          {{now()}}
        </p>
        <p class="pt-4 pb-4 text-center">
            {{__('website.contact_body')}}
        </p>
      </div>
      {{----------------- the start ----------------}}





<div class="text-center">
    <form>
        <div class="form-group">
            <label for="exampleInputname1">{{__('website.contact_name')}}</label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">{{__('website.contact_name2')}}</small>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">{{__('website.contact_email')}}</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">{{__('website.contact_email2')}}</small>
        </div>
        <div class="form-group">
          <label for="exampleInputnumber1">{{__('website.contact_phone')}}</label>
          <input type="number" class="form-control" id="exampleInputnumber1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">{{__('website.contact_text')}}</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">{{__('website.contact_send')}}</button>
      </form>
</div>


    {{--######################################################################################--}}
@endsection
