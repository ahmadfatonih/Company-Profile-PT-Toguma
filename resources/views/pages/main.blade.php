@extends('/template/layout')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="home" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <h1>PT Toguma Plastic Cikarang</h1>
                <h2>Plastic Integrated Universe</h2>
                <div class="mt-2 mb-5" data-aos="zoom-in" data-aos-easing="ease-out-back">
                    <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0" class="btn-whatsapp btn pulse"><i class='bx bxl-whatsapp'></i>&nbsp;Whatsapp</a>
                    <a href="mailto:{{ $contact->email }}" class="btn-email btn"><i class='bi-envelope'></i>&nbsp;Quotation</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-6 order-1" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="/img/map-site.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <section id="about" class="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div>

            <div class="row">
                <div class="col-lg-6" >
                    <img src="/img/plastic-material.jpg" class="img-fluid rounded-4 shadow-lg" alt="" data-aos="fade-right">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3 data-aos="fade-left">PT Toguma Plastic Cikarang</h3>
                    <div data-aos="fade-left" class="mb-3">
                        {!! $about->description !!}
                    </div>
                    <h3 data-aos="fade-left">Business</h3>
                    <ul data-aos="fade-left">
                        <li><i class="bi bi-check-circle"></i> Trading Plastic Resin, Distribution Rubber Materials, Masterbatch,
                            Additive for Plastic Injection, Plastic Extrusion, Plastic Blow Molding,
                            Plastic Blown Film, Plastic Thermoforming etc.</li>
                        <li><i class="bi bi-check-circle"></i> Trading for Plastic Part, Plastic Sheet/Film, Plastic Hose & Tube for
                            Automotive Part, Electronics components and General Packing purpose in
                            kinds of Plastic Industry.</li>
                        
                    </ul>
                    <a href="{{ url('storage/app/public/'. $about->file)  }}" class="btn btn-1" data-aos="zoom-in-up" download>Download Company Profile
                        <i class="bx bxs-download"></i>
                    </a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="plastic_part" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Plastic Part</h2>
                <p data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Several Categories of Plastic Parts</p>
            </div>

            <div class="row g-4">
                @foreach ($partCategories as $items)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="product-box2">
                        <div class="div">
                            
                            <h4 class="text-center"><a href="/category-parts/{{ $items->slug }}">{{ $items->name }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center mt-5" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <a href="/category-parts" class="btn btn-1">Show More
                        <i class="bx bxs-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <section id="plastic_material" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Plastic Material</h2>
                <p data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Several Categories of Plastic Materials</p>
            </div>

            <div class="row g-4">
                @foreach ($materialCategories as $items)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="product-box2">
                        <div class="div">
                            
                            <h4 class="text-center"><a href="/category-materials/{{ $items->slug }}">{{ $items->name }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center mt-5" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <a href="/category-materials" class="btn btn-1" >Show More
                        <i class="bx bxs-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="plastic_part" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Featured Article</h2>
            </div>

            <div class="row g-4">
                @foreach ($blogs as $items)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="product-box2">
                        <div class="div">
                            <img src="{{ $items->photo }}" alt="" class="lozad text-center mb-4" />
                            <h4 class="text-center"><a href="{{ route('plastic', $items->slug) }}">{{ $items->title }}</a></h4>
                            @php
                                $limitedDescription = Str::limit($items->short_description, 100); // Adjust the character limit (100 in this example)
                            @endphp
                            <p>
                                {{ $limitedDescription }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h2>Contact Us</h2>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{$contact->address}}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$contact->email}}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{$contact->phone}}</p>
                        </div>
                        <iframe src="{{ $contact->link_maps }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                   
                    <form action="{{ route('forms.store') }}" method="POST" class="form">                                   
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="name">Your Name</label>
                              <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                              <label for="name">Your Email</label>
                              <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                          </div>
                          <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                          </div>
                          <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                          </div>
                          <div class="my-3">
                            
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            @if(session('success'))
                                <div class="sent-message">
                                    {{ session('success') }}
                                </div>
                            @endif
                          </div>
                          <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- End Contact Section -->
    <!-- ======= About Section ======= -->
</main>
<!-- End #main -->

@endsection