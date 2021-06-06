@extends('layouts.master')
@section('title', 'PT.IGG')
@section('banner')
<!-- ################################################################################################ -->
<div class="wrapper row3">
<div class="content"> 
      <div class="uk-card uk-card-default uk-card-body shadow rounded bg-dark text-white" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
        <h1>SEJARAH PERUSAHAAN</h1>
    @foreach($pengumuman as $index => $item)
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content">
            <div class="uk-card uk-card-default uk-card-body shadow rounded bg-dark text-white"
                uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <h1 class="uk-card-title text-white text-center ">{{$item->judul}}</h1>
                <a href="{{asset($item->lampiran)}}" class="btn btn-primary">Download</a>
                <hr class="bg-white" />
                <i class="fab text-white fa-6x"></i>
            </div>
            <!-- ################################################################################################ -->
        </div>
        @endforeach
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@endsection