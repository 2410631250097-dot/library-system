@extends('layouts.app')

@section('title', 'Book Detail')

@section('content')

<h2>Detail Buku</h2>

<p>ID Buku: {{ $id }}</p>

<p>Halaman ini menampilkan detail berdasarkan parameter ID pada URL.</p>

<a href="/books">Kembali ke Daftar Buku</a>

@endsection