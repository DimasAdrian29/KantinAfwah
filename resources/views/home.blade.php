@extends('layouts.landing')
{{-- @section('title','Landing Page') --}}

{{-- @section('content') --}}
{{-- @include('components.hero', [
    'salam' => 'Halo,Perkenalkan Saya Hakim',
    'judul' => 'Saya Merupakan Mahasiswa PCR',
    'caption' => 'Saya Cinta Coding'

])
@include('components.slider')
@include('components.services',['services'=>$services]) --}}
 {{-- @include('components.portofolio')
@include('components.testimonials')
@include('components.cta') --}}


@section('content')
@include('KantinAfwah.navbar')
@include('KantinAfwah.slider')
@include('KantinAfwah.about')
@include('KantinAfwah.menu')
@include('KantinAfwah.footer')
@endsection
