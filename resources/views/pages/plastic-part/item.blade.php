@extends('/template/layout')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Plastic Part {{ $partCategories->name }}</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/category-parts">Plastic Part</a></li>
                <li>{{ $partCategories->name }}</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section>
    <div class="container">
        <div class="row product">
            <div class="section-title mt-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h2>Plastic Part {{ $partCategories->name }}</h2>
            </div>
            <div class="col-12 intro text-center">
            </div>
        </div>
        <div class="row g-4">
            @forelse ($parts as $items)
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
            @empty
                <div class="blog" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="div">
                        <h4 class="text-center mb-4">Oops! Plastic Part Not Available</h4>
                        <img src="/img/out-of-stock.png" alt="" class="lozad text-center mb-4" style="width: 100px; height: 100px;" />
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

@include('template.contact-us')
@endsection