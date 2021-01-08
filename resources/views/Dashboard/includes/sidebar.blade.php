{{-------------------  right Sidebar small  ---------------------}}
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li><a href="javascript:void(0);" class="bars" style="display: inline;"></a></li>
        <li class="power">
        <a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a>
            <a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a>
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            <a href="{{ route('logout') }}" class="mega-menu"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"

            ><i class="zmdi zmdi-power"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</aside>
{{-------------------  right Sidebar small  ---------------------}}

{{-------------------  right Sidebar big  ---------------------}}
<aside class="right_menu">
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="profile.html"><img src="{{asset('upload/user/'.Auth::user()->picture)}}" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6> {{ Auth::user()->name }}</h6>
                            <p class="m-b-0"> {{ Auth::user()->email }}</p>
                            <p class="m-b-0"> {{ Auth::user()->bio }}</p>
                        </div>
                    </div>
                </li>
                <li class="active open"> <a href="{{route('main')}}"><i class="zmdi zmdi-home"></i><span>الرئيسية</span></a></li>
                <li class="header">الاعدادات الرئيسية</li>




                @if (Auth()->user()->isAbleTo('THEsupervisor'))

                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>الاعضاء</span> <span class="badge badge-default float-right">99</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('addUser')}}">إضافة عضو</a></li>
                        <li><a href="{{route('allUser')}}"> جميع الاعضاء</a></li>


                        {{-- @if (Auth()->user()->isAbleTo('THEadmin'))
                        <li><a href="{{route('editUserAdmin')}}">المسئولين</a></li>
                        <li><a href="{{route('editUserSupervisor')}}">المشرفين</a></li>
                        @endif


                        <li><a href="{{route('editUserWriter')}}">المحررين</a></li>
                        <li><a href="{{route('editUserUser')}}">المستخدمين</a></li> --}}
                    </ul>
                </li>

                @endif




                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>سجل الانشطة</span> <span class="badge badge-default float-right">99</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('activityUser')}}">الانشطة في جزء الاعضاء</a></li>
                        <li><a href="{{route('activityCategory')}}">الانشطة في جزء الاقسام</a></li>
                        <li><a href="{{route('activityPost')}}">الانشطة في جزء المقالات</a></li>
                        <li><a href="{{route('activityComment')}}">الانشطة في جزء التعليقات</a></li>
                    </ul>
                </li>

                @if (Auth()->user()->isAbleTo('THEsupervisor'))
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>الاقسام</span> <span class="badge badge-success float-right">99</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('addCategory')}}">اضافة قسم</a></li>
                        <li><a href="{{route('editCategory')}}">التحكم في الاقسام</a></li>
                    </ul>
                </li>
                @endif

                @if (Auth()->user()->isAbleTo('THEwriter'))
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>المقالات</span> <span class="badge badge-default float-right">99</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('addPost')}}">إضافة مقال</a></li>
                        <li><a href="{{route('editPost')}}">التحكم في المقالات</a></li>
                    </ul>
                </li>
                @endif

                @if (Auth()->user()->isAbleTo('THEwriter'))
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>التعليقات</span> <span class="badge badge-default float-right">99</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('newComment')}}">التعليقات الجديدة</a></li>
                        <li><a href="{{route('oldComment')}}">التعليقات القديمة</a></li>
                    </ul>
                </li>
                @endif

            </ul>
        </div>
    </div>
</aside>
{{-------------------  right Sidebar big  ---------------------}}
