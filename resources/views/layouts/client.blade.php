<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="shortcut icon" href="https://nrg.radio/wp-content/uploads/2019/06/MVPs-LOGOS-02.png" type="image/vnd.microsoft.icon" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    	@include('includes.messages')

    </div>
    
</body>
</html>