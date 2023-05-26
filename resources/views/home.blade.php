
@extends('layouts.main')
@section('beranda')
@include('partials.beranda')
<main id="more_content" class="more_content">
@include('partials.tentang')
@include('partials.fitur')
@include('partials.daftar')
@include('partials.karir')
</main>
@endsection