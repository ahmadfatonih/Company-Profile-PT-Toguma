@extends('/template/layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $part->name }}</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/category-parts">Plastic Part</a></li>
                    <li><a href="/category-parts/{{ $part->partCategory->slug }}">{{ $part->partCategory->name }}</a></li>
                    <li>{{ $part->name }}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row product">
                <div class="section-title mt-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>{{ $part->name }}</h2>
                    <hr class="m-3"/>
                    <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0" class="btn btn-1"><i class="bx bxl-whatsapp"></i>&nbsp;Whatsapp</a>
                    <a href="mailto:{{ $contact->email }}" class="btn-email btn"><i class='bi-envelope'></i>&nbsp;Quotation</a>
                </div>
                
            </div>
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @forelse ($partGalleries as $item)
                                <div class="swiper-slide">
                                    <img src="{{ $item->photo }}" alt="">
                                </div>
                            @empty
                                <img src="/img/no-picture-taking.png" alt="Default Image" class="lozad text-center mb-4" />    
                            @endforelse
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="portfolio-info" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h3>Deskripsi Product</h3>
                        <p>{!! nl2br(e($part->short_description)) !!}
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="portfolio-info mt-4" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h3>Detail Products</h3>
                        {!! $part->long_description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="relateProduct">
        <div class="container">
            <div class="row product">
                <hr class="m-3"/>
                <div class="section-title mt-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>Related Product</h2>
                </div>
                <div class="col-12 intro text-center">
                </div>
            </div>
            <div class="row g-4">
                @foreach ($relatePart as $items)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="blog">
                            <div class="div">
                                @isset($items->partGallery)
                                    @php
                                        $firstPhoto = $items->partGallery->first();
                                    @endphp
                                    @if (!is_null($firstPhoto) && isset($firstPhoto->photo))
                                        <img src="{{ $firstPhoto->photo }}" alt="Part Photo" class="lozad text-center mb-4" />
                                    @else
                                        <img src="/img/no-picture-taking.png" alt="Default Image" class="lozad text-center mb-4" />
                                    @endif
                                @else
                                    <img src="/img/no-picture-taking.png" alt="Default Image" class="lozad text-center mb-4" />
                                @endisset
                                <h4 class="text-center"><a href="{{ route('plastic-part', $items->slug) }}">{{ $items->name }}</a></h4>
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
    @include('template.contact-us')

</main><!-- End #main -->

@endsection