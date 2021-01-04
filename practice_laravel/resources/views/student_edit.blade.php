<!-- extends untuk menentukan file yang diwariskan kedalam file base.blade.php -->
@extends('template.base')
<!-- section untuk mendefinisikan isi dari field sehingga kode html pada file beranda.blade.php dan base.blade.php dapat saling terhubung -->
@section('content')
<div class="row">
    <div class="col-lg-6">
                <!-- judul yang akan muncul di halaman edit data di bagian mahasiswa -->
        <h1>Edit Data Mahasiswa</h1>
        <form action="{{ route('student.update',['id' => $student->id]) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                 <!-- class form NIM -->
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $student->nim }}">
                @error('nim')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                 <!-- class form Nama -->
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $student->name }}">
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
                    <option value="{{ $gd }}" {{ ($student->gender == $gd) ? 'selected' : '' }}>{{ $gd }}</option>
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
                    @foreach ($depatement as $dp)
                    <option value="{{ $dp }}" {{ ($student->departement == $dp) ? 'selected' : '' }}>{{ $dp }}</option>
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
                <textarea name="address" class="form-control" placeholder="Alamat">{{ $student->address }}</textarea>
            </div>
                <!-- tombol submit untuk mengirim data yang telah dibuat -->
            <button type="submit" class="btn btn-info">Edit</button>
        </form>
    </div>
</div>
@endsection