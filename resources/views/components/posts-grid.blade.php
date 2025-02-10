{{-- 
<x-post-featured-card :post="$posts[0]" />

    @if($posts-> count())
        <div class="lg:grid lg:grid-cols-6">
                    
            @foreach ($posts -> skip(1) as $post)    
                <x-post-card :post="$post" class="{{ $loop -> iteration < 3 ? 'col-span-3' : 'col-span-2'}}" />
                    
            @endforeach
        </div>
    @endif --}}

{{-- @if($posts-> count())
    <div id="hotels" class="hotels section">
        <div class="container section-title" data-aos="fade-up">
            <h2>All Posts</h2> 
        </div>       
        <div class="destination__grid">
        @foreach ($posts  as $post)
            <x-post-card :post="$post"  />    
        @endforeach
    </div>
@endif --}}
{{-- @if($posts->count())
    <div id="hotels" class="hotels section">
        <div class="container section-title" data-aos="fade-up">
            <h2>All Posts</h2> 
        </div>       

        <div class="container text-center py-5">
            <div class="row g-4">
                @foreach ($posts as $post)
                    <div class="col-md-4"> 
                        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" 
                                 alt="Blog Post illustration" 
                                 class="img-fluid">

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <x-category-button :category="$post->category" />
                                </div>

                                <div>
                                    <h1 class="h5 fw-bold">
                                        <a href="/posts/{!! $post->slug !!}" class="text-decoration-none text-dark">
                                            {!! $post->title !!}
                                        </a>
                                    </h1>
                                    <span class="text-muted small">
                                        Published <time>{!! $post->created_at->diffForHumans() !!}</time>
                                    </span>
                                </div>

                                <div class="mt-3 small">
                                    {!! $post->excerpt !!}
                                </div>

                                <footer class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="d-flex align-items-center">
                                        <img src="https://i.pravatar.cc/60?u={{ Auth::id() }}" 
                                             alt="" width="40" height="40" class="rounded-circle">
                                        <div class="ms-2">
                                            <h5 class="fw-bold m-0">
                                                <a href="/?author={!! $post->author->username !!}" 
                                                   class="text-decoration-none">
                                                    {!! $post->author->name !!}
                                                </a>
                                            </h5>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="/posts/{!! $post->slug !!}" class="btn btn-outline-dark btn-sm">
                                            Read More
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div> <!-- col-md-4 -->
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
@endif --}}

@if($posts->count())
    <div >
        <div class="container section-title" data-aos="fade-up">
            <h2>All Posts</h2> 
        </div>       

        <div class="container text-center py-5">
            <div class="row gy-4">
                @foreach ($posts as $post)
                    <div class="col-md-4"> 
                        <div class="card  shadow-lg border-0 rounded-4 overflow-hidden">
                            <div class="card-img">
                            <img id="thumbnail" src="{{ asset('storage/' . $post->thumbnail) }}" 
                                 alt="Blog Post illustration" 
                                 class="img-fluid ">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <x-category-button :category="$post->category" />
                                </div>

                                <div>
                                    <h1 class="h5 fw-bold">
                                        <a href="/posts/{!! $post->slug !!}" class="text-decoration-none text-dark">
                                            {!! $post->title !!}
                                        </a>
                                    </h1>
                                    <span class="text-muted small">
                                        Published <time>{!! $post->created_at->diffForHumans() !!}</time>
                                    </span>
                                </div>

                                <div class="mt-3 small">
                                    {!! $post->excerpt !!}
                                </div>

                                <footer class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="d-flex align-items-center">
                                        <img src="https://i.pravatar.cc/60?u={{ Auth::id() }}" 
                                             alt="" width="40" height="40" class="rounded-circle">
                                        <div class="ms-2">
                                            <h5 class="fw-bold m-0">
                                                <a href="/?author={!! $post->author->username !!}" 
                                                   class="text-decoration-none">
                                                    {!! $post->author->name !!}
                                                </a>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 align-self-baseline">
                                        <div class="d-flex flex-column flex-sm-row justify-content-end gap-3 text-white" data-aos="fade-up" data-aos-delay="300">
                                            <a class="links" href="/posts/{!! $post->slug !!}">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div> <!-- col-md-4 -->
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
@endif

