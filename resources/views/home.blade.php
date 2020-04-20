<html>
<head>
<title>Profile Display</title>
<link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="inner">
        <nav>
            <a href="#" class="logo">WeMeet</a>
           
            <ul>
                <li><i class="fa fa-home infor" ></i><a href="#">Home</a></li>
                <li> <i class="fa fa-search infor" ></i><a href="#">Explore</a></li>
                <li><i class="fa fa-upload infor" ></i><a href="#">Upload</a></li>
                <li><i class="fa fa-archive infor" ></i><a href="#">Stories</a></li>
                <li><i class="fa fa-user infor" ></i><a href="#">Profile</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="profile" style="width:30%; position:absolute; z-index:100;">
<div class="image-container">
<img src = "{{ asset('image/pic.webp')}}" style="width:100%">
<div class="name"><h2> Slok Baniya</h2></div>

</div>
<div class="details">
    <p><i class="fa fa-male info" ></i> Male, 22 YOA</p>
    <p><i class="fa fa-address-card info" ></i> Basundhara, Kathmandu</p>
    <p><i class="fa fa-envelope-o info" ></i> slokbaniya1@gmail.com</p>
    <p><i class="fa fa-phone info" ></i> +977-9843541638</p>
</div>

</div>
<div class="main-container" >
    <img src ="{{ asset('image/wall.jpg')}}" style="width:100%">
</div>
</div>
<div class="postname"><h1>Posts</h1></div>


<div class="posts" style="">
<img src="{{ asset('image/pic1.jpg')}}" alt="" class="post1">
<img src="{{ asset('image/pic2.jpg')}}" alt="" class="post1">
<img src="{{ asset('image/pic4.webp')}}" alt="" class="post1">
<img src="{{ asset('image/pic3.jpg')}}" alt="" class="post1">
x``    
    <a href="#">See More <i class="fa fa-arrow-right info" ></i></a>
    
</div>

</body>
</html>