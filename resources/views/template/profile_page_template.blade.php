<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/profile_page_template/profile_page_main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile_page_template/profile_page_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile_page_template/profile_page_content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile_page_template/profile_page_footer.css') }}">
</head>
<body>
    {{-- Note: asset() -> website domain + filename --}}
    {{-- @dd(asset('test')) --}}  
    
    {{-- Note: public() -> public folder directory + filename --}}
    {{-- @dd(public('test')) --}}

    @include('template.profile_header')
    <div class="main-background"></div>
    <div class="container-fluid profile-content">
        <div class="col-4 profile-card-container">
            <div class="profile-card">
                hello world
            </div>
        </div>
        <div class="col-8">
            <div class="empty-space"></div>
            <div class="profile-section">
                hello world
                @yield('content')
            </div>
        </div>
    </div>
    @include('template.profile_footer')
</body>
</html>