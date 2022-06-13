@extends('layouts.main')
@section('content')
<h2 class="mt-4 mb-4">Edit Data Mahasiswa</h2>
<form action="{{ route('update') }}" method="POST"> {{-- ngirim data ke route update --}}
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama" class="font-weight-bold">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}"> {{-- memberikan nilai nama sebelum di edit --}}
        </div>
        <div class=" form-group col-md-6">
            <label for="email" class="font-weight-bold">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email"
                value="{{ $mahasiswa->email }}"> {{-- memberikan nilai email sebelum di edit --}}
        </div>
        <div class="form-group col-md-6">
            <label for="nim" class="font-weight-bold">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}"> {{-- memberikan nilai nim sebelum di edit --}}
        </div>
        <div class=" form-group col-md-6">
            <label for="alamat" class="font-weight-bold">Alamat Rumah</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $mahasiswa->alamat }}"> {{-- memberikan nilai alamat sebelum di edit --}}
        </div>
    </div>
        <button type=" submit" value="submit" name="submit" class="btn btn-secondary mt-5 float-right">Edit</button>
</form>

@endsection
