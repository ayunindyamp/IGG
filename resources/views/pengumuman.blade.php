@extends('layouts.master')
@section('title', 'PT.IGG')
@section('banner')
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content justified">
            <div class="uk-card uk-card-default uk-card-body shadow rounded"
                uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <center>
                    <h1>PENGUMUMAN TENDER DAN LELANG</h1>
                </center>
                @foreach($pengumuman as $index => $item)
                    <!-- main body -->
                    <!-- ################################################################################################ -->
                    <div class="content">
                        <div class="uk-card uk-card-default uk-card-body shadow rounded"
                            uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <h5 class="uk-card-title text-center ">{{$item->judul}}</h5>
                            <a href="{{asset($item->lampiran)}}" class="btn btn-primary">Download</a>
                            <hr class="bg-white" />
                        </div>
                        <!-- ################################################################################################ -->
                    </div>
                    @endforeach
                    <!-- ################################################################################################ -->
                    <!-- / main body -->
            </div>
        </div>
    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@endsection
