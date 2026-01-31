<!--====== HERO / HEADER SECTION START ======-->
@php
    use App\Models\Hero;

    // Ambil data hero pertama
    $hero = Hero::first();
@endphp

@if($hero)
<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">

            <!-- CONTENT -->
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">

                    <!-- TITLE -->
                    <h1 class="fw-bold">
                        {{ $hero->title }}
                    </h1>

                    <!-- DESCRIPTION -->
                    @if($hero->description)
                        <p class="mt-3">
                            {{ $hero->description }}
                        </p>
                    @endif

                    <!-- BUTTONS -->
                    <div class="button mt-4">

                        <!-- PRIMARY CTA -->
                        @if($hero->button_text && $hero->button_link)
                            <a href="{{ $hero->button_link }}" class="btn primary-btn">
                                {{ $hero->button_text }}
                            </a>
                        @endif

                        <!-- VIDEO BUTTON -->
                        <a
                            href="https://www.youtube.com/embed/VjidNFxxmQQ?modestbranding=1&rel=0"
                            class="glightbox video-button btn btn-light"
                        >
                            <i class="lni lni-qr-code"></i>
                            <span>Cara Kerja</span>
                        </a>

                    </div>

                </div>
            </div>

            <!-- IMAGE -->
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image text-center">
                    <img
                        src="{{ $hero->image
                            ? asset('storage/' . $hero->image)
                            : asset('assets4/images/header/hero-image.jpg') }}"
                        alt="Hero Image"
                        class="img-fluid"
                    />
                </div>
            </div>

        </div>
    </div>
</section>
@endif
<!--====== HERO / HEADER SECTION END ======-->
