@extends('template.template')

@push('add-on-style')
  <link rel="stylesheet" href="/css/component/navbar.css" />
@endpush

@section('title')
  Checkout
@endsection

@section('content')
  @include('include.component.navbar_login_renter')
  <hr>
  <h1>Checkout</h1>
@endsection

@push('add-on-script')
  <script type="text/javascript" src="/js/component/navbar.js"></script>
@endpush
