<!-- extends untuk menentukan file yang diwariskan kedalam file base.blade.php -->
@extends('template.base')
<!-- section untuk mendefinisikan isi dari field sehingga kode html pada file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
<div class="row">
    <div class="col-lg-6">
        <!-- judul yang akan muncul di halaman tambah data di bagian mahasiswa -->
        <h1>Tambah Data Mahasiswa</h1>
        <form action="{{ route('student.store') }}" method="post">
            @csrf
            <div class="form-group">
                <!-- class form NIM -->
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ old('nim') }}">
                @error('nim')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <!-- class form Nama -->
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                 <!-- class form Jenis Kelamin -->
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" class="form-control">
                    <option value=""></option>
                    @foreach ($gender as $gd)
                    <option value="{{ $gd }}" {{ (old('gender') == $gd) ? 'selected' : '' }}>{{ $gd }}</option>
                    @endforeach
                </select>
                @error('gender')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                 <!-- class form Jurusan -->
                <label for="departement">Jurusan</label>
                <select name="departement" class="form-control">
                    <option value=""></option>
                    @foreach ($departement as $dp)
                    <option value="{{ $dp }}" {{ (old('departement') == $dp) ? 'selected' : '' }}>{{ $dp }}</option>
                    @endforeach
                </select>
                @error('departement')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                 <!-- class form Alamat -->
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control" placeholder="Alamat">{{ old('address') }}</textarea>
            </div>
            <!-- tombol submit untuk mengirim data yang telah dibuat -->
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection