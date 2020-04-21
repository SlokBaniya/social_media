<html>
<head>
<title>Search</title>
<link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="inner">
        <nav>
            <a href="#" class="logo">WeMeet</a>
           
            <ul>
                <li><i class="fa fa-home infor" ></i><a href="{{url('user/home')}}">Home</a></li>
                <li> <i class="fa fa-search infor" ></i><a href="{{url('user/search')}}">Explore</a></li>
                <li><i class="fa fa-upload infor" ></i><a href="{{url('user/upload')}}">Upload</a></li>
                <li><i class="fa fa-archive infor" ></i><a href="{{url('user/stories')}}">Stories</a></li>
                <li><i class="fa fa-user infor" ></i><a href="{{url('user/profile')}}">Profile</a></li>
                <li><img src="{{ asset('image/pic.webp')}}" alt="" style="height: 30px; border-radius:50%;"><a href="#">Slok</a> 
                </li>
            </ul>
        </nav>
    </div>
</header>

</body>
</html>