@extends('/template/layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Plastic</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Plastic</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row product">
                <div class="section-title" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>{{ $blog->title }}</h2>
                    <hr class="m-3"/>
                    <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0" class="btn btn-1"><i class="bx bxl-whatsapp"></i>&nbsp;Whatsapp</a>
                    <a href="mailto:{{ $contact->email }}" class="btn-email btn"><i class='bi-envelope'></i>&nbsp;Quotation</a>
                </div>
                <div class="col-12 intro text-center">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="{{$blog->photo }}" alt="" class="detail-blog-img">
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    {!! $blog->long_description !!}
                </div>
            </div>
        </div>
    </section>
    <section id="relateProduct" class="portfolio-details">
        <div class="container">
            <div class="row product">
                <hr class="m-3"/>
                <div class="section-title mt-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>Related Article</h2>
                </div>
                <div class="col-12 intro text-center">
                </div>
            </div>
            <div class="row g-4">
                @foreach ($relateBlog as $items)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="blog">
                            <div class="div">
                                <img src="{{ $items->photo }}" alt="" class="blog-img lozad text-center mb-4" />
                                <h4 class="text-center"><a href="{{ route('plastic', $items->slug) }}">{{ $items->title }}</a></h4>
                                <p>
                                    {{ $items->short_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    @include('template.contact-us')
</main><!-- End #main -->
@endsection