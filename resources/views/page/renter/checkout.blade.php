@extends('template.template')

@push('add-on-style')
  <link rel="stylesheet" href="/css/component/navbar.css" />
  <link rel="stylesheet" href="/css/page/renter/checkout.css"
@endpush

@section('title')
  Checkout
@endsection

@section('content')
  @include('include.component.navbar_login_renter')
  <hr>
  <div id="formContainer">
    <form id="formCheckout" class="d-flex d-flex-column">
      <h1>Checkout</h1>
      <div class="row">
        <div class="left-side"><p>Nama</p></div>
        <div class="right-side"><p>Mazda CX-9</p></div>
      </div>
      <div class="row">
        <div class="left-side"><p>No Polisi</p></div>
        <div class="right-side"><p>D 123 ABC</p></div>
      </div>
      <div class="row">
        <div class="left-side"><p>Tipe</p></div>
        <div class="right-side"><p>Kuro Edition</p></div>
      </div>
    </form>
  </div>
@endsection

@push('add-on-script')
  <script type="text/javascript" src="/js/component/navbar.js"></script>
@endpush
