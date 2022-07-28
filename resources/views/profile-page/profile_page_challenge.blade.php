@extends('template.profile_page_template')

@section('title', 'Profile Page - Challenge')

@section('content')
<div class="challenge-section col-12">
  <div class="card challenge-card">
    <div class="card-body">
      <img class="challenge-card-image" src="{{ asset('images/challenge-page/makan-tanpa-sisa-bankdbs.jpg') }}">
      <span class="challenge-title">#MakanTanpaSisa Instagram AR Filter Competition</span>
      <span class="challenge-organizer">Diselenggarakan oleh: Bank DBS Indonesia</span>
      <div class="challenge-status-div">
        <img class="challenge-status-icon" src="{{ asset('images/challenge-page/trophy-icon-color.svg') }}" alt="">
        <span class="challenge-status-text">Winner</span>
      </div>
    </div>
    <div class="card-footer bg-transparent challenge-card-footer">
      <div class="challenge-link-div">
        <span class="challenge-link-text">Detail</span>
        <img class="challenge-link-arrow" src="{{ asset('images/challenge-page/link-arrow-icon.svg') }}">
      </div>
    </div>
  </div>
</div>
@endsection