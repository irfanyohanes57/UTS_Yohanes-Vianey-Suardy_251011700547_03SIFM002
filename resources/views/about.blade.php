@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 class="fw-bold mb-1">Tentang</h1>
        <p class="text-muted mb-0">Identitas pembuat dan tema aplikasi.</p>
    </div>
</section>

<section class="container py-5">
    <div class="card shadow-sm border-0">
        <div class="card-body p-4 p-lg-5 text-center">
            <img src="{{ asset('assets/images/foto-profil.jpeg') }}" alt="Foto profil" class="hero-photo">
            <table class="table table-borderless w-auto mx-auto text-start mb-4">
                <tr><th class="pe-4">Nama</th><td>Yohanes Vianey suardy</td></tr>
                <tr><th class="pe-4">NIM</th><td>251011700547</td></tr>
                <tr><th class="pe-4">Program Studi</th><td>Sistem Informasi</td></tr>
                <tr><th class="pe-4">Mata Kuliah</th><td>Rekayasa Web</td></tr>
                <tr><th class="pe-4">Dosen Pengampu</th><td>Afif Efendi</td></tr>
                <tr><th class="pe-4">Tema</th><td>Daftar Film (tabel movies)</td></tr>
            </table>
            <p class="text-secondary mb-0">
                Aplikasi ini dibuat dengan Laravel, Blade Template, dan Bootstrap untuk UTS Rekayasa Web.
            </p>
        </div>
    </div>
</s ection>
@endsection