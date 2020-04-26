
<html>
<head>
    <title>Home Display</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@include('user.header')

<div class="detail">
<p>{{ Auth::user()->name }}</p>
<h2>{{ Auth::user()->email }}</h2>
</div>


</body>
</html>