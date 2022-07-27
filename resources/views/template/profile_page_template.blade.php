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

  <script src="{{ asset('js/profile_page.js') }}" defer></script>
  
  {{-- Note: Call this JavaScript file to show modal when page is loaded. --}}
  {{-- <script src="{{ asset('js/profile_page_show_modal.js') }}" defer></script> --}}
</head>
<body>
  {{-- Note: asset() -> website domain + filename --}}
  {{-- @dd(asset('test.jpeg'))   --}}
  
  {{-- Note: public() -> public folder directory + filename --}}
  {{-- @dd(public('test')) --}}

  {{-- Note: url() -> website domain + website-route --}}
  {{-- @dd(url('/edit-profile')) --}}

  <!-- Modal -->
  <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('/edit-profile') }}" method="POST">
          <div class="modal-body">
            <div class="mb-3 profile-img-form">
              <img class="profile-img-form-preview" 
                id="profile-img-form-preview"
                src="{{ asset('database-images/gigachad.jpg') }}">
              <div class="profile-img-form-div">
                <input class="form-control" type="file" accept="image/*" 
                  id="profileImg" name="profileImg"
                  onchange="previewProfileImg(event)">
                <label for="profileImg" class="form-label">Gambar Profil Anda sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" 
              name="nama" value="Denn Sebastian">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" 
              name="username" value="acrymoore">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" 
              name="email" value="denn.sebastian.e@gmail.com">
            </div>
            <div class="mb-3">
              <label for="headline" class="form-label">Headline</label>
              <input type="text" class="form-control" id="headline" 
              name="headline" value="Dicoding Tech Engineer Intern">
              <div id="headlineHelp" class="form-text">Dapat diisi dengan title atau jabatan utama Anda.</div>
            </div>
            <div class="mb-3">
              <label for="tentang-saya" class="form-label">Tentang Saya 
                <span id="tentang-saya-counter" class="tentang-saya-counter">0/100</span>
              </label>
              <textarea class="form-control" id="tentang-saya" name="tentang-saya" 
                rows="3" maxlength="100" onkeyup="textAreaCounter()">Suka programming dan belajar hal baru.</textarea>
              <div id="tentangSayaHelp" class="form-text">Tulis cerita singkat tentang diri Anda.</div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn edit-profile-submit-btn">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  @include('template.profile_header')

  <div class="main-background">
    <img class="main-background-image" src="{{ asset('images/main-background-images.svg') }}" alt="">
  </div>
  <div class="container-fluid profile-content">
    <div class="col-4 profile-card-container">
      <div class="profile-card">
        <img class="profile-card-avatar" src="{{ asset('database-images/gigachad.jpg') }}">
        <span class="profile-card-name">Denn Sebastian</span>
        <span class="profile-card-headline">Product Engineer at Acme</span>
        <button class="edit-profile-btn" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profil</button>
        <div class="profile-card-exp-container">
          <img class="profile-card-icon" src="{{ asset('images/profile-card/card-xp-badge-icon.svg') }}" alt="">
          800 XP
        </div>
        <div class="profile-card-joindate-container">
          <img class="profile-card-icon" src="{{ asset('images/profile-card/clock-icon.svg') }}" alt="">
          Bergabung sejak 2022
        </div>
        <div class="profile-card-city-container">
          <img class="profile-card-icon" src="{{ asset('images/profile-card/location-icon.svg') }}" alt="">
          Kota Bandung
        </div>
      </div>
    </div>
    <div class="col-8">
      <div class="empty-space"></div>
      <div class="profile-section">
        <div class="col-12 mini-navbar mb-2">
          <a href="{{ route('profile-academy') }}">
            <div class="mini-navbar-item @if ($active_bar === 'academy') active @endif">
              Academy <span class="mini-navbar-item-number">6</span>
            </div>
          </a>
          <a href="{{ route('profile-event') }}">
            <div class="mini-navbar-item @if ($active_bar === 'event') active @endif">
              Event <span class="mini-navbar-item-number">2</span>
            </div>
          </a>
          <a href="{{ route('profile-challenge') }}">
            <div class="mini-navbar-item @if ($active_bar === 'challenge') active @endif">
              Challenge <span class="mini-navbar-item-number">1</span>
            </div>
          </a>
          <a href="{{ route('profile-winning-app') }}">
            <div class="mini-navbar-item @if ($active_bar === 'winning-app') active @endif">
              Winning App
            </div>
          </a>
        </div>
        <div class="col-12">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  @include('template.profile_footer')
</body>
</html>