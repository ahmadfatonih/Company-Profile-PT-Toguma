@extends('/template/layout')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Category Plastic Material</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Category Plastic Material</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section>
    <div class="container">
        <div class="row product">
            <div class="section-title mt-3">
                <h2 data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Category Plastic Material</h2>
            </div>
            <div class="col-12 intro text-center">
            </div>
        </div>
        <div class="row g-4">
            @foreach ($materialCategories as $items)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="product-box2">
                    <div class="div">
                        {{-- <img src="/img/portfolio/portfolio-1.jpg" alt="" class="lozad text-center mb-4" /> --}}
                        <h4 class="text-center"><a href="/category-materials/{{ $items->slug }}">{{ $items->name }}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('template.contact-us')
@endsection