@extends('website.layouts.main')

@section('content')
    {{--######################################################################################--}}



    {{----------------- the start ----------------}}
    <div class="news-post-wrapper-sm ">
        <h1 class="text-center">
            {{__('website.facebook_title')}}
        </h1>
        <div class="text-center">
          <a href="https://www.facebook.com/Sad-Vincent-106656187465284" class="btn btn-dark font-weight-bold mb-4">facebook</a>
        </div>
        <p class="fs-15 d-flex justify-content-center align-items-center m-0">
          {{now()}}
        </p>
        <p class="pt-4 pb-4 text-center">
            {{__('website.facebook_body')}}
        </p>
      </div>
      {{----------------- the start ----------------}}





<div class="text-center">
    {{----------------- show posts from facebook ----------------}}
    <script>
    window.fbAsyncInit = function() {
        FB.init({
        appId            : '176535214167393',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v9.0'
        });
    };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    {{----------------- show posts from facebook ----------------}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v9.0&appId=176535214167393&autoLogAppEvents=1" nonce="71Lfq95I"></script>
    {{----------------- show posts from facebook ----------------}}
    <div class="fb-page" data-href="https://www.facebook.com/Sad-Vincent-106656187465284" data-tabs="timeline,events,messages" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Sad-Vincent-106656187465284" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Sad-Vincent-106656187465284">‏‎Sad Vincent‎‏</a></blockquote></div>
    {{----------------- show posts from facebook ----------------}}

    <hr>
    <br>
</div>


    {{--######################################################################################--}}
@endsection
