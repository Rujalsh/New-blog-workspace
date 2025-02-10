<main class="main">
    <section id="hero" class="hero section dark-background position-relative">
        <!-- Background Image -->

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                
                <!-- Hero Title -->
                
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">PUBLISH YOUR PASSION, <br><span>YOUR WAY.</span></h2>

      </div><!-- End Section Title -->

 

                <!-- Hero Subtitle & CTA Buttons -->
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-4" data-aos="fade-up" data-aos-delay="200">
                        Start creating a unique and beautiful blog easily.
                    </p>

                    <!-- Call-to-Action Buttons -->
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3" data-aos="fade-up" data-aos-delay="300">
                        <a class="links" href="{{ route('about') }}">Find Out More</a>

                        @auth
                            @admin
                                <a class="links" href="/admin/posts/create" >Create a Blog</a>
                            @endadmin
                        @endauth
                    </div>
                </div>

            </div>
        </div>

        
    </section>
</main>
