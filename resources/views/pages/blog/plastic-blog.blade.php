@extends('/template/layout')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Plastic</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Plastic Article</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section>
    <div class="container">
        <div class="row product">
            <div class="section-title mt-3">
                <h2 data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">Plastic Article</h2>
            </div>
            <div class="col-12 intro text-center">

            </div>
        </div>
        <div class="row g-4">
            @foreach ($blogs as $blog)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="blog">
                    <img src="{{ $blog->photo }}" alt="" class="blog-img lozad text-center mb-4"/>
                    <h4 class="text-center"><a href="{{ route('plastic', $blog->slug) }}">{{ $blog->title }}</a></h4>
                    @php
                        $limitedDescription = Str::limit($blog->short_description, 100); // Adjust the character limit (100 in this example)
                    @endphp
                    <p>
                        {{ $limitedDescription }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



@include('template.contact-us')
@endsection