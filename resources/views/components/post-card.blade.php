@props(['post'])

{{-- <article
{{ $attributes -> merge (['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
    <div class="py-6 px-5">
        <div>
            <img src="{{asset('storage/' . $post->thumbnail)}}" alt="Blog Post illustration" class="rounded-xl img-fluid">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post ->category" />
                </div>

                <div class="mt-4">
                <h1 class="text-3xl">
                    <a href="/posts/{!!$post -> slug!!}">
                        {!!$post -> title!!}
                    </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{!!$post ->created_at  -> diffForHumans()!!}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4 space-y-4">
                    {!!$post -> excerpt!!}
            </div>

    <footer class="flex justify-between items-center mt-8">
        <div class="flex items-center text-sm">
            <img src="https://i.pravatar.cc/60?u={{ Auth::id() }}" alt="" width="40" height="40" class="rounded-full">
                <div class="ml-3">
                    <h5 class="font-bold">
                        <a href="/?author={!!$post ->author->username!!}">{!!$post->author->name!!}</a>
                    </h5>
                </div>
            </div>

            <div>
                <a href="/posts/{!!$post -> slug!!}"
                    class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >Read More</a>
            </div>
    </footer>
    </div>
    </div>
</article> --}}

{{-- new one --}}
{{-- <div class="container">
    <div class="row g-4">
        <div class="col-md-4">
            <article {{ $attributes->merge(['class' => 'card shadow-sm border rounded']) }}>
                <div class="card-body">
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded img-fluid w-100">
                    </div>

                    <div class="d-flex flex-column justify-content-between">
                        <header>
                            <div class="mb-2">
                                <x-category-button :category="$post->category" />
                            </div>

                            <div>
                                <h1 class="h5">
                                    <a href="/posts/{!! $post->slug !!}" class="text-decoration-none text-dark">
                                        {!! $post->title !!}
                                    </a>
                                </h1>

                                <span class="text-muted small">
                                    Published <time>{!! $post->created_at->diffForHumans() !!}</time>
                                </span>
                            </div>
                        </header>

                        <div class="mt-3 small">
                            {!! $post->excerpt !!}
                        </div>

                        <footer class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/60?u={{ Auth::id() }}" alt="" width="40" height="40" class="rounded-circle">
                                <div class="ms-2">
                                    <h5 class="fw-bold m-0">
                                        <a href="/?author={!! $post->author->username !!}" class="text-decoration-none">
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
            </article>
        </div>

        <!-- Repeat the col-md-4 block for more posts dynamically -->
    </div>
</div> --}}

<div class="container">
    <div class="row gy-4">
      <div
        class="col-lg-4 col-md-6"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="card h-100">
          <div class="card-img">
            <img src="{{asset('storage/' . $post->thumbnail)}}" alt="Blog Post illustration" class="rounded-xl img-fluid items-center">
          </div>
          <h3>
            <a href="#" class="stretched-link"
              >Non quibusdam blanditiis</a
            >
          </h3>
          <p>0.4 Mile from the Venue</p>
          <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="https://i.pravatar.cc/60?u={{ Auth::id() }}" alt="" width="40" height="40" class="rounded-full">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={!!$post ->author->username!!}">{!!$post->author->name!!}</a>
                        </h5>
                    </div>
                </div>
    
                <div>
                    <a href="/posts/{!!$post -> slug!!}"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
        </footer>
        </div>
      </div>
      

{{-- <section class="container text-center py-5" id="destination">
    <h3 class="text-muted mb-2">TOP SELLING</h3>
    <h2 class="fw-bold">Top Destinations</h2>

    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <img src="{{asset('storage/' . $post->thumbnail)}}" alt="Blog Post illustration" class="rounded-xl img-fluid">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="fw-semibold m-0">Rome, Italy</h4>
                        <h4 class="fw-semibold m-0">$5.42k</h4>
                    </div>
                    <p class="d-flex align-items-center fw-bold text-muted">
                        <span class="fs-4 text-dark me-2"><i class="ri-navigation-fill"></i></span>
                        10 Days Trip
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <div class="container text-center py-5">
    <div class="row g-4">
            <div class="col-md-4"> 
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="img-fluid">

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
                                <img src="https://i.pravatar.cc/60?u={{ Auth::id() }}" alt="" width="40" height="40" class="rounded-circle">
                                <div class="ms-2">
                                    <h5 class="fw-bold m-0">
                                        <a href="/?author={!! $post->author->username !!}" class="text-decoration-none">
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
            </div>
    </div>
</div> --}}
