@extends('template.template')

@push('add-on-style')
  <link rel="stylesheet" href="/css/page/no_login/begin_reset_password/begin_reset_password.css" />
@endpush

@section('title')
  Reset password
@endsection

@section('content')
  @include('include.component.navbar_no_func')
  <hr>

  <section id="s-form">
    <form action="">
      <h2>Reset Password</h2>
      <div class="input-container inline-input-container-2">
        <div class="row">
          <label for="">Password</label>
          <input type="password" name="password" id="inputPassword">
        </div>
        <small>Password salah / tidak sesuai</small>
      </div>

      <div class="input-container inline-input-container-2">
        <div class="row">
          <label for="">Ulangi Password</label>
          <input type="password" name="retypePassword" id="inputRetypePassword">
        </div>
        <small>Password salah / tidak sesuai</small>
      </div>

      <div class="button-container d-flex jc-flex-end">
        <button class="button" type="submit">Reset Password</button>
      </div>
    </form>
  </section>
@endsection
