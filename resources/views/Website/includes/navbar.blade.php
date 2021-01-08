<header id="header">
    <div class="container">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div
          class="d-flex justify-content-between align-items-center navbar-top"
        >
          <ul class="navbar-left">
            <li>{{ date("Y/m/d") }}</li>
            <li>{{ date("h:i:sa") }}</li>
          </ul>
          <div>
            <a class="navbar-brand" href="#"
              ><img src="{{asset('website/assets/images/logo.svg')}}" alt=""
            /></a>
          </div>
          <div class="d-flex">
            <ul class="navbar-right">


                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach



                {{-- <li>
                  <a href="#">ENGLISH</a>
                </li>
                <li>
                  <a href="#">ESPAÑOL</a>
                </li> --}}
              </ul>
            {{-- <ul class="social-media">
              <li>
                <a href="#">
                  <i class="mdi mdi-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-youtube"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-linkedin"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-twitter"></i>
                </a>
              </li>
            </ul> --}}
          </div>
        </div>
        <div class="navbar-bottom-menu">
          <button
            class="navbar-toggler"
            type="button"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="navbar-collapse justify-content-center collapse"
            id="navbarSupportedContent"
          >
            <ul
              class="navbar-nav d-lg-flex justify-content-between align-items-center"
            >
              <li>
                <button class="navbar-close">
                  <i class="mdi mdi-close"></i>
                </button>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{__('website.login')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"
                  >{{__('website.register')}}</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contactUs') }}">{{__('website.contactUs')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('userPage')}}">{{__('website.userPage')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('categoriesPage')}}"
                  >{{__('website.categoriesPage')}}</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('facebook')}}"
                  >{{__('website.facebook')}}</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('mainPage')}}">{{__('website.mainPage')}}</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- ---------------------------------------------------------- -->
      <!-- ---------------------------------------------------------- -->
      <hr>
      <!-- partial -->
    </div>
  </header>
