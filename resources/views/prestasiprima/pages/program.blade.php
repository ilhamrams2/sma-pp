@extends('prestasiprima.index')

@section('title', 'Program Keahlian - SMA Prestasi Prima')

@section('meta')
  {{-- ===== META SEO OPTIMIZATION ===== --}}
  <meta name="description" content="SMA Prestasi Prima memiliki empat Program Keahlian unggulan: PPLG, DKV, TJKT, dan BCF. Mempersiapkan siswa menjadi profesional di dunia IT dan kreatif.">
  <meta name="keywords" content="SMA Prestasi Prima, program keahlian, jurusan SMA, PPLG, DKV, TJKT, BCF, sekolah IT terbaik, sekolah teknologi, prestasi prima">
  <meta property="og:title" content="Program Keahlian - SMA Prestasi Prima">
  <meta property="og:description" content="Kenali empat program keahlian unggulan di SMA Prestasi Prima yang mempersiapkan siswa menghadapi dunia industri digital.">
  <meta property="og:image" content="{{ asset('assets/images/gedung/gedungsiswa.avif') }}">
  <meta property="og:type" content="website">
@endsection

@section('content')
<section class="pt-32 pb-24 bg-white relative overflow-hidden">

  {{-- ==================== PROFIL JURUSAN ==================== --}}
  <div class="max-w-7xl mx-auto px-6 md:px-10 flex flex-col md:flex-row items-center gap-10 md:gap-16">
    <figure class="md:w-1/2">
      <img 
        src="{{ asset('assets/images/program/kepsek.png') }}" 
        alt="Kepala Sekolah SMA Prestasi Prima" 
        loading="lazy"
        decoding="async"
        class="w-full h-auto rounded-2xl object-cover shadow-md"
      >
    </figure>

    <div class="md:w-1/2">
      <h1 class="text-4xl md:text-5xl font-bold text-purple-600 mb-4">Profil Jurusan</h1>
      <p class="text-gray-700 leading-relaxed mb-6 text-justify">
        Di <strong>SMA Prestasi Prima</strong>, kami percaya bahwa masa depan ada di tangan para <em>pemimpin masa depan</em>.
        Sebagai <strong>Sekolah Unggulan</strong>, kami berkomitmen membentuk talenta unggul melalui empat Program Peminatan yang relevan â€”
        <span class="font-semibold">IPA</span>, <span class="font-semibold">IPS</span>, <span class="font-semibold">Bilingual IPA</span>, dan <span class="font-semibold">Bilingual IPS</span> â€”
        dengan kurikulum berstandar internasional. Kami memastikan setiap lulusan siap bersaing di tingkat global.
      </p>
      <a href="#daftar-jurusan" class="inline-flex items-center bg-purple-600 text-white px-5 py-3 rounded-lg font-medium hover:bg-purple-700 transition-all duration-300 focus:ring-2 focus:ring-purple-400">
        Selengkapnya <i class="ms-2 fas fa-arrow-right"></i>
      </a>
    </div>
  </div>

  {{-- ==================== JURUSAN 1 ==================== --}}
  <div class="max-w-6xl mx-auto px-6 md:px-10 mt-24 flex flex-col md:flex-row items-center gap-10">
    <div class="md:w-1/2">
      <img src="{{ asset('assets/images/program/pplg.png') }}" alt="Pengembangan Perangkat Lunak dan Gim" class="rounded-2xl w-full object-cover">
    </div>
    <div class="md:w-1/2">
      <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Ilmu Pengetahuan Alam (IPA)</h3>
      <p class="text-gray-700 mb-6 text-justify">
        Program ini dirancang untuk siswa yang memiliki minat kuat pada sains dan teknologi. 
        Mendalami mata pelajaran Biologi, Fisika, Kimia, dan Matematika dengan pendekatan praktis dan analitis. 
        Lulusan dipersiapkan untuk melanjutkan pendidikan ke jenjang universitas di bidang Kedokteran, Teknik, Sains, dan Farmasi.
      </p>
      <a href="#" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
        Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
      </a>
    </div>
  </div>

  {{-- ==================== JURUSAN 2 ==================== --}}
  <div class="max-w-6xl mx-auto px-6 md:px-10 mt-24 flex flex-col md:flex-row-reverse items-center gap-10">
    <div class="md:w-1/2">
      <img src="{{ asset('assets/images/program/dkv.png') }}" alt="Desain Komunikasi Visual" class="rounded-2xl w-full object-cover">
    </div>
    <div class="md:w-1/2">
      <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Ilmu Pengetahuan Sosial (IPS)</h3>
      <p class="text-gray-700 mb-6 text-justify">
        Program ini fokus pada pemahaman dinamika masyarakat, ekonomi, dan hubungan internasional.
        Siswa mempelajari Sosiologi, Ekonomi, Geografi, dan Sejarah.
        Lulusan siap melanjutkan ke jurusan Hukum, Hubungan Internasional, Manajemen, Akuntansi, dan Psikologi.
      </p>
      <a href="#" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
        Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
      </a>
    </div>
  </div>

  {{-- ==================== JURUSAN 3 ==================== --}}
  <div class="max-w-6xl mx-auto px-6 md:px-10 mt-24 flex flex-col md:flex-row items-center gap-10">
    <div class="md:w-1/2">
      <img src="{{ asset('assets/images/program/tjkt.png') }}" alt="Teknik Jaringan Komputer dan Telekomunikasi" class="rounded-2xl w-full object-cover">
    </div>
    <div class="md:w-1/2">
      <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Bilingual Science (IPA)</h3>
      <p class="text-gray-700 mb-6 text-justify">
        Program unggulan yang memadukan Kurikulum Nasional dengan Kurikulum Internasional (Cambridge).
        Pembelajaran mata pelajaran sains (Biology, Physics, Chemistry, Math) disampaikan dalam Bahasa Inggris.
        Mempersiapkan siswa untuk bersaing di universitas luar negeri maupun program internasional dalam negeri.
      </p>
      <a href="#" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
        Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
      </a>
    </div>
  </div>

  {{-- ==================== JURUSAN 4 ==================== --}}
  <div class="max-w-6xl mx-auto px-6 md:px-10 mt-24 flex flex-col md:flex-row-reverse items-center gap-10">
    <div class="md:w-1/2">
      <img src="{{ asset('assets/images/program/bcf.png') }}" alt="Broadcasting dan Film" class="rounded-2xl w-full object-cover">
    </div>
    <div class="md:w-1/2">
      <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Bilingual Social (IPS)</h3>
      <p class="text-gray-700 mb-6 text-justify">
        Program kelas internasional untuk studi sosial dan humaniora.
        Mata pelajaran Ekonomi, Sosiologi, dan Geografi diajarkan dengan pengantar Bahasa Inggris.
        Fokus pada pengembangan wawasan global, kemampuan debat, dan analisis isu internasional.
      </p>
      <a href="#" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
        Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
      </a>
    </div>
  </div>

    {{-- ========== JURUSAN 4: BCF ========== --}}
    <article class="max-w-6xl mx-auto px-6 md:px-10 flex flex-col md:flex-row-reverse items-center gap-10 scroll-mt-20">
      <figure class="md:w-1/2">
        <img 
          src="{{ asset('assets/images/program/bcf.png') }}" 
          alt="Jurusan BCF - Broadcasting dan Film" 
          loading="lazy"
          decoding="async"
          class="rounded-2xl w-full h-auto object-cover shadow-lg"
        >
      </figure>
      <div class="md:w-1/2">
        <h2 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Broadcasting dan Film (BCF)</h2>
        <p class="text-gray-700 mb-6 text-justify">
          Jurusan ini berfokus pada produksi konten audiovisual seperti penyiaran (televisi, radio) dan film.
          Siswa belajar penyutradaraan, sinematografi, penulisan skenario, hingga editing video.
          Lulusan siap berkarier sebagai <strong>filmmaker</strong> atau <strong>editor profesional</strong>.
        </p>
        <a href="{{ route('program.bcf') }}" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition-all duration-300 focus:ring-2 focus:ring-purple-400">
          Selengkapnya <i class="ms-2 fas fa-arrow-right"></i>
        </a>
      </div>
    </article>
  </div>
</section>

{{-- ========== STRUCTURED DATA (JSON-LD) ========== --}}
@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "SMA Prestasi Prima",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('assets/images/logo.png') }}",
  "sameAs": [
    "https://www.instagram.com/smkprestasiprima/",
    "https://www.facebook.com/smkprestasiprima/",
    "https://www.youtube.com/@smkprestasiprima"
  ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jl. Kelapa Dua Wetan No.17, Ciracas, Jakarta Timur",
    "addressLocality": "Jakarta Timur",
    "addressRegion": "DKI Jakarta",
    "postalCode": "13730",
    "addressCountry": "ID"
  },
  "department": [
    {
      "@type": "Course",
      "name": "Ilmu Pengetahuan Alam (IPA)",
      "description": "Mendalami sains, biologi, fisika, kimia, dan matematika.",
      "provider": { "@type": "EducationalOrganization", "name": "SMA Prestasi Prima" }
    },
    {
      "@type": "Course",
      "name": "Ilmu Pengetahuan Sosial (IPS)",
      "description": "Mempelajari dinamika masyarakat, ekonomi, literasi keuangan, dan sosiologi.",
      "provider": { "@type": "EducationalOrganization", "name": "SMA Prestasi Prima" }
    },
    {
      "@type": "Course",
      "name": "Bilingual Science (IPA)",
      "description": "Kurikulum internasional Cambridge untuk sains dan matematika.",
      "provider": { "@type": "EducationalOrganization", "name": "SMA Prestasi Prima" }
    },
    {
      "@type": "Course",
      "name": "Bilingual Social (IPS)",
      "description": "Program internasional untuk studi sosial dan global perspectives.",
      "provider": { "@type": "EducationalOrganization", "name": "SMA Prestasi Prima" }
    }
  ]
}
</script>
@endsection
@endsection
