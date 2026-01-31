@php
    use App\Models\Cta;

    // Ambil CTA utama
    $cta = Cta::where('section_key', 'cta_main')
            ->where('is_active', true)
            ->first();
@endphp

@if($cta)
<!--====== CTA SECTION START ======-->
<section id="cta" class="cta-section pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cta-content text-center">

                    <!-- TITLE -->
                    <h2 class="fw-bold mb-3">
                        {{ $cta->title }}
                    </h2>

                    <!-- DESCRIPTION -->
                    @if($cta->description)
                        <p class="mb-4">
                            {{ $cta->description }}
                        </p>
                    @endif

                    <!-- BUTTON -->
                    @if($cta->button_text && $cta->button_link)
                        <a href="{{ $cta->button_link }}" class="btn primary-btn rounded-full">
                            {{ $cta->button_text }}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!--====== CTA SECTION END ======-->
@endif
