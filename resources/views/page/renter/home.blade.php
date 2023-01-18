@extends('template.template')

@push('add-on-style')
  <link rel="stylesheet" href="/css/component/navbar.css" />
  <link rel="stylesheet" href="/css/component/no_login/home/search.css" />
  <link rel="stylesheet" href="/css/component/no_login/home/list.css" />
  <link rel="stylesheet" href="/css/page/no_login/home/home.css" />
@endpush

@section('title')
  Autover
@endsection

@section('content')
  @include('include.component.navbar_login_renter')

  <section id="s-search">
    <h1>Cari Mobil</h1>
    <form action="" class="container">
      <div class="row">
        <div class="box">
          <h2>Lokasi Sewa</h2>
          <div class="input-container inline-input-container">
            <img src="/image/icon/ic_location.png" alt="location icon" class="icon" />
            <select>
              <option value="1">Kec. Batununggal</option>
              <option value="2">Kec. Antapani</option>
            </select>
          </div>
        </div>

        <div class="separator">.</div>

        <div class="box">
          <h2>Tanggal Mulai</h2>
          <div class="input-container inline-input-container">
            <img src="/image/icon/ic_calendar.png" alt="location icon" class="icon" />
            <input type="date" name="" id="">
          </div>
        </div>

        <div class="separator">.</div>

        <div class="box">
          <h2>Tanggal Selesai</h2>
          <div class="input-container inline-input-container">
            <img src="/image/icon/ic_calendar.png" alt="location icon" class="icon" />
            <input type="date" name="" id="">
          </div>
        </div>
      </div>
      <div class="button-container d-flex jc-center">
        <button class="button">Cari</button>
      </div>
    </form>
  </section>

  <section id="s-list">
    <h2>Pilihan mobil di kec. Batununggal</h2>
    <p>Selasa, 27 Des 2022 -  Kamis, 29 Des 2022</p>

    <ul>
      <li class="d-flex jc-space-between">
        <div class="left-side d-flex jc-start ai-center">
          <div class="left-side">
            <img src="/image/nissan_navara.jpeg" />
          </div>
          <div class="right-side">
            <p>Nissan Navara (Tipe) (Tahun)</p>
            <p>2000 cc</p>
            <p>Transmisi Otomatis</p>
            <p>Putih</p>
            <p>3 penumpang</p>
          </div>
        </div>
        <div class="right-side d-flex d-flex-column jc-space-between">
          <div class="top-side">
            <p>Tarif</p>
            <p>Rp. 700.000 <small>/ hari</small></p>
          </div>
          <div class="bottom-side">
            <button class="button">Pilih</button>
          </div>
        </div>
      </li>
      <li class="d-flex jc-space-between">
        <div class="left-side d-flex jc-start ai-center">
          <div class="left-side">
            <img src="/image/nissan_navara.jpeg" />
          </div>
          <div class="right-side">
            <p>Nissan Navara (Tipe) (Tahun)</p>
            <p>2000 cc</p>
            <p>Transmisi Otomatis</p>
            <p>Putih</p>
            <p>3 penumpang</p>
          </div>
        </div>
        <div class="right-side d-flex d-flex-column jc-space-between">
          <div class="top-side">
            <p>Tarif</p>
            <p>Rp. 700.000 <small>/ hari</small></p>
          </div>
          <div class="bottom-side">
            <button class="button">Pilih</button>
          </div>
        </div>
      </li>
    </ul>
  </section>
@endsection
