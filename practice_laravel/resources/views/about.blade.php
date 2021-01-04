<!-- section untuk mendefinisikan isi dari field sehingga kode html pada file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
<!-- extends untuk menentukan file yang diwariskan kedalam file base.blade.php -->
@extends('template.base')
    <h1>About</h1>
    <p>Ini adalah Praktikum Pemrograman Web yang mempelajari Framework PHP yaitu Laravel</p>
@endsection