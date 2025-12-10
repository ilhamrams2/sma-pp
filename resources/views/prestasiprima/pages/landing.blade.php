@extends('prestasiprima.index')

@section('title', 'Beranda - SMA Prestasi Prima')

@section('meta_description', 'SMA Prestasi Prima menghadirkan pendidikan kejuruan berstandar industri dengan program unggulan, fasilitas modern, serta dukungan karier dan prestasi siswa yang inspiratif.')

@section('meta_keywords', 'SMA Prestasi Prima, sekolah kejuruan Jakarta, pendidikan vokasi, prestasi siswa, pendaftaran SMA, program keahlian')

@section('content')
  @include('sections.hero')
  @include('sections.tentang')
  @include('sections.program')
  @include('sections.sejarah')
  @include('sections.virtual-tour')
  @include('sections.prestasi')
  @include('sections.industri')
  @include('sections.blog')
@endsection
