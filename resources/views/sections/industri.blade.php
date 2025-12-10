<!-- ================= SECTION INDUSTRI ================= -->
<section id="industri" class="relative py-28 bg-gradient-to-b from-white via-purple-50/30 to-white overflow-hidden">

  <!-- ===== Dekorasi ===== -->
<img src="{{ asset('assets/images/section/industri/network1.svg') }}"
     alt="Dekorasi Kanan"
     class="absolute top-0 right-0 w-72 sm:w-[34rem] md:w-[48rem] opacity-45 pointer-events-none select-none animate-float-fast"
     data-aos="fade-zoom-right"
     data-aos-delay="100"
     data-aos-duration="900"
     data-aos-easing="ease-out-cubic"
     data-rellax-speed="3">

<img src="{{ asset('assets/images/section/industri/network2.svg') }}"
     alt="Dekorasi Kiri"
     class="absolute bottom-0 left-0 w-52 sm:w-64 md:w-80 opacity-30 pointer-events-none select-none animate-float-reverse-fast"
     data-aos="fade-up"
     data-aos-delay="300"
     data-aos-duration="1000"
     data-aos-easing="ease-out-cubic"
     data-rellax-speed="-2">


  @php
    $ptnLogos = [
        ['file' => 'unj.png', 'label' => 'Universitas Negeri Jakarta'],
        ['file' => 'ipb.png', 'label' => 'Institut Pertanian Bogor'],
        ['file' => 'unpad.png', 'label' => 'Universitas Padjadjaran'],
        ['file' => 'trisakti.png', 'label' => 'Universitas Trisakti'],
        ['file' => 'uin2.png', 'label' => 'UIN Syarif Hidayatullah Jakarta'],
        ['file' => 'isi2.png', 'label' => 'Institut Seni Indonesia Surakarta'],
        ['file' => 'politeknik.png', 'label' => 'Politeknik Prestasi Prima'],
        ['file' => 'ui3.png', 'label' => 'Universitas Indonesia'],
    ];

    $ptnData = [];
    foreach ($ptnLogos as $ptn) {
        $path = public_path('assets/images/section/ptn/' . $ptn['file']);
        $size = @getimagesize($path) ?: [400, 160];
        $ptn['width'] = $size[0];
        $ptn['height'] = $size[1];
        $ptnData[] = $ptn;
    }
  @endphp

  <!-- ===== Konten ===== -->
  <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 text-center">

    <!-- ========== JUDUL ========== -->
    <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="900">
      <p class="text-purple-500 font-semibold tracking-widest uppercase mb-3">Lulusan Kami</p>
      <h3 class="text-3xl md:text-4xl font-extrabold text-purple-600 mb-6 tracking-tight uppercase">
        Jejak Langkah Lulusan
      </h3>
      <p class="text-gray-600 max-w-2xl mx-auto mb-16 leading-relaxed">
        Kami bangga mengantarkan siswa-siswi terbaik menuju gerbang masa depan, diterima di berbagai Perguruan Tinggi Negeri dan Swasta Favorit.
      </p>
    </div>

    <!-- ========== SCROLL LOGO ========== -->
    <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="900" class="relative w-full overflow-hidden group">
      <div class="flex animate-scroll-horizontal space-x-14 sm:space-x-20 items-center will-change-transform">

        {{-- Loop Original --}}
        @foreach ($ptnData as $ptn)
        <div class="logo-item flex items-center justify-center bg-white/80 backdrop-blur-md rounded-2xl shadow-md p-4 transition-all duration-700 hover:shadow-xl hover:scale-105 hover:-translate-y-1" title="{{ $ptn['label'] }}">
          <img src="{{ asset('assets/images/section/ptn/' . $ptn['file']) }}"
               alt="{{ $ptn['label'] }}"
               width="{{ $ptn['width'] }}"
               height="{{ $ptn['height'] }}"
               loading="lazy"
               decoding="async"
               class="w-auto h-16 sm:h-20 md:h-24 object-contain transition-all duration-700 hover:drop-shadow-[0_0_16px_rgba(147,51,234,0.4)]">
        </div>
        @endforeach

        {{-- Duplicate for infinite scroll --}}
        @foreach ($ptnData as $ptn)
        <div class="logo-item flex items-center justify-center bg-white/80 backdrop-blur-md rounded-2xl shadow-md p-4 transition-all duration-700 hover:shadow-xl hover:scale-105 hover:-translate-y-1" title="{{ $ptn['label'] }}">
          <img src="{{ asset('assets/images/section/ptn/' . $ptn['file']) }}"
               alt="{{ $ptn['label'] }}"
               width="{{ $ptn['width'] }}"
               height="{{ $ptn['height'] }}"
               loading="lazy"
               decoding="async"
               class="w-auto h-16 sm:h-20 md:h-24 object-contain transition-all duration-700 hover:drop-shadow-[0_0_16px_rgba(147,51,234,0.4)]">
        </div>
        @endforeach
      </div>
    </div>

    <!-- Tombol CTA -->
    <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="900">
      <a href="#"
         class="inline-block mt-14 px-8 py-3 bg-purple-800 text-white font-semibold rounded-xl shadow-md hover:bg-purple-900 hover:shadow-lg transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-200 focus-visible:ring-offset-2">
         Lihat Selengkapnya
      </a>
    </div>
  </div>

  <!-- Gradient fade effect kiri-kanan -->
  <div class="pointer-events-none absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white to-transparent"></div>
  <div class="pointer-events-none absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white to-transparent"></div>
</section>

<!-- ================= STYLE ================= -->
@push('styles')
<style>
@keyframes scroll-horizontal {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.animate-scroll-horizontal {
  animation: scroll-horizontal 28s linear infinite;
  width: max-content;
}
/* Animasi melayang */
@keyframes float-fast {
  0%, 100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(8px) scale(1.02); }
}
@keyframes float-reverse-fast {
  0%, 100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-8px) scale(1.02); }
}
.animate-float-fast {
  animation: float-fast 6s ease-in-out infinite;
}
.animate-float-reverse-fast {
  animation: float-reverse-fast 7s ease-in-out infinite;
}

/* Custom AOS - fade zoom from right */
[data-aos="fade-zoom-right"] {
  opacity: 0;
  transform: translateX(40px) scale(0.95);
  transition-property: transform, opacity;
}
[data-aos="fade-zoom-right"].aos-animate {
  opacity: 1;
  transform: translateX(0) scale(1);
}
</style>
@endpush

<!-- ================= SCRIPT ================= -->
@push('scripts')
<script>
  const configIndustriSection = { once: true, duration: 1000, offset: 100, easing: 'ease-out-cubic' };
  if (window.initAOS) {
    window.initAOS(configIndustriSection).catch((error) => console.error('Failed to initialize AOS on Industri section', error));
  } else if (typeof window.ensureAOS === 'function') {
    window.ensureAOS().then((AOS) => AOS.init(configIndustriSection)).catch((error) => console.error('Failed to initialize AOS on Industri section', error));
  } else if (window.AOS) {
    window.AOS.init(configIndustriSection);
  }
</script>
@endpush
