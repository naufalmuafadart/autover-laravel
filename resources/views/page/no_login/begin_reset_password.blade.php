@extends('template.template')

@push('add-on-style')
  <link rel="stylesheet" href="/css/page/no_login/begin_reset_password/begin_reset_password.css" />
@endpush

@section('title')
  Mulai reset password
@endsection

@section('content')
  @include('include.component.navbar_no_func')
  <hr>

  <section id="s-form">
    <form action="">
      <h2>Reset Password</h2>
      <div class="input-container inline-input-container-2">
        <div class="row">
          <label for="">Email</label>
          <input type="text" name="email" id="inputEmail">
        </div>
        <small>Email tidak ditemukan</small>
      </div>
      <div class="button-container d-flex jc-flex-end">
        <button class="button" type="submit">Reset Password</button>
      </div>
      <h3>Petunjuk reset password telah dikirimkan via email</h3>
    </form>
  </section>
@endsection
