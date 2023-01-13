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
      <form action="" class="d-flex d-flex-column ai-center">
        <div class="branding d-flex jc-space-between ai-center">
          <img src="/image/logo/logo.png" alt="">
          <p class="michroma-ff">AUTOVER</p>
        </div>

        <h1>Signup</h1>

        <div class="input-container">
          <label for="">Nama Lengkap</label>
          <input type="text" name="fullname" id="inputFullName">
          <small>Nama lengkap salah</small>
        </div>

        <div class="input-container">
          <label for="">No HP</label>
          <input type="tel" name="fullname" id="inputPhoneNumber">
          <small>No telepon tidak sesuai</small>
        </div>
        
        <div class="input-container">
          <label for="">Email</label>
          <input type="email" name="fullname" id="inputEmail">
          <small>No telepon tidak sesuai</small>
        </div>
        
        <div class="input-container">
          <label for="">Password</label>
          <input type="password" name="fullname" id="inputPassword">
          <small>No telepon tidak sesuai</small>
        </div>

        <div class="input-container">
          <label for="">Ulangi Password</label>
          <input type="password" name="fullname" id="inputRetypePassword">
          <small>No telepon tidak sesuai</small>
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
