    @extends('layouts.master')
    @section('title', 'PT.IGG')
    @section('banner')
            <div class="container-fluid">
                <div class="row">
				    <div class="col-12 col-md-12 p-3 p-md-3 text-center"/>
                	<!--
					<div class="col-12 col-md-12 p-3 p-md-5 text-center">
				<h1>Artisan Blog</h1>
					<img class="img-fluid" src="https://larablog.sourceforge.io/laravels.svg"/>
					</div>
--><br/><br/>
                    <div class="mx-auto col-12 col-md-5 bg-primary p-3 p-md-5 text-white">
                        <div class="site-heading">
                            <h1>IGG (INTEGRITY, GROWTH, GREEN)</h1>
                        </div>
                    </div>
    @endsection

    @section('content')
      
                <div class="mx-auto col-12 col-md-10 p-3">
                    @foreach ($posts as $post)
                        <div class="post-preview p-3 p-md-5 shadow rounded">
                            <a href="{{ route('post', $post->slug) }}">
							<img class="img-fluid" src="{{ $post->image }}"/>
                                <h2 class="post-title text-danger">
                                    {{ $post->title }}
                                </h2>
								</a>
                                <p class="lead">
                                    {{ $post->subtitle }}
                                </p>
                             <a href="{{ route('post', $post->slug) }}" class="btn btn-primary text-white">Read More</a>
                         </div><br/>
                    @endforeach
                    <!-- Pager -->
                    <div class="paginate">
                        {{ $posts->links() }}
                    </div>
        </div>
                </div>
            </div>
    @endsection
