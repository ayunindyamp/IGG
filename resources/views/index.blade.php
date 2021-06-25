    @extends('layouts.master')
    @section('title', 'PT.IGG')
    @section('banner')

    @endsection

    @section('content')
    @section('content')
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            
            <article class="group">
                @foreach ($posts as $post)
                <div class="one_half first">
                    <a href="{{ route('post', $post->slug) }}">
                        <h6 class="heading underline font-x2">{{ $post->title }}
                        </h6>
                        <p>{{ $post->subtitle }}</p>
                        <p class="btmspace-30 justified">{{ Str::limit($post->description, 500) }}
                        </p>
                        
                </div>
                <div class="one_quarter"><a class="imgover" href="{{ $post->image }}"><img class="borderedbox inspace-10"
                            src="{{ $post->image }}" alt="" style="max-width:350px"></a></div>
                @endforeach
            </article>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>

    <!-- Pager -->
    <div class="paginate">
        {{ $posts->links() }}
    </div>
    </div>
    </div>
    </div>
    @endsection
