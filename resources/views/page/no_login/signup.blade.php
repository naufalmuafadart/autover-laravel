@extends('template.template')

@push('add-on-style')
  <link rel="stylesheet" href="/css/page/no_login/signup/signup.css" />
@endpush

@section('title')
  Autover
@endsection

@section('content')
  <div class="container d-grid">
    <div class="left-side">
      <img src="/image/img-login.png" alt="">
    </div>
    <div class="right-side">
      <form action="" id="form" class="d-flex d-flex-column ai-center">
        @csrf
        <div class="branding d-flex jc-space-between ai-center">
          <img src="/image/logo/logo.png" alt="">
          <p class="michroma-ff">AUTOVER</p>
        </div>

        <h1>Signup</h1>

        <div class="input-container">
          <label for="inputFullName">Nama Lengkap</label>
          <input type="text" name="full_name" id="inputFullName">
          <small>Nama lengkap salah</small>
        </div>

        <div class="input-container">
          <label for="inputPhoneNumber">No HP</label>
          <input type="tel" name="phone_number" id="inputPhoneNumber">
          <small id="smallPhoneNumber">No telepon tidak valid</small>
        </div>

        <div class="input-container">
          <label for="inputEmail">Email</label>
          <input type="email" name="email" id="inputEmail">
          <small id="smallEmail">Email tidak valid</small>
        </div>

        <div class="input-container">
          <label for="inputPassword">Password</label>
          <input type="password" name="password" id="inputPassword">
          <small></small>
        </div>

        <div class="input-container">
          <label for="inputRetypePassword">Ulangi Password</label>
          <input type="password" name="retype_password" id="inputRetypePassword">
          <small id="smallRetypePassword">Password tidak sama</small>
        </div>

        <button class="button w-100" type="submit">Sign Up</button>

        <div class="other-choice">
          <div class="quest">Sudah punya akun?</div>
          <a href="/login">Login disini</a>
        </div>
      </form>
    </div>
  </div>
@endsection

@push('add-on-script')
  <script type="text/javascript" src="/js/common.js"></script>
  <script type="text/javascript" src="/js/page/no_login/signup.js"></script>
@endpush
