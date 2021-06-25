@extends('layouts.master')
    @section('title', 'PT.IGG')
    @section('banner')

    <div class="wrapper bgded overlay" style="background-image:url({{asset("assets/images/demo/1pkl.jpg")}});">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <h3 class="heading">PT INDUSTRI GULA GLENMORE</h3>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <article class="group">
                <div class="one_half first">
                    <h6 class="heading underline font-x2">PT. INDUSTRI GULA GLENMORE
                    </h6>
                    <p class="btmspace-30 justified">Tugas utama PT Industri Gula Glenmore adalah melaksanakan
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
                <div class="one_half"><a class="imgover" href={{asset("assets/images/demo/1pkl.jpg")}}><img class="borderedbox inspace-10"
                            src={{asset("assets/images/demo/1pkl.jpg")}} alt=""></a></div>
            </article>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->


    @endsection
