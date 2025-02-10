<footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8 col-md-6 footer-about">
            
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">BLOG 
                    <span class="text-orange-500">HOTSPOT</span>
                    <i class="ri-fire-fill" style="color: #FF0000"></i>
              </span>
            </a>
            <div class="footer-contact pt-3">
              <p>Welcome to BLOG HOTSPOT, your go-to destination for fresh ideas, thought-provoking stories, and expert insights on [your blog’s focus, e.g., lifestyle, tech, travel, etc.].</p>
              <p>Here, we aim to inspire, inform, and entertain while building a community of curious minds. Thank you for being a part of our journey!</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul class="ms-auto my-2 my-lg-0">
              <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
              <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
              <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
          </div>

          
          
          <div class="social-links col-lg-2 col-md-3">
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>


          
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>BLOG HOTSPOT</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Rujal Shrestha</a>
          </div>
        </div>

        

      </div>
    </div>

</footer>
