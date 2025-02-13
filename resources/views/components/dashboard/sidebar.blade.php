<div class="sidebar" data-color="purple" data-image="{{ asset('Backend/assets/img/sidebar-5.jpg') }}">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="/" class="simple-text">
            <span class="sitename text-2xl font-semibold">
                BLOG HOTSPOT
                <i class="ri-fire-fill"></i>
            </span>
        </a>
        </div>
        <ul class="nav">
          <li class="{{request()->is('admin/dashboard') ? 'active': ''}}">
            <a href="{{ route('dashboard') }}">
              <i class="pe-7s-graph"></i>
              <p>Dashboard</p>
            </a>
          </li>
          {{-- <li>
            <a href="user.html">
              <i class="pe-7s-user"></i>
              <p>User Profile</p>
            </a>
          </li> --}}
          
          <li>
            <a href="/admin/posts" class="{{request()->is('admin/posts') ? 'text-blue-500': ''}}">
              <i class="pe-7s-user"></i>
              <p>All Post</p>
            </a>
          </li>
          <li>
            <a href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'text-blue-500': ''}}">
              <i class="pe-7s-user"></i>
              <p>New Post</p>
            </a>
          </li>

        </ul>
      </div>
    </div>