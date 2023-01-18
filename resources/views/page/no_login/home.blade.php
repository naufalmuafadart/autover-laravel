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
  @include('include.component.navbar')

  <section id="s-jumbotron" class="d-grid">
    <div class="left-side">
      <div class="jmbtrn-text">Rental Mobil Murah untuk Setiap Kebutuhan</div>
      <div class="jmbtrn-text">Dapatkan tarif sewa mobil paling terjangkau disini. Kami menyediakan banyak pilihan mobil seperti, MPV, SUV, Crossover, dll.</div>
    </div>
    <div class="right-side d-flex ai-center jc-center">
      <img src="/image/image-jumbotron.png" alt="" />
    </div>
  </section>

  <section id="s-tutorial" class="d-grid">
    <div class="left-side d-flex jc-center ai-center">
      <img src="/image/logo/logo.png" alt="" />
    </div>
    <div class="right-side d-flex d-flex-column">
      <h1>Cara sewa mobil di Autover</h1>
      <div class="button-container">
        <button class="button">Penyewa</button>
        <button class="button button-secondary">Host</button>
      </div>
      <ul>
        <li>
          <div class="order d-flex jc-center ai-center">
            <div class="box d-flex jc-center ai-center">1</div>
          </div>
          <div class="content">
            <div class="text">Pilih tempat dan tanggal penyewaan</div>
            <div class="text">Pilih lokasi dan tanggal kamu akan menyewa mobil </div>
          </div>
        </li>
        <li>
          <div class="order d-flex jc-center ai-center">
            <div class="box d-flex jc-center ai-center">2</div>
          </div>
          <div class="content">
            <div class="text">Tentukan mobil yang akan kamu sewa</div>
            <div class="text">Pilih salah satu mobil yang ingin kamu sewa</div>
          </div>
        </li>
        <li>
          <div class="order d-flex jc-center ai-center">
            <div class="box d-flex jc-center ai-center">3</div>
          </div>
          <div class="content">
            <div class="text">Checkout Pesanan</div>
            <div class="text">Lengkapi data pada halaman checkout, dan bayar pesanan kamu</div>
          </div>
        </li>
        <li>
          <div class="order d-flex jc-center ai-center">
            <div class="box d-flex jc-center ai-center">4</div>
          </div>
          <div class="content">
            <div class="text">Nikmati Mobilnya</div>
            <div class="text">Kemudikan Mobilnya</div>
          </div>
        </li>
      </ul>
      <div class="button-container">
        <button class="button">Cari Mobil</button>
      </div>
    </div>
  </section>

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

  <section id="s-footer">
    <hr>
    <footer class="d-flex jc-space-between ai-center">
      <div class="left-side d-flex jc-start ai-center">
        <img src="/image/logo/logo.png" alt="logo" />
        <p class="michroma-ff">AUTOVER</p>
      </div>
      <div class="right-side">
        <p>© 2023 Autover</p>
      </div>
    </footer>
  </section>
@endsection

@push('add-on-script')
  <script type="text/javascript" src="/js/component/navbar.js"></script>
@endpush
