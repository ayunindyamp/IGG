@extends('admin.layouts.master')
@include('admin.layouts.sidebar')
@section('content')
<div id="content">
    @include('admin.layouts.topbar')
    @if (Session::has('success'))
    <div class="alert alert-success">
        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
    </div>
    @endif
</div>
<div id="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <article class="group">
                    <center>
                        <h1 class="heading underline font-x2">PT. INDUSTRI GULA GLENMORE
                        </h1>
                    </center>
                    <div class="section-inner">
                        <img class="img-post" src="{{asset("assets/images/demo/1pkl.jpg")}}">
                    </div>
                    <div class=" one_half first">
                        <p class="desc-post">Tugas utama PT Industri Gula Glenmore adalah melaksanakan
                            pembangunan dan pengelolaan pabrik gula terpadu Glenmore berkapasitas 6.000
                            TCD (expandible 8.000 TCD) di atas sebagian lahan PT Perkebunan Nusantara
                            XII (Persero) seluas 102,4 Ha yang di-inbreng-kan kepada PT Industri Gula
                            Glenmore berlokasi di Desa Karangharjo, Kecamatan Glenmore, Kabupaten
                            Banyuwangi. Bahan baku tebu akan dipasok sepenuhnya oleh kebun-kebun
                            penanam tebu PT Perkebunan Nusantara XII (Persero) yang ada di wilayah
                            Kabupaten Banyuwangi, Jember dan dari petani tebu rakyat. Pabrik gula terpadu
                            ini akan diproduksi gula putih premium, daya listrik, bio-ethanol, pupuk
                            organik dan pakan ternak.</p>
                    </div>
                </article>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
    @endsection
