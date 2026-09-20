@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<h2>Daftar Buku</h2>

<p>Berikut adalah daftar buku pada Sistem Informasi Perpustakaan.</p>

@if($stock > 0)
    <p>Buku tersedia. Stok saat ini: {{ $stock }}</p>
@else
    <p>Buku sedang habis.</p>
@endif

<h3>Koleksi Buku</h3>

<ul>
    @foreach($books as $book)
        <li>
            <strong>{{ $book['title'] }}</strong>
            - {{ $book['author'] }}
            - {{ $book['year'] }}
        </li>
    @endforeach
</ul>

@endsection