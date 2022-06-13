@extends('layouts.main')
@section('content')
<div class="ml-4"><h2 class="ml-5 mt-4">Data Mahasiswa</h2></div>
<div class="row mt-4 mr-1 mb-2 ml-5">
    @foreach ($mahasiswas as $mahasiswa) {{-- menampilkan data dari database --}}
    <div class="col-sm-5 card mr-2 ml-3 mb-4" style="border-radius: 25px;">
        <div class="row">  
        <div class="col-6 card-body" style="">
            <h5 class="card-title mr-5">{{ $mahasiswa->nama }} {{-- menampilkan nama --}}
                {{-- <a href="{{ route('edit', $mahasiswa->nim) }}" class="bg-primary ml-4 p-1 px-2 rounded"
                    style="float:right; clear:left"><i class="fas fa-solid fa-pen" style="color: white; "></i></a>
                <a href="{{ route('delete', $mahasiswa->nim) }} " class="bg-light ml-5 p-1 px-2 rounded"
                    style="float:right; clear:left"><i class="fas fa-solid fa-trash" style="color: red"></i></a> --}}
            </h5>
            <p class="card-text">{{ $mahasiswa->nim }}</p> {{-- menampilkan nim --}}
            <p class="card-text">{{ $mahasiswa->alamat }}</p> {{-- menampilkan alamat --}}
            
        </div>
        <div class="col-6 card-body text-right">
            <a href="{{ route('delete', $mahasiswa->nim) }} " class="p-1 px-2 rounded-circle" style="border: 1px solid grey;"><i
                    class="fas fa-solid fa-trash" style="color: red"></i></a> {{-- memanggil route delete dengan parameter nim --}}
            <a href="{{ route('edit', $mahasiswa->nim) }}" class="rounded-circle ml-2" style=""><i
                    class="fas fa-solid fa-pen" style="color: blue; "></i></a> {{-- memanggil route edit dengan parameter nim --}}
            <p class="card-text mt-3">{{ $mahasiswa->email }}</p> {{-- menampilkan email --}}
                    
        </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
