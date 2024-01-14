<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/">Toguma</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/#home">Home</a></li>
                <li><a class="nav-link scrollto" href="/#about">About</a></li>
                <li><a class="nav-link scrollto 
                    {{ Request::is('category-parts') ? 'active' : '' }} {{ Request::is('category-parts/*') ? 'active' : '' }} 
                    {{ Request::is('plastic-part/*') ? 'active' : '' }}" href="/category-parts">Plastic Part</a></li>
                <li><a class="nav-link scrollto 
                    {{ Request::is('category-materials') ? 'active' : '' }} {{ Request::is('category-materials/*') ? 'active' : '' }} 
                    {{ Request::is('plastic-material/*') ? 'active' : '' }}" href="/category-materials">Plastic Material</a></li>
                <li><a class="nav-link scrollto {{ Request::is('plastic') ? 'active' : '' }} 
                    {{ Request::is('plastic/*') ? 'active' : '' }} 
                    {{ Request::is('plastic/*/*') ? 'active' : '' }}" href="/plastic">Plastic Articel</a></li>
                {{-- <li><a class="nav-link scrollto" href="/#testimonials">Our Customers</a></li> --}}
                <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->