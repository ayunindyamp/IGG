<!DOCTYPE html>
<!--
Template Name: Shicso
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>IGG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href={{asset("assets/layout/styles/layout.css")}} rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/overload.css') }}">
    {{-- FONT --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="main-layout">
    <div class="wrapper row0">
            <!-- ################################################################################################ -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid navigation">
                        <div class="logo"> <a href="/">
                            <img src={{asset("assets/images/demo/logo.gif")}} id="logo-brand"></a>
                        </div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarMain">
                    <div class="navbar-nav">
                      <a class="nav-link" href="/">Beranda</a>
                      <div class="dropdown">
                        <a class="nav-link dropdown-toggle" id="tentang" data-bs-toggle="dropdown" aria-expanded="false">
                          Tentang Kami
                        </a>
                        <ul class="dropdown-menu btn-link" aria-labelledby="tentang">
                          <li><a class="dropdown-item" href="/sejarah">Sejarah Perusahaan</a></li>
                          <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                        </ul>
                      </div>
                      <a class="nav-link" href="/blog">Berita</a>
                      <a class="nav-link" href="/pengumuman">Pengumuman tender dan lelang</a>
                      <div class="dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="divisi" data-bs-toggle="dropdown" aria-expanded="false">
                          Divisi
                        </a>
                        <ul class="dropdown-menu btn-link" aria-labelledby="divisi">
                            <li><a class="dropdown-item" href="/keuangan">Keuangan dan Logistik</a></li>
                            <li><a class="dropdown-item" href="/pengadaan">Pengadaan dan Pemasaran</a></li>
                            <li><a class="dropdown-item" href="/sda">Sumber Daya Manusia dan Umum</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </nav>
