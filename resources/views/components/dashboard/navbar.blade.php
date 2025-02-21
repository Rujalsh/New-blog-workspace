@aware(['heading'])

<nav class="navbar navbar-default navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1>{{ $heading }}</h1>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-left">
        <!-- Left navbar items can be added here -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        {{-- <li>
          <a href="#">
            <p>Account</p>
          </a>
        </li> --}}
        <li>
          <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">
            Log Out
          </a>
        </li>
        <form id="logout-form" method="POST" action="/logout" class="d-none">
          @csrf
        </form>
        <li class="separator hidden-lg"></li>
      </ul>
    </div>
  </div>
</nav>
