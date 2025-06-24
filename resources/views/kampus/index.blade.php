@extends('layouts.app')

@section('title', 'Daftar Kampus di Solo')

@section('content')
    <h1 class="title">Daftar Kampus di Solo</h1>
    <div class="columns is-multiline">
        @foreach($kampus as $k)
        <div class="column is-one-third">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="{{ asset('images/' . $k->gambar) }}" alt="{{ $k->nama_kampus }}">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-4">{{ $k->nama_kampus }}</p>
                            <p class="subtitle is-6">{{ $k->alamat }}</p>
                        </div>
                    </div>
                    <div class="content">
                        <a href="{{ route('kampus.show', $k->id) }}" class="button is-link">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
