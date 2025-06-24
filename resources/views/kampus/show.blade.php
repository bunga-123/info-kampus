@extends('layouts.app')

@section('title', 'Detail Kampus')

@section('content')
    <h1 class="title">{{ $kampus->nama_kampus }}</h1>
    <figure class="image is-4by3">
        <img src="{{ asset('images/' . $kampus->gambar) }}" alt="{{ $kampus->nama_kampus }}">
    </figure>
    <div class="content">
        <p><strong>Alamat:</strong> {{ $kampus->alamat }}</p>
        <p><strong>Akreditasi:</strong> {{ $kampus->akreditasi }}</p>
        <p><strong>Program Studi:</strong></p>
        <ul>
            @foreach($kampus->program_studi as $ps)
            <li>{{ $ps->nama_program_studi }}</li>
            @endforeach
        </ul>
        <a href="{{ route('kampus.index') }}" class="button is-link">Kembali ke Daftar Kampus</a>
    </div>
@endsection
