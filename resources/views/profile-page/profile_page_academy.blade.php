@extends('template.profile_page_template')

@section('title', 'Profile Page - Academy')

@section('content')
<div class="academy-section col-12">

  <div class="card academy-card">
    <div class="card-body">
      <img class="academy-card-image" src="{{ asset('images/academy-page/course-1.jpg') }}">
      <span class="academy-card-title">Memulai Pemrograman Dengan C</span>
    </div>
    <div class="card-footer bg-transparent academy-card-footer">
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/clock-icon-black.svg') }}">
        15 Jam Belajar
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-icon-color.svg') }}">
        4.95
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-badge-icon-color.svg') }}">
        Dasar
      </div>
    </div>
  </div>

  <div class="card academy-card">
    <div class="card-body">
      <img class="academy-card-image" src="{{ asset('images/academy-page/course-2.jpg') }}">
      <span class="academy-card-title">Memulai Pemrograman Dengan Java</span>
    </div>
    <div class="card-footer bg-transparent academy-card-footer">
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/clock-icon-black.svg') }}">
        15 Jam Belajar
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-icon-color.svg') }}">
        4.97
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-badge-icon-color.svg') }}">
        Dasar
      </div>
    </div>
  </div>

  <div class="card academy-card">
    <div class="card-body">
      <img class="academy-card-image" src="{{ asset('images/academy-page/course-3.jpg') }}">
      <span class="academy-card-title">Belajar Dasar Pemrograman Web</span>
    </div>
    <div class="card-footer bg-transparent academy-card-footer">
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/clock-icon-black.svg') }}">
        55 Jam Belajar
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-icon-color.svg') }}">
        4.98
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-badge-icon-color.svg') }}">
        Pemula
      </div>
    </div>
  </div>

  <div class="card academy-card">
    <div class="card-body">
      <img class="academy-card-image" src="{{ asset('images/academy-page/course-4.jpg') }}">
      <span class="academy-card-title">Belajar Membuat Front-End Web untuk Pemula</span>
    </div>
    <div class="card-footer bg-transparent academy-card-footer">
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/clock-icon-black.svg') }}">
        46 Jam Belajar
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-icon-color.svg') }}">
        4.95
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-badge-icon-color.svg') }}">
        Pemula
      </div>
    </div>
  </div>

  <div class="card academy-card">
    <div class="card-body">
      <img class="academy-card-image" src="{{ asset('images/academy-page/course-5.jpg') }}">
      <span class="academy-card-title">Belajar Fundamental Front-End Web Development</span>
    </div>
    <div class="card-footer bg-transparent academy-card-footer">
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/clock-icon-black.svg') }}">
        70 Jam Belajar
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-icon-color.svg') }}">
        4.98
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-badge-icon-color.svg') }}">
        Menengah
      </div>
    </div>
  </div>

  <div class="card academy-card">
    <div class="card-body">
      <img class="academy-card-image" src="{{ asset('images/academy-page/course-6.jpg') }}">
      <span class="academy-card-title">Menjadi Front-End Web Developer Expert</span>
    </div>
    <div class="card-footer bg-transparent academy-card-footer">
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/clock-icon-black.svg') }}">
        90 Jam Belajar
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-icon-color.svg') }}">
        4.98
      </div>
      <div class="academy-card-detail-div">
        <img class="academy-card-icon" src="{{ asset('images/academy-page/star-badge-icon-color.svg') }}">
        Mahir
      </div>
    </div>
  </div>

</div>
@endsection