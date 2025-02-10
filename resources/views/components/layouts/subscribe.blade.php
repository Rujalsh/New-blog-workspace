{{-- <section class="p-6 mt- sm:p-20 sm:-mt-32 font-poppins">
  <div class="bg-light rounded-top-lg rounded-lg position-relative">
    <div id="newsletter" class="bg-light border border-dark border-opacity-5 rounded-xl text-center py-4 px-3 mt-5">
      <h5 class="display-4 font-weight-bold">Stay in touch with the latest posts</h5>
      <p class="small mt-3 text-muted">Promise to keep the inbox clean. No bugs.</p>
      <div class="mt-4">
        <div class="position-relative d-inline-block mx-auto bg-light rounded-pill shadow-sm">
          <form method="POST" action="/newsletter" class="d-flex text-sm">
            @csrf
            <div class="py-2 px-3 d-flex align-items-center">
              <label for="email" class="d-none d-lg-inline-block">
                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
              </label>
              <div>
                <input 
                  id="email" 
                  name="email" 
                  type="text" 
                  placeholder="Your email address" 
                  class="bg-transparent py-2 pl-4 focus-outline-none focus-ring-2 focus-ring-primary rounded w-100 text-dark">
                @error('email')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <button type="submit"
              class="transition-colors duration-300 bg-primary hover-bg-primary-dark mt-2 mt-lg-0 ml-lg-3 rounded-pill text-xs font-weight-bold text-white text-uppercase py-2 px-4 shadow">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> --}}

{{-- <section class="p-6 mt-4 sm:p-20 sm:-mt-32 font-poppins">
  <div class="bg-light rounded-top-lg rounded-lg position-relative">
    <div id="newsletter" class="bg-white border border-dark border-opacity-10 rounded-xl shadow-lg text-center py-5 px-4 mt-5">
      <h5 class="display-5 font-weight-bold text-dark">Stay in touch with the latest posts</h5>
      <p class="small mt-3 text-muted">We promise to keep your inbox clean and spam-free.</p>
      <div class="mt-4">
        <div class="position-relative d-inline-block mx-auto bg-white border border-secondary border-opacity-20 rounded-pill shadow-md px-3 py-2">
          <form method="POST" action="/newsletter" class="d-flex flex-column flex-lg-row align-items-center">
            @csrf
            <div class="d-flex align-items-center w-100">
              <label for="email" class="d-none d-lg-inline-block pr-2">
                <img src="/images/mailbox-icon.svg" alt="Mailbox icon" style="width: 24px; height: 24px;">
              </label>
              <div class="w-100">
                <input 
                  id="email" 
                  name="email" 
                  type="text" 
                  placeholder="Enter your email address" 
                  class="form-control border-0 bg-transparent py-2 px-3 text-dark rounded-pill w-100 shadow-sm focus-outline-none focus-ring-2 focus-ring-primary">
                @error('email')
                  <span class="text-danger small d-block mt-1">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <button type="submit"
              class="transition-all duration-300 bg-primary hover-bg-primary-dark text-white text-uppercase py-2 px-4 mt-3 mt-lg-0 ml-lg-3 rounded-pill shadow-lg">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> --}}
{{-- 
<section class="subscription bg-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="subscription-wrapper">
          <div class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
            <h3 class="flex-fill">Subscribe <br> to our newsletter</h3>
            <form action="#" class="row flex-fill">
              <div class="col-lg-7 my-md-2 my-2">
                <input type="email" class="form-control px-4 border-0 w-100 text-center text-md-left" id="email" placeholder="Your Email" name="email">
              </div>
              <div class="col-lg-5 my-md-2 my-2">
                <button type="submit" class="btn btn-primary btn-lg border-0 w-100">Subscribe Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<section class="p-6 mt-4 sm:p-20 sm:-mt-32 font-poppins">
  <div class="bg-light rounded-top-lg rounded-lg position-relative">
    <div id="newsletter" class="bg-white border border-dark border-opacity-10 rounded-xl shadow-lg text-center py-5 px-4 mt-5">
      <h5 class="display-5 font-weight-bold text-dark">Stay in touch with the latest posts</h5>
      <p class="small mt-3 text-muted">We promise to keep your inbox clean and spam-free.</p>
      <div class="mt-4">
        <div class="position-relative d-inline-block mx-auto bg-white border border-secondary border-opacity-20 rounded-pill shadow-md px-3 py-2 w-100" style="max-width: 500px;">
          <form method="POST" action="/newsletter" class="d-flex flex-column flex-lg-row align-items-center">
            @csrf
            <div class="d-flex align-items-center flex-grow-1 w-100">
              <!-- Icon -->
              <label for="email" class="d-none d-lg-inline-block pr-2">
                <img src="/images/mailbox-icon.svg" alt="Mailbox icon" style="width: 24px; height: 24px;">
              </label>
              
              <!-- Email Input -->
              <input 
                id="email" 
                name="email" 
                type="email" 
                placeholder="Enter your email address" 
                class="form-control border-0 bg-transparent py-2 px-3 text-dark rounded-pill w-100 shadow-sm focus-outline-none">
              
              <!-- Validation Error Message -->
              @error('email')
                <span class="text-danger small d-block mt-1">{{ $message }}</span>
              @enderror
            </div>

            <!-- Subscribe Button -->
            <button type="submit"
              >
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
