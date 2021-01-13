@extends('template.base')
@section('content')
<h1>DataTable</h1>
<div class="row">
    <div class="col-lg-12">
        @if (session()->has('pesan'))
        <!-- pesan didapat dari studentController bagian redirect -->
            <div class="alert alert-success">
                {{ session()->get('pesan') }}
            </div>
        @endif
        <!-- memanggil route student.create saat memilih tambah -->
        <a href="{{ route('student.create') }}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                @forelse ($student as $mahasiswa)
                <tr>
                    <!-- loop iteration untuk menyesuaikan jumlah data -->
                    
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->gender }}</td>
                    <td>{{ $mahasiswa->departement }}</td>
                    <td>{{ $mahasiswa->address }}</td>
                    <td>
                        <!-- enggunakan route student.destroy dimana id tertentu akan dikirimkan menggunakan post -->
                        <form action="{{ route('student.destroy',['id' => $mahasiswa->id]) }}" method="POST">
                            <!-- memanggil method delete -->
                            @method('DELETE')
                            <!-- csrf itu untuk proteksi jadi setiap ada inputan maka akan dibuat token -->
                            @csrf
                            <a href="{{ route('student.edit',['id' => $mahasiswa->id]) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="" method="post">
                            @method('DELETE')
                            @csrf
                            <!-- menggunakan route student.edit dimana id tertentu yang terpilih -->
                        <a href="{{ route('student.create') }}" class="btn btn-primary mb-2">Tambah</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <!-- pwsan jika data yang di input kan tidak ada -->
                    <td class="text-center" colspan="7">Data tidak ada!</td>
                </tr>
                @endforelse

            </table>
        </div>
    </div>
</div>
@endsection