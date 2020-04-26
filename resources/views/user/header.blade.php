<header>
    <div class="inner">
        <nav>
            <a href="{{ url('/') }}" class="logo">WeMeet</a>
           
            <ul>
                <li><i class="fa fa-home infor" ></i><a href="{{url('user/home')}}">Home</a></li>
                <li> <i class="fa fa-search infor" ></i><a href="{{url('user/search')}}">Explore</a></li>
                <li><i class="fa fa-upload infor" ></i><a href="{{url('user/upload')}}">Upload</a></li>
                <li><i class="fa fa-archive infor" ></i><a href="{{url('user/stories')}}">Stories</a></li>
                <li><i class="fa fa-user infor" ></i><a href="{{url('user/profile')}}">Profile</a></li>
                <li><img src="{{ asset('image/pic.webp')}}" alt="" style="height: 30px; border-radius:50%;">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                </li>
                
            </ul>
        </nav>
    </div>
</header>