@extends('prestasiprima.index')

@section('title', 'Lulusan PTN')

@section('content')
<section id="lulusan-ptn" class="relative z-10 overflow-hidden pt-32 md:pt-40 pb-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 md:px-8 text-center relative">

    {{-- ===== HEADER & TEKS SATU BLOK ===== --}}
    <div class="mb-20 text-center relative" data-aos="fade-up" data-aos-duration="900">
      <div class="absolute left-1/2 -translate-x-1/2 -top-6 w-16 h-1 bg-purple-500 rounded-full"></div>

      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
        Jejak Langkah <span class="text-purple-600">Lulusan</span> Menuju <span class="text-purple-500">Masa Depan</span>
      </h2>

      <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed">
        <span class="font-semibold text-purple-500">SMA Prestasi Prima</span> bangga mengantarkan lulusan terbaiknya ke berbagai Perguruan Tinggi Negeri (PTN) terkemuka dan institusi pendidikan bergengsi di Indonesia.
      </p>
    </div>

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
    @endphp

    {{-- ===== GRID LOGO ===== --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 md:gap-8 relative" data-aos="fade-up" data-aos-delay="200">
      @foreach ($ptnLogos as $ptn)
      <div 
        class="group bg-white rounded-tr-[40px] rounded-bl-[40px] 
               shadow-md hover:shadow-lg hover:shadow-purple-200/60 
               transition duration-500 transform hover:-translate-y-1
               flex items-center justify-center p-6 border border-transparent hover:border-purple-100 relative overflow-hidden"
        title="{{ $ptn['label'] }}">

        <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-700"></div>

        <img src="{{ asset('assets/images/section/ptn/' . $ptn['file']) }}" 
             alt="{{ $ptn['label'] }}" 
             class="relative z-10 max-h-16 md:max-h-20 object-contain opacity-90 group-hover:opacity-100 transition duration-500">
      </div>
      @endforeach
    </div>

  </div>

  {{-- ====== BACKGROUND DEKORATIF (network & race) ====== --}}
  <img src="{{ asset('assets/images/section/prestasi/netowrk.svg') }}"
       alt="Network"
       class="absolute -bottom-20 -left-48 w-[460px] md:w-[560px] opacity-40 select-none pointer-events-none">

  <img src="{{ asset('assets/images/section/prestasi/race.svg') }}"
       alt="Race"
       class="absolute -bottom-72 -right-20 w-[480px] md:w-[600px] opacity-40 select-none pointer-events-none">
</section>

{{-- AOS Animation --}}
<script>
  const config = { duration: 900, once: true };
  if (window.initAOS) {
    window.initAOS(config).catch((error) => console.error('Failed to initialize AOS on Industri page', error));
  } else if (typeof window.ensureAOS === 'function') {
    window.ensureAOS().then((AOS) => AOS.init(config)).catch((error) => console.error('Failed to initialize AOS on Industri page', error));
  } else if (window.AOS) {
    window.AOS.init(config);
  }
</script>
@endsection
