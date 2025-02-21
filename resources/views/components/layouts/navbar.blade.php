{{-- <header id="header" class="header d-flex align-items-center fixed-top"> --}}
<div id="header" class="header d-flex align-items-center fixed-top">

    <div class=" container-fluid container-xl position-relative d-flex align-items-center">
        
        <a href="/" class="logo d-flex align-items-center me-auto text-decoration-none">
            <span class="sitename text-2xl font-semibold">
                BLOG HOTSPOT
                <i class="ri-fire-fill"></i>
            </span>
        </a>
    
    <nav id="navmenu" class="navmenu">
        <ul class="ms-auto my-2 my-lg-0">
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>

                <!-- Search -->
            <li class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="/">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{request('category')}}">
                    @endif
                    
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Find something"
                        class="bg-transparent placeholder-black font-semibold text-sm"
                        value="{!! request('search')!!}">
                </form>
            </li>

            @auth
            <li class="dropdown">
                <a href="/">
                    <span>Welcome, {!! auth()->user()->name !!}</span>
                    <i class="bi bi-chevron-down toggle-dropdown"></i>
                </a>
                <ul>
                    @admin
                    <li><a href="/dashboard" :active="request()->routeIs('admin/posts')">Dashboard</a></li>
                    <li><a href="/admin/posts/create" :active="request()->routeIs('admin/posts/create')">New Post</a></li>
                    @endadmin
                    <li>
                        <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">
                            Log Out
                        </a>
                    </li>
                </ul>
                <form id="logout-form" method="POST" action="/logout" class="d-none">
                    @csrf
                </form>
            </li>
            @else
            {{-- <li><a href="/register">Register <i class="fas fa-user-plus"></i></a></li> --}}
            <li><a href="/login" class="{{ request()->is('about') ? 'active' : '' }}">Log In <i class="ri-login-box-line"></i></a></li>
            @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    
    {{-- <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> --}}
    
    </div>
</div>
{{-- </header> --}}